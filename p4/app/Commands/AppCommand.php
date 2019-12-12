<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate()
    {
        $this->app->db()->createTable('guesses', [
            'response' => 'varchar(255)',
            'name' => 'varchar(255)',
        ]);

        dump('Migration complete.');
    }

    public function seed()
    {
        # Instantiate a new instance of the Faker\Factory class
        $faker = \Faker\Factory::create();

        # Use a loop to create 10 guesses
        for ($i = 0; $i < 10; $i++) {

    # Set up a guess
            $guess = [
        'response' => $faker->words(1, true),
        'name' => $faker->words(2, true),
    ];

            # Insert the guess
            $this->app->db()->insert('guesses', $guess);
        }

        dump('Seeds complete.');
    }

    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
}
