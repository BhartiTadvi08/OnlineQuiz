<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_if_it_fetches_most_priorityTask()
    {
           factory(User::class)->create();
           factory(User::class)->create(['priority'=>'3']);
           $importantTask = factory(User::class)->create(['priority'=>'5']);
           $users = User::prioritize()->get();
           $this->assertEquals($importantTask->id,$users->first()->id);

    }
}
