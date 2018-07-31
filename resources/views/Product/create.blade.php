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
        .productName input {
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
<h2 style="color: #3490dc">Product Form</h2>
<form action="/product" method="POST" class="container">
    {{csrf_field()}}
    <div class="form-group productName">
        <lable>Product Name:</lable>
        <input type="text" name="name">
    </div>
    <div class="form-group category">
        <lable>Category:</lable>
        <select  name="category" id="">
            <option value="category 1">category 1</option>
            <option value="category 2">category 2</option>
        </select>
    </div>
    <div class="form-group price">
        Price : <input type="text" name="price">
    </div>
    <div class="form-group thumbnail">
        Image <input type="text" name="thumbnail">
    </div>
    <div class="form-group description">
        Description <textarea name="description" id="" cols="23" rows="5"></textarea>
    </div>
    <div>
        <input type="submit" value="Save" style="background-color: #4dc0b5">
        <input type="reset" value="Reset" style="background-color: #ffed4a">
    </div>
</form>
</body>
</html>