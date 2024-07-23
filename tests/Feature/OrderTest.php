<?php
use Illuminate\Foundation\Testing\RefreshDatabaseState;

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});


it('can be stored to the database', function () {
    $response = $this->post('/register', [
        'name' => fake()->name,
        'email' => fake()->email,
        'password' => 'password'
    ]);
    $response->assertOk();
});
