<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewLandingPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
  public function landing_page_loads_correctly()
  {
    //Arrange


    //Act
      $response = $this->get('/');

    //Assert
      $response->assertStatus(200);
      $response->assertSee('領収書発行アプリ');
  }



}
