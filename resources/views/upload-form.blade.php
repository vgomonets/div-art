
<form method="post" action="{{ route('upload_file') }}" enctype="multipart/form-data">
    <input name="_token" type="hidden" value="{{ csrf_token() }}">
    <input type="file" multiple name="file[]">
    <button type="submit">Завантажити</button>
</form>
