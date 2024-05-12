<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyUnitTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * Test user signup redirects to profile and then to dashboard.
     */
    public function testUserSignupRedirectsToProfileAndDashboard(): void
    {
        // Given a new user data
        $userData = [
            'first_name' => 'Aziz',
            'last_name' => 'Alhazmy',
            'email' => 'Aziz@example.com',
            'password' => 'password',
        ];

        // When the user submits the registration form
        $response = $this->post('/signup', $userData);

        // Then the user should be redirected to their profile page
        $response->assertRedirect('/profile');
        
        // Follow the redirect to the profile page
        $response = $this->get('/profile');
        
        // Then the user should see their profile details
        $response->assertSeeText('Aziz Alhazmy');
        $response->assertSeeText('Aziz@example.com');

        // Follow the link to the dashboard
        $response = $this->get('/dashboard');

        // Then the user should be redirected to the dashboard
       
       
    }
}
