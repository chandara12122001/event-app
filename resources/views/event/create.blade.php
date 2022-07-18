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
            {{csrf_field()}}

            <div class="input-group control-group increment">
                <input type="file" name="files[]" multiple class="form-control">
                <input type="text" placeholder="description" name="description">
                <input type="text" placeholder="price" name="price">
                <input type="text" placeholder="no_of_seats" name="no_of_seats">
                <input type="date" name="event_date">
                <div class="input-group-btn">
                    <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

        </form>
    </div>

</body>

</html>