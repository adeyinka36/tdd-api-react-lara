<?php

namespace Tests\Unit;

use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use App\Models\User;

class PostToTimelineTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_post_can_be_created()
    {
        $this->withExceptionHandling();

        $response =  $this->post( 'http://127.0.0.1:8000/api/post?id=34',[], [
            'Authorization'=> "Bearer 1|oy1YFUJUxEy0YMYj6vmnJZK5AsWEfZi28sfXMid1"
        ]);

        $this->assertEquals(201, $response->status() );

    }


}
