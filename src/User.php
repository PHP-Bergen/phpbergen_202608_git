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

    public function age($now = new DateTimeImmutable()): int
    {
        if ($now === null) {
            $now = new DateTimeImmutable();
        }
        return $now->diff($this->born)->y;
    }
}
