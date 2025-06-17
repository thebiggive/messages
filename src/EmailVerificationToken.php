<?php

namespace Messages;

use Symfony\Component\Messenger\Bridge\AmazonSqs\MessageGroupAwareInterface;

readonly class EmailVerificationToken implements MessageGroupAwareInterface
{
    public function __construct(
        public string $randomCode,
        public string $emailAddress,
        public \DateTimeImmutable $createdAt,
    ){}

    public function getMessageGroupId(): ?string
    {
        return sha1($this->emailAddress);
    }
}
