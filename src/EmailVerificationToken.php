<?php

namespace Messages;

readonly class EmailVerificationToken
{
    public function __construct(
        string $randomCode,
        string $emailAddress,
        \DateTimeImmutable $createdAt,
    ){}
}
