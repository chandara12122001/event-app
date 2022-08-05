<form action="{{route('edit.profile.post')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="file" name="file" required>
    <button type="submit">
        Edit new profile
    </button>
</form>