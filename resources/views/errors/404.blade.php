@extends('layouts.app')

@section('content')
    <div id="content-page" style="">
        <p style="text-align: center;"><span
                style="color: #888888; font-family: arial, helvetica, sans-serif; font-size: 150px;">&nbsp;</span></p>
        <p style="text-align: center;"><span
                style="color: #888888; font-family: arial, helvetica, sans-serif; font-size: 150px;">404</span></p>
        <p style="text-align: center;">&nbsp;</p>
        <p style="text-align: center;">&nbsp;Запрашиваемая Вами страница не найдена.</p>
        <p style="text-align: center;"><span style="font-weight: bold;">Рекомендуем перейти в раздел </span><a
                style="font-weight: bold;" href="{{localUrl('/')}}">Новостройки Полтавы</a>.</p>
        <p style="text-align: center;">&nbsp;</p>
        <p style="text-align: center;">&nbsp;</p>
        <p style="text-align: center;">&nbsp;</p>
        <p style="text-align: center;">&nbsp;</p>
    </div>
@endsection
