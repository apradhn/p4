<?php

class UserController extends BaseController {

    # GET: http://localhost/user
    public function getIndex() {

    }

    # GET: http://localhost/user/signup
    public function getSignup() {
        return View::make('sign-up');
    }

    # POST: http://localhost/user/signup
    public function postSignup() {
        $rules = array(
            'email' => 'email|unique:users,email|required',
            'password' => 'min:6|required'   
        );        

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {

            return Redirect::to('/signup')
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
            return Redirect::to('/signup')->with('flash_message', 'Sign up failed; please try again.')->withInput();
        }

        # Log the user in
        Auth::login($user);

        return Redirect::to('/my-closet')->with('flash_message', 'Welcome to TALOS!');

    }

    # GET: http://localhost/user/login
    public function getLogin() {
        return View::make('login');
    }

    # POST: http://localhost/user/login
    public function postLogin() {
        $credentials = Input::only('email', 'password');

        if (Auth::attempt($credentials, $remember = true)) {
            return Redirect::intended('/my-closet')->with('flash_message', 'Welcome Back!');
        }
        else {
            return Redirect::to('/login')->with('flash_message', 'Log in failed; please try again.');
        }

        return Redirect::to('login');
    }

    # ANY: http://localhost/user/logout
    public function logout() {
        # Log out
        Auth::logout();

        # Send them to the homepage
        return Redirect::to('/');     
    }

    # GET: http://localhost/user/generate-new-password
    public function getGenerateNewPassword() {

    }

}