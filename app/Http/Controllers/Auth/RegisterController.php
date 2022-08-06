<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use PHPMailer\PHPMailer\PHPMailer;
use PHPmailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class RegisterController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'name' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
            'username' => 'required|max:255'
        ]);

        $mail = new PHPMailer(true);
        $user = new User();
        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Port = env('MAIL_PORT');
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');

            // $mail->Host = 'smtp.mailtrap.io';
            // $mail->SMTPAuth = true;
            // $mail->Port = 2525;
            // $mail->Username = 'd2f870d63906b2';
            // $mail->Password = 'fb10925558b329';
            $mail->setFrom('massevent.kh@gmail.com', 'massevent.com');

            $mail->addAddress($request->email, $request->name);

            $mail->isHTML(true);

            $email_verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
            $mail->Subject = "Email Verification";
            $mail->Body = '<p>Your verification code is: <b style="font-size: 30px;">' . $email_verification_code . '</b></p>';
            $mail->send();
            $user->name = $request->name;
            $user->phone_number = $request->phone_number;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->username = $request->username;
            $user->email_verification_code = $email_verification_code;
            // $user = new User([
            //     'name' => $request->name,
            //     'phone_number' => $request->phone_number,
            //     'email' => $request->email,
            //     'password' => Hash::make($request->password),
            //     'username' => $request->username,
            //     'email_verification_code' => $email_verification_code
            // ]);
            $user->save();
        } catch (Exception $e) {
            echo "Message could not be sent, Mailer Error: {$mail->ErrorInfo}";
        }
        // dd($user->id);
        return redirect('/verify/'.$user->id);
    }

    public function showVerify($id){
        // dd("show verify");
        $user = User::findOrFail($id);
        return view('auth.verify', compact('user'));
    }

    public function verify(Request $request, $id){
        // dd($request->email_verification_code);
        $user = User::findOrFail($id);
        if($user->email_verification_code == $request->email_verification_code){
            $user->update([
                'email_verified_at' => Carbon::now(),
                'email_verification_code' => ''
            ]);
            auth()->login($user);
        }else{
            $request->session()->flash('status', "Invalid Verification Code");
            return redirect()->back();
        }
        return redirect('/');
    }
}
