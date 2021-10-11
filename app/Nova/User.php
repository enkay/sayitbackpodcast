<?php

namespace App\Nova;

use App\Nova\Filters\UserGender;
use App\Nova\Filters\UserInterestedIn;
use App\Nova\Filters\UserLocation;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\DateTime;

class User extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\User::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'first_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'first_name', 'last_name', 'occupation', 'city', 'email',
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
            // ID::make()
						// 	->sortable()
						// 	->hideFromIndex(),

						Avatar::make('Photo')->maxWidth(270)->disk(config('filesystems.default'))->onlyOnIndex(),

						Image::make('Photo')->maxWidth(270)->disk(config('filesystems.default'))->hideFromIndex(),

            Text::make('First Name')
                ->sortable()
                ->rules('max:255'),
								
						Text::make('Age', function () {
							return $this->age;
						}),

						Text::make('Location', function () {
							return config('cities.' . $this->location . '.name');
						}),
						
            Text::make('Occupation')
                ->rules('max:255'),

						Text::make('Gender')
              ->rules('max:255')
							->hideFromIndex(),

						Text::make('Interested In')
              ->rules('max:255')
							->hideFromIndex(),

						Text::make('Instagram', function () {
							return '<a href="https://instagram.com/' . $this->instagram . '" target="_blank">@' . $this->instagram . '</a>';
						})->asHtml()->hideFromIndex(),

            Text::make('Email')
                ->sortable()
								->hideFromIndex()
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

						Text::make('Public Profile', function () {
							return '<a href="' . $this->profile_url . '" target="_blank">View</a>';
						})->asHtml(),


						Text::make('Original Photo', function () {
							return $this->original_photo ? '<a href="' . $this->original_photo_url . '" target="_blank">Original Photo</a>' : null;
						})->asHtml()->hideFromIndex(),

						DateTime::make('Created At')
										->sortable(),
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
        return [
					new UserGender,
					new UserInterestedIn,
					new UserLocation,
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
