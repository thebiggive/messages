# The Big Give messages

This tiny library exists to house shared message / model classes for cross-service
communication.

Currently it enables us, without hacks, to use Symfony Messenger to publish Donation
messages from [MatchBot](https://github.com/thebiggive/matchbot) and then consume
them with [ClaimBot](https://github.com/thebiggive/matchbot).
