<!DOCTYPE html>
<html>
<head>
    <title>Annex №1</title>
    <link rel="shortcut icon" href="https://iitu.kz/static/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<style type="text/css">
    h2 {
        text-align: center;
        font-size: 22px;
        margin-bottom: 50px;
    }

    body {
        background: #f2f2f2;
    }

    .section {
        margin-top: 30px;
        padding: 50px;
        background: #fff;
    }

    .pdf-btn {
        margin-top: 30px;
    }

    body {
        font-family: DejaVu Sans, sans-serif;
    }

</style>
<body>
<div class="container">
    <div class="col-md-8 section offset-md-2">
        <div class="panel panel-primary">
            <div class="panel-heading" align="center">
                <img src="/img/icon.png" alt="icon_IITU" width="300" height="100">
            </div>
            <div class="panel-body">

                <div class="main-div"><br><br><br><br><br>
                    <div align="center"><h3><strong>С П Р А В К А</strong></h3></div>
                    <br><br><strong>

<br><br>Дана<strong> Ғапбаров Нұрмағанбет Сейтқалиұлы 03.04.1999 </strong> г.р.<br>
В том, что он(а) действительно является студентом 1-курса очного отделения в АО <br>
«Международный университет информационных технологий»  по специальности<br>
<strong>CSSE - Вычислительная техника и программное обеспечение (ВТиПО)</strong><br><br><br>
Гос.лицензия Серия АБ  №   0064060 от  29.05.2009 год<br>
без ограничения срока<br><br><br>
Справка действительна на 2020 -  2021 учебный год<br>
Справка выдана для предъявления по месту требования<br>
Срок обучения в учебном заведении 2 (два) года.<br>
Период обучения с 14.09.2020г. по 30.06.2022г.<br><br><br><br><br><br><br><br><br><br><br>
Декан Мукажанов Н.К.<br><br>
Исп: Самат А.<br>
Тел.: 244-83-71 (внут. 2063)


                        {{-- $last_name}}
                        {{$first_name}}
                        {{$patronymic}}
                        {{$BDay}}</strong> г.р.<br>В том, что он(а) действительно является студентом 1-курса
                        {{$forma}} отделения в АО <br>«Международный университет информационных технологий» по специальности<br><strong>
                        {{$prof}}</strong><br><br><br> Гос. лицензия Серия АБ № 0064060 от 29.05.2009 год<br>без ограничения срока<br><br><br>Справка действительна на 2020-2021 учебный год<br>Справка выдана для предъявления по месту требования<br>Срок обучения в учебном заведении
                        {{$sroc}} года. <br>Период обучения с
                        {{$period}} г. <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Декан Мукажанов Н.К.<br><br> Исп: Самат А.<br>Тел.: 244-83-71 (внут. 2063)<br>
                --}}
                </div>
            </div>
            <div class="text-center pdf-btn">
                <a href="{{ route('download') }}" class="btn btn-primary">Download</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
