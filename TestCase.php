<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{

    protected function login(User $user = null)
    {
        if ($user) {
            return $this->actingAs($user);
        }

        if ( ! $this->user) {
            $this->user = create(User::class);
        }

        return $this->actingAs($this->user);
    }
}
