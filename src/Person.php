<?php

namespace Messages;

use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Messenger\Bridge\AmazonSqs\MessageGroupAwareInterface;

class Person implements MessageGroupAwareInterface
{
    public UuidInterface $id;
    public bool $deleted = false;
    public string $first_name;
    public string $last_name;
    public string $email_address;
    public string $stripe_customer_id;

    // These are only required when Gift Aid is being claimed. For now, we do not store the
    // latest Gift Aid declaration at Person level but e.g. Regular Giving donations may
    // use the last declaration for subsequent months and so need the latest address from these
    // fields too.
    public ?string $home_address_line_1 = null;
    public ?string $home_postcode = null;
    public ?string $home_country_code = null;

    public function getMessageGroupId(): ?string
    {
        if ($this->deleted) {
            // if deleted, the details used below may not be set, so we use the ID instead
            return sha1($this->id->toString());
        }

        return sha1($this->first_name . '•' . $this->email_address);
    }
}
