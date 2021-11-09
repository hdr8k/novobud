@php
    /* @var \App\Models\Category[]|\Illuminate\Database\Eloquent\Collection $categories */
@endphp

<div class="header-filter-wrapper">
    <div class="container container--header-filter">
        <div class="row header-filter">
            <div class="col-12 col-lg-4 col-xl-6 header-filter__col header-filter__col--title">
                <h2 class="header-filter__title">{{$category->name ?? __('houses/filter.title') }}</h2>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 header-filter__col">
                <div class="search_form">
                    <script>

                        jQuery(document).ready(function () {

                            jQuery('.search_form form').submit(function () {

                                var param = jQuery('.search_form .field').val()

                                if (param == '{{__('houses/filter.search')}}..') return false

                            })

                        })

                    </script>
                    <input class="field quicksearch" placeholder="{{__('houses/filter.search')}}..." type="text">
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 header-filter__col">

                {{--                <script>--}}

                {{--                    jQuery(document).ready(function ($) {--}}

                {{--                        var gorodarayoni = []--}}

                {{--                        var gorodprice = []--}}

                {{--                        @foreach($categories as $category)--}}
                {{--                            gorodarayoni[{{$category->id}}] = '.{{$category->slug}}|{{$category->name}}'--}}
                {{--                        @endforeach--}}
                {{--                        //обновление списков--}}

                {{--                        //клик на город--}}

                {{--                        $('select.fncity').change(function () {--}}

                {{--                            var vall = $(this).val()--}}

                {{--                            //районы--}}

                {{--                            var newrayons = '<option value=\'' + vall + '\'>{{__('houses/filter.addres')}}</option>'--}}

                {{--                            if (vall == '*') {--}}

                {{--                                /* for(i=1; i<gorodarayoni.length;i++)--}}

                {{--                                 {--}}

                {{--                                     if(gorodarayoni[i])--}}

                {{--                                     {--}}

                {{--                                         var newstring = gorodarayoni[i].split(',');--}}

                {{--                                         //alert(newstring[0]+"=="+newstring[1]);--}}

                {{--                                         if(newstring[0]!='.')--}}

                {{--                                         {--}}

                {{--                                             var params = newstring[1].split('|');--}}

                {{--                                             newrayons=newrayons+"<option value='"+vall+"-"+params[0]+"'>"+params[1]+"</option>";--}}

                {{--                                         }--}}

                {{--                                     }--}}

                {{--                                 }*/--}}

                {{--                                newrayons = '<option value=\'*\'>{{__('houses/filter.addres')}}</option>'--}}

                {{--                            } else {--}}

                {{--                                for (i = 1; i < gorodarayoni.length; i++) {--}}

                {{--                                    if (gorodarayoni[i]) {--}}

                {{--                                        var newstring = gorodarayoni[i].split(',')--}}

                {{--                                        if (newstring[0] == vall) {--}}

                {{--                                            var params = newstring[1].split('|')--}}

                {{--                                            newrayons = newrayons + '<option value=\'' + vall + '-' + params[0] + '\'>' + params[1] + '</option>'--}}

                {{--                                        }--}}

                {{--                                    }--}}

                {{--                                }--}}

                {{--                            }--}}

                {{--//                             $('select.fnrayon').html(newrayons)--}}
                {{--//--}}
                {{--// //цены--}}
                {{--//--}}
                {{--//                             var newprice = '<option value=\'' + vall + '\'>Цена за м.кв.</option>'--}}
                {{--//--}}
                {{--//                             if (vall == '*') {--}}
                {{--//--}}
                {{--//                                 for (i = 1; i < gorodprice.length; i++) {--}}
                {{--//--}}
                {{--//                                     var newstring = gorodprice[i].split(',')--}}
                {{--//--}}
                {{--//                                     //alert(newstring[0]+"=="+vall);--}}
                {{--//--}}
                {{--//                                     if (newstring[0] == vall) {--}}
                {{--//--}}
                {{--//                                         var params = newstring[1].split('|')--}}
                {{--//--}}
                {{--//                                         newprice = newprice + '<option value=\'' + params[0] + '\'>' + params[1] + '</option>'--}}
                {{--//--}}
                {{--//                                     }--}}
                {{--//--}}
                {{--//                                 }--}}
                {{--//--}}
                {{--//                             } else {--}}
                {{--//--}}
                {{--//                                 for (i = 1; i < gorodprice.length; i++) {--}}
                {{--//--}}
                {{--//                                     var newstring = gorodprice[i].split(',')--}}
                {{--//--}}
                {{--//                                     //alert(newstring[0]+"=="+vall);--}}
                {{--//--}}
                {{--//                                     if (newstring[0] == vall) {--}}
                {{--//--}}
                {{--//                                         var params = newstring[1].split('|')--}}
                {{--//--}}
                {{--//                                         newprice = newprice + '<option value=\'' + params[0] + '\'>' + params[1] + '</option>'--}}
                {{--//--}}
                {{--//                                     }--}}
                {{--//--}}
                {{--//                                 }--}}
                {{--//--}}
                {{--//                             }--}}
                {{--//--}}
                {{--//                             $('select.fnprice').html(newprice)--}}
                {{--//--}}
                {{--                        })--}}

                {{--                        //клик на району--}}
                {{--//--}}
                {{--//                         $('select.fnrayon').change(function () {--}}
                {{--//--}}
                {{--//                             var vall = $(this).val()--}}
                {{--//--}}
                {{--//                             var vall_gorod = $('select.fncity').val()--}}
                {{--//--}}
                {{--// // обновляем цены--}}
                {{--//--}}
                {{--//                             var newprice = '<option value=\'' + vall + '\'>Цена за м.кв.</option>'--}}
                {{--//--}}
                {{--//                             if (vall == '*') {--}}
                {{--//--}}
                {{--//                                 for (i = 1; i < gorodprice.length; i++) {--}}
                {{--//--}}
                {{--//                                     var newstring = gorodprice[i].split(',')--}}
                {{--//--}}
                {{--//                                     //alert(newstring[0]+"=="+vall);--}}
                {{--//--}}
                {{--//                                     if (newstring[0] == vall) {--}}
                {{--//--}}
                {{--//                                         var params = newstring[1].split('|')--}}
                {{--//--}}
                {{--//                                         newprice = newprice + '<option value=\'' + params[0] + '\'>' + params[1] + '</option>'--}}
                {{--//--}}
                {{--//                                     }--}}
                {{--//--}}
                {{--//                                 }--}}
                {{--//--}}
                {{--//                             } else {--}}
                {{--//--}}
                {{--//                                 for (i = 1; i < gorodprice.length; i++) {--}}
                {{--//--}}
                {{--//                                     var newstring = gorodprice[i].split(',')--}}
                {{--//--}}
                {{--//                                     //alert(newstring[0]+"=="+vall);--}}
                {{--//--}}
                {{--//                                     if (newstring[0] == vall) {--}}
                {{--//--}}
                {{--//                                         var params = newstring[1].split('|')--}}
                {{--//--}}
                {{--//                                         newprice = newprice + '<option value=\'' + params[0] + '\'>' + params[1] + '</option>'--}}
                {{--//--}}
                {{--//                                     }--}}
                {{--//--}}
                {{--//                                 }--}}
                {{--//--}}
                {{--//                             }--}}
                {{--//--}}
                {{--//                             $('select.fnprice').html(newprice)--}}
                {{--//--}}
                {{--//                         })--}}

                {{--//только полтава--}}

                {{--                        //$('select.fncity').change('.poltava');--}}

                {{--                        //$('select.fncity').val('.poltava').change();--}}

                {{--                        setTimeout(function () {--}}

                {{--                            //document.getElementById('fncity').value = '.poltava' ;--}}

                {{--                            $('#fncity [value=\'.poltava\'] ').attr('selected', 'selected')--}}

                {{--                            //document.getElementById('fncity').change() ;--}}

                {{--                            $('#fncity').trigger('change')--}}

                {{--                        }, 200)--}}

                {{--                    })--}}

                {{--                </script>--}}

                {{--                <div class="header-filter-list__item">--}}
                {{--                    <select name="fnrayon" class="fnrayon">--}}
                {{--                        <option value="*">{{__('houses/filter.addres')}}</option>--}}
                {{--                        @foreach($categories as $category)--}}
                {{--                            <option value=".{{$category->slug}}">{{$category->name}}</option>--}}
                {{--                        @endforeach--}}
                {{--                    </select>--}}
                {{--                </div>--}}
                <div class="header-filter-list__item">
                    <select name="fnrayon" onchange="location = this.value;" class="fnrayon">
                        <option value="">{{__('houses/filter.addres')}}</option>
                        @foreach($categories as $category)
                            <option value="{{asset('category') . '/' . $category->slug}}"
                                    @if(request()->route()->slug == $category->slug) selected @endif
                            >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
