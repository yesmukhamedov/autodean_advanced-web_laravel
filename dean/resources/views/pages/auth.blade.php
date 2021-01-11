<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://iitu.kz/static/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
    <style>
        #formFooter {
            background-color: #f6f6f6;
            border-top: 1px solid #dce8f1;
            padding: 5px;
            text-align: center;
            -webkit-border-radius: 0 0 10px 10px;
            border-radius: 0 0 10px 10px;
        }    
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="https://dl.iitu.kz/">dl.iitu.kz</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    English (en)
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Русский (ру)</a>
                    <a class="dropdown-item" href="#">Қазақша (қз)</a>
                </div>
            </li>
        </ul>
    </div>
    <a href="{{ route('home') }}" class="btn btn-outline-success float-right">Хоум</a>
</nav>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-sm">
{{--           @if(count($check) >0)--}}
{{--                @foreach($check as $val)--}}
{{--                    <p class="text-xl-left">{{$val}}</p>--}}
{{--                @endforeach--}}
{{--           @endif--}}

{{--               <p class="text-xl-left">{{$check}}</p>--}}
        </div>
        <form action="{{url('/login')}}" method="POST" id="login-form">
            {{-- csrf_field() --}}
            @csrf
            <div class="col-sm border shadow bg-white rounded align-bottom">
                <div class="form-group"><br>
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="email@example.com">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">
                            Remember me
                        </label>
                        <button type="button" class="btn btn-outline-danger float-right">Outlook</button>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary m-2">Sign in</button>
                <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                </div>
            </div>
        </form>
        <div class="col-sm"></div>
    </div>
</div>
</body>
</html>
