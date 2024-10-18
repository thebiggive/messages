<?php

namespace Messages;

readonly class PersonUpserted
{
    public function __construct(
        /**
         * Keeping things very vague here at least for now so that I can iterate on changes in identity and matchbot
         * until it works without having to make updates here. After that will probably add specific properties
         * and remove $data.
         *
         * @var array<string, mixed>
         */
        public array $data,
    )
    {
    }
}