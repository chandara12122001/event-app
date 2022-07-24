<html lang="en">

<head>
    <title>Laravel Multiple File Upload Example</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>


    <div class="container">

        <h3 class="jumbotron">Laravel Multiple File Upload</h3>
        <form method="post" action="{{route('event.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="input-group control-group increment">
                <input type="text" name="title" placeholder="Event title">
                <input type="file" name="files[]" multiple class="form-control">
                <input type="text" placeholder="description" name="description">
                <input type="number" placeholder="price" name="price">
                <input type="number" placeholder="no_of_seats" name="no_of_seats">
                <input type="date" name="event_date">
            </div>
            <div>
                <label for="">Location</label>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

        </form>
    </div>

</body>

</html>
