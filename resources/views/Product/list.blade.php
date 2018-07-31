<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<style>
    .button-card{
        background-color: #9fcdff;
        border: none;
    }
    .title{
        margin-top: 10px;
    }

    .add{
        margin-bottom: 10px;
    }
</style>
<body>

<div class="container">
    <h4 style="text-align: center; margin-bottom: 20px">List Form</h4>
    <div class="row">
        @foreach($products as $product)
            <div class="col-4 border border-danger m-auto">
                <h6 class="text-center title">{{ $product -> title }}</h6>
                <img class="container" height="180" width="200" src="{{ $product -> thumbnail }}" alt="">
                <h6 class="text-center">{{ $product -> price }}$</h6>
                <h6 class="text-center">{{ $product -> description }}</h6>
                <div class="text-center add">
                    <a href="/product/{{$product -> id}}/edit">Sửa</a>&nbsp;<a href="{{$product -> id}}" class="btn-delete">Xóa</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script>
    $('.btn-delete').click(function () {
        var productId = $(this).attr('href');
        alert(productId);
        var user_confirm = confirm('Are you sure');
        if(user_confirm){
            $.ajax({
                url: '/product/' + productId,
                method: 'DELETE',
                data: {
                    '_token': "{{ csrf_token() }}"
                },
                success:function (response) {
                    alert('Xoa thanh cong')
                    window.location.reload();
                },
                error:function () {
                    alert('error');
                }

            });
        }
    });
</script>
</body>
</html>