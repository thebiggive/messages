# The Big Give messages

This tiny library exists to house shared message / model classes for cross-service
communication.

Currently it enables us, without hacks, to use Symfony Messenger to publish Donation
messages from [MatchBot](https://github.com/thebiggive/matchbot) and then consume
them with [ClaimBot](https://github.com/thebiggive/matchbot).

## Changelog

### v3.3.4

Add support for deletion to `Person`.

### v3.3.3

Make `Person` message group-aware.

### v3.3.2

Make `EmailVerificationToken` message group-aware.

### v3.3.0

Adds `EmailVerificationToken` model.

### v3.2.0

Adds `Person` model.

### v3.1.0

Adds `MessageId` stamp support. PHP minimum is now 8.3.

### v3.0.0

v3 adds `$org_regulator` and `$org_regulator_numbers`. These are technically
optional, but ClaimBot v1.3 will send claims in a way that only works when
they are set appropriately (except for exempt charities).

As it is effectively therefore a breaking release of the model already, we
have also taken the opportunity to make the feedback fields `$submission_correlation_id`,
`$response_success` and `$response_detail` snake case for consistency
with the other properties. Implementations using camel case will break
immediately upon upgrade until they are updated.

### v2.0.0

v2 comes alongside a new assumption about what it means for donations to be sent back
to MatchBot by ClaimBot – this no longer implies an error. Instead status information
is sent back regardless of outcome and so it is important to have a new field to
capture the fundamentals about the status.

Although no fields are removed, because of the large downstream change in usage, this
update came with a new major version to reduce the risk of confusion between the two
approaches.
