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

# Directs user to my-closet, directs guest to login 
Route::get('/',
    array(
        'before' => 'auth',
         function($format = 'html') {
            return Redirect::to('/my-closet')
                ->with('flash_message', 'Welcome Back!'); 
        }       
    )
);

Route::get('signup',
    array(
        'before' => 'guest',
        'uses' => 'UserController@getSignup'
    )
);

Route::post('/signup',
    array(
        'before' => 'csrf', 
        'uses' => 'UserController@postSignup'
    )
);

Route::get('/login', 'UserController@getLogin');

Route::post('/login',
    array(
        'before' => 'csrf',
        'uses' => 'UserController@postLogin'
    )
);

Route::get('/logout', 'UserController@logout');

# Display's user's closet 
Route::get('/my-closet',
    array( 
        'before' => 'auth', 
        function($format = 'html') {
            # Fetch all items added by the user
            $user = Auth::user()->id;

            $items = Item::where('user_id', '=', $user)->get();

            # $items = Item::all();

            $none = "No items yet!";

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

Route::get('/truncate', function() {

    # Clear the tables to a blank slate
    DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
    DB::statement('TRUNCATE items');
    DB::statement('TRUNCATE users');
});