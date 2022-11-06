<?php

namespace Tests\Unit;

use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use App\Models\User;

class PostToTimelineTest extends TestCase
{
    public string $local = 'http://127.0.0.1:8000/api/post';

    public array $headers = [
        'Authorization'=> "Bearer 1|oy1YFUJUxEy0YMYj6vmnJZK5AsWEfZi28sfXMid1"
    ];
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_post_can_be_created()
    {
        $this->withExceptionHandling();

        $response =  $this->post( $this->local,[

        ], $this->headers);

        $this->assertEquals(201, $response->status() );

    }

    /**
     * Making sure post can be deleted.
     *
     * @return void
     */
    public function test_post_can_be_deleted()
    {
     $this->withExceptionHandling();

     $response = $this->delete($this->local,['id'=>'30'], $this->headers);

     $this->assertEquals(204, $response->status());
    }

    /**
     * Making sure post can be read.
     *
     * @return void
     */
    public function test_post_can_be_read()
    {
        $this->withExceptionHandling();
        $response = $this->get($this->local, $this->headers);
        $this->assertEquals(200, $response->status());

    }


    /**
     * Making sure post can be updated.
     *
     * @return void
     */
    public function test_post_can_be_updated()
    {
        $this->withExceptionHandling();

        $response = $this->put($this->local,['id'=>'30'], $this->headers);

        $this->assertEquals(201, $response->status());
    }


}
