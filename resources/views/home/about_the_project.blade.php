@extends("layouts.app")

@push('styles')
    <link rel="stylesheet" id="o-proekte"
          href="{{asset('css/o-proekte.css')}}" type="text/css"
          media="all">
@endpush

@section("content")
    <div id="content-page" style="">
        <div class="o-proekte-page">
            <section
                class="header-section"
                style="background-image: url('{{asset('img/novobud.png')}}')">
                <div class="container">
                    <h1 class="header-section__title">
                        {{__('about_the_project.header')}}
                    </h1>
                </div>
            </section>
            <section class="about-section">
                <div class="container o-proekte--container container--about-section">
                    <h3 class="about-section__title">
                        {{__('about_the_project.about')}}
                    </h3>
                    <ul class="about-section-list">
                        <li class="about-section-list__item about-item">
                            <div class="about-item__icon">
                                <img src="{{asset('img/about_the_project/commission.svg')}}"
                                     alt="test-img"/>
                            </div>
                            <div class="about-item__content">
                                <h3>{{__('about_the_project.commission.title')}}</h3>
                                <p>{!! __('about_the_project.commission.content') !!}</p>
                            </div>
                        </li>
                        <li class="about-section-list__item about-item">
                            <div class="about-item__icon">
                                <img src="{{asset('img/about_the_project/activity.svg')}}" alt="activity"/>
                            </div>
                            <div class="about-item__content">
                                <h3>{{__('about_the_project.activity.title')}}</h3>
                                <p>{{__('about_the_project.activity.content')}}</p>
                            </div>
                        </li>
                        <li class="about-section-list__item about-item">
                            <div class="about-item__icon">
                                <img src="{{asset('img/about_the_project/security.svg')}}"/>
                            </div>
                            <div class="about-item__content">
                                <h3>{{__('about_the_project.security.title')}}</h3>
                                <p>
                                    {{__('about_the_project.security.content')}}
                                </p>
                            </div>
                        </li>
                        <li class="about-section-list__item about-item">
                            <div class="about-item__icon">
                                <img src="{{asset('img/about_the_project/reliable.svg')}}"/>
                            </div>
                            <div class="about-item__content">
                                <h3>{{__('about_the_project.reliable.title')}}</h3>
                                <p>
                                    {{__('about_the_project.reliable.content')}}
                                </p>
                            </div>
                        </li>
                        <li class="about-section-list__item about-item">
                            <div class="about-item__icon">
                                <img src="{{asset('img/about_the_project/comfort.svg')}}"/>
                            </div>
                            <div class="about-item__content">
                                <h3>{{__('about_the_project.comfort.title')}}</h3>
                                <p>
                                    {{__('about_the_project.comfort.content')}}
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="assortment-section">
                <div class="container container--assortment-section">
                    <h3 class="assortment-section__title">{{__('about_the_project.assortment.title')}}</h3>
                    <div class="assortment-section__subtitle">
                        <b>
                            {!! __('about_the_project.assortment.subtitle') !!}

                        </b>
                    </div>
                    <p class="assortment-section__paragraph">
                        {{__('about_the_project.assortment.paragraph.first')}}
                    </p>
                    <p class="assortment-section__paragraph">
                        {{__('about_the_project.assortment.paragraph.second')}}
                    </p>
                </div>


                <div class="container assortment-section__bg-container"
                     style="background-image: url('{{asset('img/about_the_project/plan.png')}}')">
                </div>

                <div class="container container--assortment-section">
                    <p class="assortment-section__paragraph">
                        {!! __('about_the_project.assortment.paragraph.third') !!}
                    </p>
                </div>
            </section>
            <section class="investing-section">
                <div class="container">
                    <h3 class="investing-section__title">{{__('about_the_project.investing.title')}}</h3>
                    <div class="investing-section__content">
                        <p class="investing-section__paragraph">
                            {{__('about_the_project.investing.content')}}
                        </p>
                    </div>
                    <button class="uibtn uibtn-primary investing-section__button" data-open-modal="feedback">
                        {{__('about_the_project.investing.button')}}
                    </button>
                </div>
            </section>
        </div>
    </div>
@endsection
