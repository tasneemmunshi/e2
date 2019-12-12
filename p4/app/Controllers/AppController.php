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
        $guesses = $this->app->db()->all('guesses');

        return $this->app->view('guesses', ['guesses' => $guesses]);
    }

    public function guess()
    {
        return $this->app->view('guess');
    }
}
