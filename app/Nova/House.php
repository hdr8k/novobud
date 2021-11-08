<?php

namespace App\Nova;

use Drobee\NovaSluggable\Slug;
use Eminiarts\Tabs\Tabs;
use Illuminate\Http\Request;
use Kongulov\NovaTabTranslatable\NovaTabTranslatable;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Kraftbit\NovaTinymce5Editor\NovaTinymce5Editor;
use Laravel\Nova\Fields\Textarea;
use NovaItemsField\Items;
use Yna\NovaSwatches\Swatches;

class House extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\House::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
    ];

    /**
     * The side nav menu order.
     *
     * @var int
     */
    public static int $priority = 2;

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function fields(Request $request)
    {
        $mainInfoTranslate = [
            NovaTabTranslatable::make([
                Text::make('Наименование', 'name')->rules('required'),
                Text::make('Адресс объекта', 'address')->hideFromIndex(),
                NovaTinymce5Editor::make('Описание', 'description')->hideFromIndex(),
                Text::make('Текст статуса', 'status_text')->hideFromIndex(),
            ]),
            Swatches::make('Цвет фона статуса', 'status_color')
                ->hideFromIndex(),

            NovaTabTranslatable::make([
                Text::make('Окончание строительства', 'construction_end')->hideFromIndex(),
                NovaTinymce5Editor::make('Площадь квартир', 'apartment_areas')
                    ->options([
                        'toolbar' => [],
                        'plugins' => [],
                    ])
                    ->hideFromIndex(),
                Text::make('система отопления', 'heating_systems')->hideFromIndex(),
                Text::make('Конструкция дома', 'building_structures')->hideFromIndex(),
                Items::make('Дополнительная информация', 'additional_information')
                    ->hideFromIndex()
                    ->hideFromDetail()
                    ->draggable()
                    ->listFirst()
                    ->placeholder('Добавить новый элемент')
                    ->createButtonValue("Добавить"),


            ]),
            Text::make('Дополнительная информация', fn() => view('nova.list', [
                    'house' => $this,
                ]
            )->render())
                ->onlyOnDetail()
                ->asHtml(),
        ];

        $mainInfo = [
            Slug::make('slug')
                ->required(),

            Image::make('Изображение товара', 'main_photo')
                ->disk('public')
                ->path('/houses/main_photo'),

            Boolean::make('На главной', 'in_index'),
            Boolean::make('Активность', 'active'),

            Number::make('Цена', 'price')->step(0.01)->required(),
            Number::make('Порядок ', 'priority')->step(1),
            Text::make('Координаты для карты', 'coordinate')->help('Пример: 49.572003,34.58200'),
        ];

        $seo = [
            NovaTabTranslatable::make([
                Textarea::make('Meta description', 'meta_description'),
                Text::make('Meta keywords', 'meta_keywords'),
            ])->hideFromIndex(),
        ];

        return [
            ID::make(__('ID'), 'id')->sortable(),

            /*  Text::make('Просмотры', fn() => view('nova.views',
                  ['house' => $this])->render())
                  ->onlyOnDetail()
                  ->asHtml(),*/
            Text::make('Просмотры', 'view')
                ->hideFromIndex()
                ->readonly(),

            (new Tabs('Информация об объекте',
                [
                    'Информация с переводом' => $mainInfoTranslate,
                    'Информация'             => $mainInfo,
                    'СЕО'                    => $seo,
                    'Катеория'               => [
                        BelongsTo::make('Категория', 'category', Category::class),
                    ],
                    'Фото для слайдера'      => [
                        HasMany::make('Фото для слайдера', 'photoSliders', PhotoSlider::class),
                    ],
                    'Корпуса'                => [
                        HasMany::make('Корпуса', 'housings', Housing::class),
                    ],
                ]
            )),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return 'Объекты';
    }


    public static function createButtonLabel()
    {
        return 'Добавить';
    }
}
