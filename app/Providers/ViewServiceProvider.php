<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
		/*view()->composer(
			'includes.header', function ($view) {
			$user = Auth::user();
			$projects = $user->projects()->get();
			$view->with('projects', $projects);
		}
		);
*/
	}
}
