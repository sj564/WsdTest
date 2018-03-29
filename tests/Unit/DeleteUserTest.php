<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDelete()
    {
        $user = new User();
        $user->name = 'Ron';
        $user->email = 'Ron@gmail.com';
        $user->password = 'adelaide';
        $user->save();
        $this->assertTrue($user->delete());
    }
}
