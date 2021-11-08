@php
    /* @var \App\Models\House $house */
@endphp
<div
    class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 portfolio-card-wrapper {{$house->category->slug}}"
    style="position: absolute; left: 368.75px; top: 0px;">
    <div class="portfolio-card">
        <a href="{{localUrl($house->slug)}}">
            <div class="portfolio-card__status">
                <span style="background:{{$house->status_color}}">{{$house->status_text}}</span>
            </div>
            <div>
                <div class="portfolio-card__image" style="background-image: url(
                {{$house->main_photo_url}})">
                    <div>
                        <span class="portfolio-card__street">{{$house->address}}</span>
                        <span class="portfolio-card__region">{{$house->category->name}}</span>
                    </div>
                </div>
                <div class="portfolio-card-footer">
                    <div class="portfolio-card__price">
                        <span>{{__('houses/cart.price')}}: </span>
                        <b>{{($house->price)}} грн./м<sup>2</sup></b>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
