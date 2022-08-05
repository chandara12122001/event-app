<form action="{{route('create.profile.post')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" required>
    <button type="submit">
        Upload new profile
    </button>
</form>