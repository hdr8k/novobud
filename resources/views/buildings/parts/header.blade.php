<header class="main-page-header">
    <div class="container container--main-page-header">
        <ul class="header-advantages-list">
            <li class="header-advantages-list__item">
                <img src="{{asset('img/buildings/header/home.svg')}}" alt="home" class="header-advantages-list__img">
                <span class="header-advantages-list__text">
                                {!! __('houses/houses_index.header.home') !!}
                </span>
            </li>
            <li class="header-advantages-list__item">
                <img src="{{asset('img/buildings/header/hand.svg')}}" alt="home" class="header-advantages-list__img">
                <span class="header-advantages-list__text">
                    {!! __('houses/houses_index.header.hand') !!}
                </span>
            </li>
            <li class="header-advantages-list__item">
                <img src="{{asset('img/buildings/header/workhome.svg')}}" alt="home"
                     class="header-advantages-list__img">
                <span class="header-advantages-list__text">
                    {!! __('houses/houses_index.header.workhome') !!}
                </span>
            </li>
        </ul>
        <div class="main-page-header__footer">
            <button class="uibtn uibtn-primary main-page-header__button" data-open-modal="feedback-flat">
                <span class="uibtn__text">
                    {{__('houses/houses_index.header.feedback')}}
                </span>
            </button>
        </div>
    </div>
</header>
