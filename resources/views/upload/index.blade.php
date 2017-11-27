<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>多檔案上傳測試</title>
</head>
<body>
    <h1>檔案上傳測試</h1>
    <form action="{{ route('upload.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="file" name="images[]" id="images" multiple/>
        <input type="submit" value="送出"/>
    </form>
</body>
</html>