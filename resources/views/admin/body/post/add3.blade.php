<!DOCTYPE html>
<html>

<body>
  <h1>Create Post View</h1>
  <form>
    <textarea id="editor1" name="content" rows="10" cols="80">
    </textarea>
  </form>
  <script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
  <script src="{{asset('public/ckfinder/ckfinder.js')}}"></script>
  <script>
    CKEDITOR.replace('editor1', {
    filebrowserBrowseUrl: "{{asset('public/ckfinder/ckfinder.html')}}",
    filebrowserUploadUrl: "{{asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"});
  </script>
</body>
</html>