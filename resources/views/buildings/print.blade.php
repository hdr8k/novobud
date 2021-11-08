@php
    /* @var \App\Nova\LayoutCoordinate $room */
@endphp
<html lang="{{app()->getLocale()}}">
<head>

    <title>{{__('houses/print.title')}}</title>

    <meta HTTP-EQUIV="Content-Type" Content="text/html; Charset=utf-8">

    <style>

        body {
            padding: 20px;
            background: none;
        }

        h1, h2, h3 {
            background: rgba(200, 200, 200, 0.4);
            color: #235880;
            padding: 2px 5px;
            text-align: left;
            z-index: 2;
            position: relative;
        }

        h2, h3 {
            margin: 0px;
        }

        h3 {
            margin-bottom: 20px;
        }

        .logon {
            width: 370px;
        }

    </style>

</head>

<body>


<table width=100% style='border:0px none' border=0>

    <tr>

        <td style='width:50%;text-align:left'>
            <h1>{{__('houses/print.street')}}. {{$room->layout->housing->house->address}}</h1>
        </td>

        <td style='width:50%;text-align:right;vertical-align:top;'>
            <img src='{{asset('img/menu/menu-top-logo.svg')}}' class='logon'/>

        </td>

    </tr>

</table>
<div style='text-align:center;'>
    <img style='max-width:100%;margin-bottom:20px;max-height:600px'
         src='{{$room->url}}'
    />
</div>
<table width=100% style='porder:0px none' border=0>
    <tr>
        <td style='width:50%;text-align:left;vertical-align:top;'>
            (050) 500 70 31
        </td>

        <td style='width:50%;text-align:right;vertical-align:top;'>{{url('/')}}</td>
    </tr>
</table>

<script>
    window.print()
</script>

</body>
</html>
