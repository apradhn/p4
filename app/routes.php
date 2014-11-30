<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('login');
});

# Displays the sign up form 
Route::get('/sign-up',
    array(
        'before' => 'guest',
        function() {
            return View::make('sign-up');
        }
    )
);

# Processes the sign up form 
Route::post('/sign-up', 
    array(
        'before' => 'csrf', 
        function() {

            $user = new User;
            $user->email    = Input::get('email');
            $user->password = Hash::make(Input::get('password'));

            # Try to add the user 
            try {
                $user->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/signup')->with('flash_message', 'Sign up failed; please try again.')->withInput();
            }

            # Log the user in
            Auth::login($user);

            return Redirect::to('/my-closet')->with('flash_message', 'Welcome to TALOS!');

        }
    )
);

# Displays the login form 
Route::get('/login', function() {
	return View::make('login');
});

# Processes the login form 
Route::post('/login', 
    array(
        'before' => 'csrf', 
        function() {

            $credentials = Input::only('email', 'password');

            if (Auth::attempt($credentials, $remember = true)) {
                return Redirect::intended('/my-closet')->with('flash_message', 'Welcome Back!');
            }
            else {
                return Redirect::to('/login')->with('flash_message', 'Log in failed; please try again.');
            }

            return Redirect::to('login');
        }
    )
);

# Logs out the user 
Route::get('/logout', function() {

    # Log out
    Auth::logout();

    # Send them to the homepage
    return Redirect::to('/');

});

Route::get('/my-closet',
    array( 
        'before' => 'auth', 
        function($format = 'html') {
            return View::make('my-closet'); 
        }
    )
);

Route::get('/sign-out', function() {
	return View::make('sign-out');
});

/*
|--------------------------------------------------------------------------
| Debug Routes
|--------------------------------------------------------------------------
*/

# Find out what environment you're running
Route::get('/get-environment',function() {

    echo "Environment: ".App::environment();

});

# Trigger an error to see how debugging is being handled
Route::get('/trigger-error',function() {

    # Class Foobar should not exist, so this should create an error
    $foo = new Foobar;

});

Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    echo print_r($results);

});