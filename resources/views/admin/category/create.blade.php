<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<h1>Thêm sản phẩm</h1>
<form action="/admin/category" method="post">
    {{csrf_field()}}
    <div>
        <label>Name product:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Image product:</label>
        <input type="text" name="image">
    </div>
    <div>
        <label>Description product: </label>
        <input type="text" name="description">
    </div>
    <input type="submit" value="Create">
    <input type="reset" value="Reset">
</form>
</body>
</html>