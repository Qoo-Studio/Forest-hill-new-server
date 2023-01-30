<?php

namespace App\Nova;

use DateTime;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\Country;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\MultiSelect;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class Profile extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Profile::class;
    // public static $with = ['user'];

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
        'id',
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
            ID::make()->sortable(),
            Text::make('Name', function () {
                return sprintf('%s %s', $this->first_name, $this->last_name);
            }),

            
            Text::make('firstName', 'first_name')->hideFromIndex(),
            Text::make('lastName', 'last_name')->hideFromIndex(),
            Text::make('gender'),
            Boolean::make('Active'),
            Code::make('about'),
            Country::make('country'),  
            Heading::make('Meta'),
            
            // Date::make('birth_date'),
            new Panel('Profile Information', $this->addressFields()),
        ];
    }

    protected function addressFields()
    {
        return [
            Place::make('Profile', 'address')->hideFromIndex(),
            Text::make('City', 'city')->hideFromIndex(),
            Text::make('Postal Code', 'postcode')->hideFromIndex(),
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
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
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
