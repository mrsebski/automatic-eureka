<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    public function testsRegistersSuccessfully()
    {
        $payload = [
            'name' => 'John',
            'firstname' => 'firstname',
            'surname' => 'surname',
            'date_of_birth' => '1996-03-12',
            'phone_number' => '01928765456',
            'email' => 'john@toptal.com',
            'password' => 'MyPasswordForEveryOne',
            'password_confirmation' => 'MyPasswordForEveryOne',
        ];

        
        
        $this->json('post', '/api/register', $payload)
            ->assertStatus(201)
            ->assertJsonStructure([
                'data' => [
                    'name',
                    'firstname',
                    'surname',
                    'date_of_birth',
                    'phone_number',
                    'email',
                    'updated_at',
                    'created_at',
                    'id',
                    'api_token',
                ],
            ]);
    }

    public function testsRequiresPasswordEmailAndName()
    {
        $this->json('post', '/api/register')
            ->assertStatus(422)
            ->assertJson([
                'errors' => [
                'name' => ['The name field is required.'],
                'email' => ['The email field is required.'],
                'password' => ['The password field is required.'],
            ],
            ]);
    }

    public function testsRequirePasswordConfirmation()
    {
        $payload = [
            'name' => 'John',
            'email' => 'john@toptal.com',
            'password' => 'MyPasswordForEveryOne',
        ];

        $this->json('post', '/api/register', $payload)
            ->assertStatus(422)
            ->assertJson([
                'errors' => [
                'password' => ['The password confirmation does not match.'],
            ],
            ]);
    }
}