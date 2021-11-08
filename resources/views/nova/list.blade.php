@php
    /* @var \App\Models\House $house */
@endphp
Ru:
<ul>
    @if($house->getTranslation('additional_information', 'ru'))
        @foreach($house->getTranslation('additional_information', 'ru') as $list)
            <li>{{$list}}</li>
        @endforeach
    @endif
</ul>

<hr>

Ua:
<ul>
    @if($house->getTranslation('additional_information', 'ua'))
        @foreach($house->getTranslation('additional_information', 'ua') as $list)
            <li>{{$list}}</li>
        @endforeach
    @endif
</ul>
