<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class UserControllerTest extends TestCase
{

    /** @test */
    public function add_user_validates_successfully_with_correct_data()
    {
        $response = $this->post('/add-user', [
            'username' => 'JOHNDOE',
            'password' => 'secret123',
            'email' => 'john@example.com',
            'gender' => 'male',
            'city' => 'New York',
        ]);

        $response->assertSessionHasNoErrors();
    }

    /** @test */
    public function add_user_fails_when_username_is_missing()
    {
        $response = $this->post('/add-user', [
            'password' => 'secret123',
            'email' => 'john@example.com',
            'gender' => 'male',
            'city' => 'New York',
        ]);

        $response->assertSessionHasErrors([
            'username' => 'user name can not be empty',
        ]);
    }

    /** @test */
    public function add_user_fails_when_username_is_too_short()
    {
        $response = $this->post('/add-user', [
            'username' => 'JO',
            'password' => 'secret123',
            'email' => 'john@example.com',
            'gender' => 'male',
            'city' => 'New York',
        ]);

        $response->assertSessionHasErrors([
            'username' => 'user name can not be less than 3',
        ]);
    }

    /** @test */
    public function add_user_fails_when_username_is_too_long()
    {
        $response = $this->post('/add-user', [
            'username' => 'JOHNDOEJOHN',
            'password' => 'secret123',
            'email' => 'john@example.com',
            'gender' => 'male',
            'city' => 'New York',
        ]);

        $response->assertSessionHasErrors([
            'username' => 'user name can not be more than 10',
        ]);
    }

    /** @test */
    public function add_user_fails_when_username_is_not_uppercase()
    {
        $response = $this->post('/add-user', [
            'username' => 'johndoe',
            'password' => 'secret123',
            'email' => 'john@example.com',
            'gender' => 'male',
            'city' => 'New York',
        ]);

        $response->assertSessionHasErrors([
            'username' => 'username must be uppercase',
        ]);
    }

    /** @test */
    public function add_user_fails_when_email_is_invalid()
    {
        $response = $this->post('/add-user', [
            'username' => 'JOHNDOE',
            'password' => 'secret123',
            'email' => 'not-an-email',
            'gender' => 'male',
            'city' => 'New York',
        ]);

        $response->assertSessionHasErrors([
            'email' => 'not a valid email',
        ]);
    }

    /** @test */
    public function add_user_fails_when_required_fields_are_missing()
    {
        $response = $this->post('/add-user', []);

        $response->assertSessionHasErrors([
            'username',
            'password',
            'email',
            'gender',
            'city',
        ]);
    }
}