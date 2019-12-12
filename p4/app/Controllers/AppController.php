<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $newResponse = $this->app->old('newResponse', null);
        return $this->app->view('index', ['newResponse' => $newResponse]);
    }

    public function saveNewGuess()
    {
        $this->app->validate([
            'name' => 'required',
            'response' => 'required',
        ]);

        $data = [
            'name' => $this->app->input('name'),
            'response' => $this->app->input('response')
        ];

        $this->app->db()->insert('guesses', $data);

        $this->app->redirect('/', ['newResponse' => $data['response']]);
    }

    public function guesses()
    {
        $guesses = $this->app->db()->all('guesses');

        return $this->app->view('guesses', ['guesses' => $guesses]);
    }

    public function guess()
    {
        $guessId = $this->app->param('id');

        $guess = $this->app->db()->findById('guesses', $guessId);

        if (is_null($guess)) {
            return $this->app->redirect('/guesses', ['guessNotFound' => true]);
        }

        return $this->app->view('guess', ['guess' => $guess]);
    }
}
