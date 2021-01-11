<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://iitu.kz/static/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Home Page</title>
</head>
<style type="text/css">
    .card IMG {
        position: relative;
    }

    .seven {
        left: -120px;
        top: 25px;
    }

    .ace {
        left: -240px;
        top: 50px;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="https://dl.iitu.kz/">dl.iitu.kz</a>
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
{{--            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon">777</span>--}}
{{--    </button>--}}

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Language
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Русский (ру)</a>
                    <a class="dropdown-item" href="#">Қазақша (қз)</a>
                    <a class="dropdown-item" href="#">English (en)</a>
                </div>
            </li>
        </ul>
    </div>
    <form action="{{url('/auth')}}" method="GET" id="login-form">
        @csrf
        <button type="submit" class="btn btn-primary m-1">Auth page</button>
    </form>
</nav>
<h1></h1>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://sun9-46.userapi.com/impg/G41YroyePemN7IzD2g6HvCjqI7-lXU_BDCKlMA/ZkZ8rg8_lJ0.jpg?size=1920x1040&quality=96&proxy=1&sign=ef46f99f672fbaa69d81f69fad9c75f7&type=album"
                 class="d-block w-100" alt="guernica">
        </div>
        <div class="carousel-item">
            <img src="https://sun9-30.userapi.com/impg/i0x8cJDISle3xlukx4TfMvBBMbTGKqrXHr3kXA/DCH__TRCnsU.jpg?size=1920x1040&quality=96&proxy=1&sign=d1e139ca0bd651c300a05cb466832717&type=album"
                 class="d-block w-100" alt="guernica">
        </div>
        <div class="carousel-item">
            <img src="https://sun9-67.userapi.com/impg/x477mNd1ZnivnDXvZqAwdK6ud8qNfb6oukLBdw/_lifmTpRuvk.jpg?size=1920x1040&quality=96&proxy=1&sign=24c132959876875a712f96362b686e3c&type=album"
                 class="d-block w-100" alt="guernica">
        </div>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm-5">
                <form action="{{url('/check')}}" method="POST" id="login-form">
                    {{-- csrf_field() --}}
                    @csrf
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="inputPassword2" class="sr-only">Password</label>
                        <input type="text" class="form-control" name="numCode" id="inputPassword2" placeholder="KEY num">
                    </div>
                    <div align="center"><button type="submit" class="btn btn-primary mb-2">Confirm identity</button></div>
                </form>
                <select class="selectpicker" data-width="fit">
                    <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
                    <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
                </select>
            </div>
            <div class="col-sm"></div>
        </div>
    </div>
</div>
</body>
</html>
