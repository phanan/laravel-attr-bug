<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function testCustomAttribute(): void
    {
        /** @var User $user */
        $user = User::factory()->create();

        $assigningToTriggerAccessor = $user->foo;
        $user->save();
    }
}
