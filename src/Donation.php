<?php

namespace Messages;

class Donation
{
    public string $id;

    /** @var string Donation date, YYYY-MM-DD. */
    public string $donation_date;

    public string $title;
    public string $first_name;
    public string $last_name;
    public string $house_no;
    public string $postcode;
    public bool $overseas = false;
    public float $amount;
    public bool $sponsored = false;
    public string $org_hmrc_ref;
    public string $org_name;
    public ?string $org_regulator = null; // CCEW, CCNI or OSCR.
    public ?string $org_regulator_number = null;

    /**
     * @var string|null From HMRC acknowledgement. Used for subsequent polling status checks and HMRC contact.
     */
    public ?string $submission_correlation_id = null;

    /**
     * @var bool|null  A minimal status flag: null when claim outcome is not yet determined, false for any
     *                  kind of error and true for success.
     */
    public ?bool $response_success = null;

    /**
     * @var string|null Once provided, finalised errors or "messages" value from HMRC.
     */
    public ?string $response_detail = null;
}
