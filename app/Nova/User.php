<?php

namespace App\Nova;

use App\Nova\Filters\UserGender;
use App\Nova\Filters\UserInterestedIn;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;

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

						Image::make('Photo')->maxWidth(270),

            Text::make('First Name')
                ->sortable()
                ->rules('max:255'),
								
						Text::make('Age', function () {
							return $this->age . ' years old';
						}),

						Text::make('Location', function () {
							return $this->city . ', ' . $this->state . ', ' . $this->country;
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
							return '<a href="' . $this->original_photo_url . '" target="_blank">Original Photo</a>';
						})->asHtml()->hideFromIndex(),

            Password::make('Password')
                ->onlyOnForms()
                ->creationRules('required', 'string', 'min:8')
                ->updateRules('nullable', 'string', 'min:8'),
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
