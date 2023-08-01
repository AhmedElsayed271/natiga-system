<form action="{{ url('/import') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" />
    <button type="submit">send</button>
</form>