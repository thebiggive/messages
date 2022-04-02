# The Big Give messages

This tiny library exists to house shared message / model classes for cross-service
communication.

Currently it enables us, without hacks, to use Symfony Messenger to publish Donation
messages from [MatchBot](https://github.com/thebiggive/matchbot) and then consume
them with [ClaimBot](https://github.com/thebiggive/matchbot).

## Changelog

### v2.0.0

v2 comes alongside a new assumption about what it means for donations to be sent back
to MatchBot by ClaimBot – this no longer implies an error. Instead status information
is sent back regardless of outcome and so it is important to have a new field to
capture the fundamentals about the status.

Although no fields are removed, because of the large downstream change in usage, this
update came with a new major version to reduce the risk of confusion between the two
approaches.
