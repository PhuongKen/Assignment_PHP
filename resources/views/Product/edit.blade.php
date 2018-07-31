<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .productName input{
            margin-left: 50px;
        }
        .category select{
            margin-left: 88px;
        }
        .price input{
            margin-left: 113px;
        }
        .thumbnail input{
            margin-left: 110px;
        }
        .description textarea{
            margin-left: 71px;
        }
    </style>
</head>
<body class="container">
<h2>Edit Form</h2>
<form action="/product/{{$products -> id}}" method="POST" class="container">
    @method('PUT')
    {{csrf_field()}}
    <div class="form-group productName">
        <lable>Product Name:</lable>
        <input type="text" name="name" value="{{$products -> title}}">
    </div>
    <div class="form-group category">
        <lable>Category:</lable>
        <select  name="category" id="">
            <option value="{{$products -> category}}">{{$products -> category}}</option>
        </select>
    </div>
    <div class="form-group price">
        Price : <input type="text" name="price" value="{{$products -> price}}">
    </div>
    <div class="form-group thumbnail">
        Image <input type="text" name="thumbnail" value="{{$products -> thumbnail}}">
    </div>
    <div class="form-group description">
        Description <textarea name="description" id="" id="" cols="23" rows="5">{{$products -> description}}</textarea>
    </div>
    <div>
        <input type="submit" value="Save" style="background-color: #4dc0b5">
        <input type="reset" value="Reset" style="background-color: #ffed4a">
    </div>
</form>
</body>
</html>