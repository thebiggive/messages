<?php

namespace Messages;

readonly class EmailVerificationToken
{
    public function __construct(
        public string $randomCode,
        public string $emailAddress,
        public \DateTimeImmutable $createdAt,
    ){}
}
