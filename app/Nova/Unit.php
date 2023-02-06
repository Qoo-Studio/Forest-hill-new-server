<?php

namespace App\Nova;

use Acme\Analytics\Analytics;
use Acme\StripeInspector\StripeInspector;
use DateTime;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Unit extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Unit::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';


    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            StripeInspector::make(),
            ID::make()->sortable(),
            Text::make('Name')->rules('required', 'max:255'),
            // BelongsTo::make('category'),
            File::make('Attachment', 'file_url')->rules('nullable'),
            Image::make('Photo', 'image_url'),
            Number::make('Space')->rules('required'),
            Number::make('BedroomCount', 'bedroom_count')->rules('required'),
            Number::make('BathroomCount', 'bathroom_count')->rules('required'),
            Number::make('FloorNumber', 'floor_number')->rules('required'),

            Select::make('Category', 'category_id')->options([
                '1' => 'Building',
                '2' => 'Shopping',
                '3' => 'Education',
            ])->hideFromIndex()->rules('required'),
            Select::make('Exposure')->options([
                'north' => 'North',
                'east' => 'East',
                'west' => 'West',
                'south' => 'South',

            ])->rules('required'),
            Boolean::make('HasParking', 'has_parking')->rules('required'),
            Boolean::make('IsSunny', 'is_sunny')->rules('required'),
            Boolean::make('HasSold', 'sold')->rules('required'),
            Boolean::make('IsPublic', 'is_public')->rules('required'),
            Currency::make('Price')->hideFromIndex()->rules('required'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [new Analytics];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new Filters\UnitName,
            new Filters\CreateUnitFilter,

        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
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
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
