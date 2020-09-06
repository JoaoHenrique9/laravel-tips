<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        html,body{
            height: 100%;
        }
        body{
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }
        .form-signin{
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
        .form-singnin .checkbox{
            font-weight: 400;
        }
        .form-singnin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 10px;
        }

        .form-signin .form-control:focus{
            z-index: 2;
        }

        .form-signin input[type ="email"]{
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }


        .form-signin input[type ="password"]{
            margin-bottom: 10px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        img{
            max-width: 100%;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<form action="{{ route('admin.login.do') }}" method="POST" class="form-signin">
    @csrf
    <img src="http://www.upinside.com.br/themes/upinside_new/_img/logo.png" alt="">

    @if($errors->all())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <label for="email">Endereço de email</label>
    <input type="text" name="email" id="email" class="form-control" value="joao.henrique@gmail.com" placeholder="seu email">

    <label for="password" class="sr-only">Senha</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="Senha">

    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
</form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
