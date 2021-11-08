@php
    /* @var App\Services\House\DTOs\MapDto $house */
@endphp
<div class=chinfotext>
    <a href={{$house->getSlug()}}>
        <img width=170
             src="{{$house->getMainPhoto()}}" alt="House">
        <p class=title><span>{{__('map.address')}}: </span>{{$house->getAddress()}}</p>
        <p class=title><span>Район:</span>{{$house->getCategory()->name}}</p>
        <p class=title><span>{{__('map.price')}}: </span>{{$house->getPrice()}} грн./м<sup>2</sup></p>
    </a>
</div>
