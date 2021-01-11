@extends('layouts.app')

@section('body')

    <h1>Test</h1>
    <div align="center"><h2>{{$value}}</h2></div>

    $dat = array(
        'array1'=>[
            'array11'=>[
                '11'=>'22',
                '09'=>'444'
            ],
            'array22'=>[
                'array333'=>[
                    'ice'=>'cream',
                    '44'=>'741'
                ],
                'array333'=>[
                    'ice'=>'cream',
                    '44'=>'741'
                ]
            ]
        ]


    @if(count($array) >0)

        @foreach($array as $arr)

            @foreach($arr as $array11)

                @foreach($array11 as $array333)

                    <p class="text-xl-left">{{$name}}</p>
                @endforeach
            @endforeach
        @endforeach
    @endif

@endsection


@section('title', 'Page Title')
