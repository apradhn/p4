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

Route::get('/item-test', function() {
    $items = Item::all();
    foreach($items as $item) {
        echo $item->name;
    }
});

Route::get('/',
    array(
        'before' => 'auth',
         function($format = 'html') {
            return View::make('my-closet'); 
        }       
    )
);

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
            $rules = array(
                'email' => 'email|unique:users,email|required',
                'password' => 'min:6|required'   
            );        

            $validator = Validator::make(Input::all(), $rules);

            if($validator->fails()) {

                return Redirect::to('/sign-up')
                    ->with('flash_message', 'Sign up failed; please fix the errors listed below.')
                    ->withInput()
                    ->withErrors($validator);
            }

            $user = new User;
            $user->email    = Input::get('email');
            $user->password = Hash::make(Input::get('password'));

            # Try to add the user 
            try {
                $user->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/sign-up')->with('flash_message', 'Sign up failed; please try again.')->withInput();
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

# Display's user's closet 
Route::get('/my-closet',
    array( 
        'before' => 'auth', 
        function($format = 'html') {
            # the all() method will fetch all rows from a Model/table
            $items = Item::all();

            $none = "no items found!";

            # Make sure we have results before trying to print them
            if($items->isEmpty() != TRUE) {
                return View::make('my-closet')
                    ->with('items', $items);
            } else {
                return View::make('my-closet')
                    ->with('none', $none);
            }
        }
    )
);

Route::get('/add-clothes', 
    array(
        'before' => 'auth', 
        function($format = 'html') {
            return View::make('add-clothes');
        }
    )
);

# RESTful routes for Items 

Route::get('/item', 'ItemController@index');

Route::get('/item/create', 'ItemController@create');

Route::post('/item', 'ItemController@store');

Route::get('/item/{item_id}', 'ItemController@show');

Route::get('/item/{item_id}/edit', 'ItemController@edit');

Route::put('/item/{item_id}', 'ItemController@update');

Route::delete('/item/{item_id}', 'ItemController@destroy');

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

# output some debugging information about your application's environment and database connection
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});