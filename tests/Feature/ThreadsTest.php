<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations;

    private $thread;
    private $user;

    public function setUp()
    {
        parent::setUp();

        $this->thread = factory('App\Thread')->create();
        $this->user = factory('App\User')->create();
    }

    /**
     * @test
     */
    public function a_user_can_view_all_threads()
    {
        $this->get('/threads')->assertSee($this->thread->title);
    }

    /**
     * @test
     */
    public function a_user_can_view_a_single_thread_by_thread_id()
    {
        $this->get('/threads/' . $this->thread->id)->assertSee($this->thread->title);
    }

    /**
     * @test
     */
    public function a_user_can_view_replies_associated_with_a_thread()
    {
        $reply = factory('App\Reply')->create(['thread_id' => $this->thread->id]);

        $this->get('/threads/' . $this->thread->id)->assertSee($reply->body);
    }


    /**
     * @test
     */
    public function an_authenticated_user_can_create_a_thread()
    {
        $this->actingAs($this->user);
        $response = $this->call('POST', '/threads', $this->thread->toArray());
        //dd($response);
    }

    /**
     * @test
     */
    public function a_unauthenticated_user_can_not_create_threads()
    {

    }
}