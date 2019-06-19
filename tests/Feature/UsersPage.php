<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersPage extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function usersPage_loaded_correctly()
    {
        //Arrange


        //Act
        $response = $this->get('/users');

        //Assert
        $response->assertStatus(200);
        $response->assertSee('ユーザー覧');
    }

    /** @test */
    public function pagination_test()
    {
        // Page 1 users
        for ($i=11; $i <= 20; $i++) {
            factory(\App\User::class)->create([
                'name' => 'User'.$i,
            ]);
        }

        // Page 2 users
        for ($i=21; $i < 30; $i++) {
            factory(\App\User::class)->create([
                'name' => 'User'.$i,
            ]);
        }

        $response = $this->get('/users');

        $response->assertSee('User11');
        $response->assertSee('User19');

        $response = $this->get('/users?page=2');

        $response->assertSee('User21');
        $response->assertSee('User29');
    }


    /** @test */
    public function filter_test()
    {
        factory(\App\User::class)->create([
            'name' => 'Takayuki',
        ]);

        factory(\App\User::class)->create([
            'name' => 'A',
        ]);

        factory(\App\User::class)->create([
            'name' => 'F',
        ]);

        $response = $this->get('/users/filter?name=t');

        $response->assertSeeTextInOrder(['Takayuki']);

    }
}
