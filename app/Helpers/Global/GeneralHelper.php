<?php
use App\Models\Settings;

if (! function_exists('app_name')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function app_name()
    {
        return config('app.name');
    }
}

if (! function_exists('gravatar')) {
    /**
     * Access the gravatar helper.
     */
    function gravatar()
    {
        return app('gravatar');
    }
}

if (! function_exists('settings')) {
    /**
     * Access the gravatar helper.
     */
    function settings($key)
    {
        $settings = Settings::where('key',$key)->first();
        if($settings)
        {
            return $settings->value;
        }else{
            return null;
        }

    }
}




if (! function_exists('home_route')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function home_route()
    {
        if (auth()->check()) {
            if (auth()->user()->can('view backend')) {
                return 'frontend.index';
            }

            return 'frontend.index';
        }

        return 'frontend.index';
    }
}
