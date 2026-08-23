<?php

namespace phpbergen\Git;

use DateTimeImmutable;

final readonly class User
{
    public function __construct(
        public string $name,
        public string $email,
        public DateTimeImmutable $born,
    ) {
    }

    public function age(DateTimeImmutable $now = new DateTimeImmutable()): int
    {
        return $now->diff($this->born)->y;
    }
}
