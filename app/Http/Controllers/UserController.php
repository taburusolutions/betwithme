<?php namespace App\Http\Controllers;

class UserController extends Controller {

    public function getHome()
    {
        return view('pages.dashboard.activity_view');
    }
}
