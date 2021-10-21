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
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Textarea;

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
					// photo
					Avatar::make('Photo')
								->maxWidth(270)
								->disk(config('filesystems.default'))
								->onlyOnIndex(),
					Image::make('Photo')
							 ->maxWidth(270)
							 ->disk(config('filesystems.default'))
							 ->hideFromIndex()
							 ->store(function (Request $request, $model) {
								 return [
									 'photo' => $model->uploadPhoto($request->file('photo'))
								 ];
							 }),

					// first name
					Text::make('First Name')
							->sortable()
							->rules('max:255'),
					
					// birthday
					Text::make('Age', function () {
						return $this->age;
					}),
					Date::make('Birthday')
							->onlyOnForms(),

					// location
					Text::make('Location', function () {
						return config('cities.' . $this->location . '.name');
					}),
					Select::make('Location')
								->options($this->locationOptions())
								->onlyOnForms(),
					
					// occupation
					Text::make('Occupation')
							->rules('max:255'),

					// gender
					Select::make('Gender')
						->hideFromIndex()
						->options([
							'man' => 'Man',
							'woman' => 'Woman',
						]),
					
					// interested in
					Select::make('Interested In')
						->hideFromIndex()
						->options([
							'men' => 'Men',
							'women' => 'Women'
						]),
					
					// Instagram
					Text::make('Instagram', function () {
						return $this->instagram
							? '<a href="https://instagram.com/' . $this->instagram . '" target="_blank">@' . $this->instagram . '</a>'
							: null;
					})->asHtml()->hideFromIndex(),
					Text::make('Instagram')
							->onlyOnForms(),

					// email
					Text::make('Email')
							->sortable()
							->hideFromIndex()
							->rules('required', 'email', 'max:254')
							->creationRules('unique:users,email')
							->updateRules('unique:users,email,{{resourceId}}'),

					Text::make('Profile', function () {
						return '<a href="' . $this->profile_url . '" target="_blank">Profile</a>';
					})->asHtml(),


					Text::make('Original Photo', function () {
						return $this->original_photo ? '<a href="' . $this->original_photo_url . '" target="_blank">Original Photo</a>' : null;
					})->asHtml()->hideFromIndex(),

					Textarea::make('Notes')
						->hideFromIndex()
						->alwaysShow(),

					DateTime::make('Created At')
									->hideFromIndex()
									->onlyOnDetail(),
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

		public function locationOptions()
		{
			$cities = [];
			foreach(config('cities') as $key => $info)
			{
				$cities[$key] = $info['name']; 
			}
			return $cities;
		}
}
