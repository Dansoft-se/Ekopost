<?php

declare(strict_types=1);

namespace JGI\Ekopost\Tests\Provider;

use JGI\Ekopost\Model\Campaign;
use JGI\Ekopost\Model\Envelope;
use JGI\Ekopost\Provider\EnvelopeProvider;
use PHPUnit\Framework\TestCase;

class EnvelopeProviderTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @test
     */
    public function it_creates_an_envelope()
    {
        $envelopeProvider = new EnvelopeProvider($this->createHttpClientMock($this->createJson()), 'foo');
        $envelope = $envelopeProvider->create(new Campaign(), new Envelope());

        $this->assertInstanceOf(Envelope::class, $envelope);

        $this->assertEquals('f6aa0f0a-4514-46e5-be2c-539278a58e70', $envelope->getId());
    }

    /**
     * @return string
     */
    private function createJson(): string
    {
        return '{
            "id": "f6aa0f0a-4514-46e5-be2c-539278a58e70",
            "name": "Invoice 9923891",
            "address": {
                "$type": "postal",
                "name": [
                    "Company Inc.",
                    "c/o John Doe"
                ],
                "street": [
                    "Street no. 37"
                ],
                "postal_code": "65421",
                "city": "Gothenburg",
                "country": "SE",
                "use_coverpage": false
            },
            "postage": "priority",
            "plex": "simplex",
            "color": true,
            "state": "opened",
            "state_changed_at": "2015-01-01T12:00:00",
            "created_at": "2015-01-01T12:00:00",
            "transaction" : {
                "state" : "completed",
                "state_changed_at" : "2015-01-01T12:00:00"
            }
        }';
    }
}
