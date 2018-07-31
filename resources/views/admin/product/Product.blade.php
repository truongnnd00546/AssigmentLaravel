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
<h1>Hiển thị danh sách sản phẩm</h1>
<ul>
    <li><a href="/admin/product/create">Create</a></li>
</ul>
@foreach($list_pro as $item)
    <a href="/admin/product/{{$item->id}}">{{$item->name}}</a>
    <img src="{{$item->image}}" style="width: 150px">
    <a href="/admin/product/{{$item->id}}/edit">Edit</a>
    <a href="#/admin/product/{{$item->id}}" id="{{$item->id}}" class="btn-del">Delete product</a>
@endforeach
<script>
    $('.btn-del').click(function () {
        var productId = this.id;
        var confirmUser = confirm('Bạn có muốn xóa không?');
        if (confirmUser) {
            $.ajax({
                url: 'http://127.0.0.1:8000/admin/product/' + productId,
                method: 'DELETE',
                data: {
                    '_token': "{{csrf_token()}}"
                },
                success: function () {
                    alert('Delete success');
                    window.location.reload();
                },
                error: function () {
                    alert('Delete Fail');
                }
            });
        } else {
            alert('Không xóa được');
        }
    });
</script>

</body>
</html>