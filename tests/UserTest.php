<?php

namespace Phpbergen\Tests;


use DateTimeImmutable;
use phpbergen\Git\User;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

#[CoversClass(User::class)]
class UserTest extends TestCase
{
    #[Test]
    public function age(): void
    {
        $born = new DateTimeImmutable('1.4.1990');
        $user = new User(
            'PHP Bergen',
            'steinmb@phpbergen.no',
            $born,
        );

        assertEquals($user->age(new DateTimeImmutable('27.8.2026')), 36);
        assertEquals($user->age(new DateTimeImmutable('1.4.1991')), 1);
    }
}
