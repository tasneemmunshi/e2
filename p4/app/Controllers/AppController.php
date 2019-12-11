<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        return $this->app->view('index');
    }

    public function guesses()
    {
        return $this->app->view('guesses');
    }

    public function guess()
    {
        return $this->app->view('guess');
    }
}
