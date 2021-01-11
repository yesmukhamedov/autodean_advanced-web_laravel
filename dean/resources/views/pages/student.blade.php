<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://iitu.kz/static/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Student Page</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="https://https://iitu.kz//">dl.iitu.kz</a>
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
{{--            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}

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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell-fill" fill="currentColor"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
            </svg>
        </button>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Notifications</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">

                            {{--                            @if(count($titles) >0)--}}
                            {{--                                @foreach($titles as $title)--}}
                            {{--                                    {{$title}}--}}
                            {{--                                @endforeach--}}
                            {{--                            @endif--}}
                            {{--                            @if(count($notifications) >0)--}}
                            {{--                                @foreach($notifications as $notification)--}}
                            {{--                                    {{$notification}}--}}
                            {{--                                @endforeach--}}
                            {{--                            @endif--}}
                            @if(count($notifications) >0)

                                    @foreach($notifications as $not)
                                        @foreach($not as $no)
                                        <div class="row m-1 p-1 my-auto border rounded">
                                            <div class="col-9 my-auto"><p class="text-xl-left my-auto">
                                                    <strong>{{/*serialize(*/$no->komu_blya/*)*/}}</strong></p></div>
                                            <div class="col-9 my-auto"><p
                                                    class="text-xl-left my-auto">{{/*serialize(*/$no->status/*)*/}}</p></div>
                                            <div class="col-3 my-auto">
                                                <button type="button" class="btn btn-outline-success  float-right">
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endforeach
                            @endif

                            {{--                            <div class="row m-1 p-1 my-auto border rounded">--}}
                            {{--                                @if(count($titles) >0)--}}
                            {{--                                    @foreach($titles as $title)--}}
                            {{--                                        <div class="col-9 my-auto"><p class="text-xl-left my-auto">--}}
                            {{--                                                <strong>{{$title}}</strong></p></div>--}}
                            {{--                                    @endforeach--}}
                            {{--                                @endif--}}
                            {{--                                @if(count($notifications) >0)--}}
                            {{--                                    @foreach($notifications as $notification)--}}
                            {{--                                        <div class="col-9 my-auto"><p class="text-xl-left my-auto">{{$notification}}</p>--}}
                            {{--                                        </div>--}}
                            {{--                                    @endforeach--}}
                            {{--                                @endif--}}
                            {{--                                <div class="col-3 my-auto">--}}
                            {{--                                    <button type="button" class="btn btn-outline-success  float-right">Delete</button>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
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
                 alt="studentAvatar" class="img-thumbnail">
            <p class="text-xl-left">Student</p>
        </div>
        <div class="col-4 border shadow-sm p-3 mb-5 bg-white rounded px-md-5">
            @if(count($FIO) >0)
                @foreach($FIO as $name)
                    <p class="text-xl-left">{{$name}}</p>
                @endforeach
            @endif
        </div>
        <div class="col-2"></div>
        <div class="col-6 border shadow p-3 mb-5 bg-white rounded">

{{--            <label>--}}
{{--                <input type="text" name="quotation" value="{{ json_encode($quotation,TRUE)}}">--}}
{{--            </label>--}}
            <p class="text-xl-left">Get any papers</p>
            <br>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#sprav">
                Справка
            </button>
            <div class="modal fade" id="sprav" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Подать заявку для получение справки</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row m-1 p-1 my-auto border rounded">
                                    <div class="col-9 my-auto"><p class="text-xl-left">Справка по месту требования</p>
                                    </div>
                                    <div class="col-3 my-auto">
                                        <input class="form-check-input  float-right" type="checkbox" value="" id="defaultCheck2">
                                        <label class="form-check-label   float-right" for="defaultCheck2"></label>
                                        <a href="{{ route('annex_1') }}" class="btn btn-outline-success float-right">Получить</a>
                                    </div>
                                </div>
                                <div class="row m-1 p-1 my-auto border rounded">
                                    <div class="col-9 my-auto"><p class="text-xl-left">Справка для военкомата</p></div>

                                    <div class="col-3 my-auto">
                                        <input class="form-check-input  float-right" type="checkbox" value="" id="defaultCheck4">
                                        <label class="form-check-label   float-right" for="defaultCheck4"></label>
                                        <a href="{{ route('annex_5') }}" class="btn btn-outline-success float-right">Получить</a>
                                    </div>
                                </div>
                                <div class="row m-1 p-1 my-auto border rounded">
                                    <div class="col-9 my-auto"><p class="text-xl-left">Справка гос органом</p></div>
                                    <div class="col-3 my-auto">
                                        <input class="form-check-input  float-right" type="checkbox" value="" id="defaultCheck4">
                                        <label class="form-check-label   float-right" for="defaultCheck4"></label>
                                        <a href="{{ route('annex_10') }}" class="btn btn-outline-success float-right">Получить</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check float-left pr-5 pt-5 pl-10">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    С печатом университета
                                </label>
                            </div>
                            <div class="form-check float-left pt-5">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Получать в email
                                </label>
                            </div>
                            <form class="form-inline float-right pt-5">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="email"></label>
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="email@example.com">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <form action="{{url('/annex')}}" method="POST" id="send1-form">
                                @csrf
                                <button type="submit" class="btn btn-outline-success float-right">Подать заявку</button>
                            </form>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#zayav">
                Заявление
            </button>
            <div class="modal fade" id="zayav" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Написать заявление</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{url('/zayav')}}" method="POST" id="send-form">
                            @csrf
                            <div class="modal-body">

                                <h6 class="modal-title" id="myModalLabel">Заявление написано на имя кого</h6>
                                <select class="form-control form-control-sm">
                                    @if(count($offices) >0)
                                        @foreach($offices as $office)
                                            <option><p class="text-xl-left">{{$office}}</p></option>
                                        @endforeach
                                    @endif
                                </select><br><br>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Area для заявщиков</label>
                                    <textarea class="form-control" name="text_zayav" id="exampleFormControlTextarea1"
                                              rows="3"></textarea>
                                </div>

                                <div class="form-group pt-5">
                                    <label for="exampleFormControlFile1">Прикрепите файлы (Image or typeFile
                                        .pdf))</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFil">
                                    <input type="file" class="form-control-file pt-1" id="exampleFormControlFile1">
                                    <button type="button" class="btn btn-primary float-right">Прикрепить еще файлы
                                    </button>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-success float-right">Сендить заявку
                                </button>

                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Modal body text goes here.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
