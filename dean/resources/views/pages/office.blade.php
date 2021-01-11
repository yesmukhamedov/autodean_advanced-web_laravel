<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://iitu.kz/static/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Office Page</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="https://iitu.kz/">dl.iitu.kz</a>
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
        <form action="{{url('/auth')}}" method="GET" id="login-form">
            @csrf
            <button type="submit" class="btn btn-primary m-1">Log out</button>
        </form>
    </div>
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
<div class="container">
    <div class="row border shadow-sm p-3 mb-5 bg-white rounded">
        <div class="col-12">
            <img src="https://sun9-67.userapi.com/impg/8WG9_KGZoN2zs6V0e7AAbqNt4zdXCkWHkdCuXw/GOxclVezzXg.jpg?size=100x100&quality=96&proxy=1&sign=1297e835a75bc6099f7d645cc6b0e555&type=album"
                 alt="officeAvatar" class="img-thumbnail">
            <p class="text-xl-left">Office personal</p>
        </div>
        <div class="col-4 border shadow-sm p-3 mb-5 bg-white rounded px-md-5">
            @if(count($FIO) >0)
                @foreach($FIO as $name)
                    <p class="text-xl-left">{{$name}}</p>
                @endforeach
            @endif
        </div>
        <div class="col-2"></div>
        <div class="col-6 float-right border shadow p-3 mb-5 bg-white rounded">
            <p class="text-xl-left">Заявки</p>
            <br>
            <div class="container">
                @foreach($data as $fios)
                    @foreach($fios as $fio)
                        @if($fio->annex_type == 'заявления')
{{--                            @if($fio->active == 2)--}}
{{--                @if(count($frz) >0)--}}

                    <div class="row row-cols-2 p-1 border rounded">
                        <div class="col"><p class="text-xl-left my-auto">
{{--                            @foreach($frz as $text)--}}
                                <p class="text-xl-left">{{$fio->author}}</p>
{{--                                @break--}}
{{--                                @endforeach--}}
                                </p></div>
                        <div class="col  my-auto">
                            <button type="button" class="btn btn-outline-success" data-toggle="modal"
                                    data-target="#zayav">
                                Just do it
                            </button>
                            <div class="modal fade" id="zayav" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Ответить заевшику</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{url('/zayavOffice')}}" method="POST" id="send-form">
                                            @csrf
                                            <div class="modal-body">
{{--                                                @if(count($zayav) >0)--}}
{{--                                                    @foreach($zayav as $text)--}}
                                                        <p class="text-xl-left">{{$fio->text}}</p>
{{--                                                    @endforeach--}}

{{--                                                @endif--}}
                                                <br><br>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Area для ответа</label>
                                                    <textarea class="form-control" name="text_zayavAnswer"
                                                              id="exampleFormControlTextarea1"
                                                              rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-outline-success float-right">
                                                    Ответить
                                                </button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Cancel
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endif
{{--                        @endif--}}
                    @endforeach
                @endforeach
            </div>
            <button type="button" class="btn btn-primary float-right m-3">Show more</button>
        </div>
    </div>
</div>
</body>
</html>
