<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadProfile extends Component
{
    use WithFileUploads;

    public $photo;

    public function render()
    {
        return view('livewire.upload-profile')->layout('app-layout.app');
    }

    public function save(){
        // dd($this->photo);
        $filePath = $this->photo->store('public/profile');
        // dd(auth()->user()->id);
        Image::create(
            [
                'user_id' => auth()->user()->id,
                'image' => $filePath
            ]
        );
        return redirect('/')->with('Success', 'Uploaded profile');
    }
    
}
