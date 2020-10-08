<?php

declare(strict_types=1);

namespace JGI\Ekopost\Tests\Provider;

use JGI\Ekopost\Ekopost;
use JGI\Ekopost\Model\Campaign;
use JGI\Ekopost\Provider\CampaignProvider;
use PHPUnit\Framework\TestCase;

class CampaignProviderTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @test
     */
    public function it_creates_a_campaign()
    {
        $campaignProvider = new CampaignProvider($this->createHttpClientMock($this->createJson()), 'foo', false);
        $campaign = $campaignProvider->create(new Campaign());

        $this->assertInstanceOf(Campaign::class, $campaign);

        $this->assertEquals('4ebeab48-ee03-474f-bc79-c6db082c2bad', $campaign->getId());
    }

    /**
     * @test
     */
    public function it_closes_a_campaign()
    {
        $campaignProvider = new CampaignProvider($this->createHttpClientMock($this->createJson()), 'foo', false);
        $campaign = $campaignProvider->close(new Campaign());

        $this->assertInstanceOf(Campaign::class, $campaign);

        $this->assertEquals('4ebeab48-ee03-474f-bc79-c6db082c2bad', $campaign->getId());
    }

    /**
     * @return string
     */
    private function createJson(): string
    {
        return '{
            "id": "4ebeab48-ee03-474f-bc79-c6db082c2bad",
            "name": "Invoice March 2015",
            "output_date": "2015-01-01T12:00:00",
            "cost_center": "Finance Office",
            "envelope_count": 1,
            "state": "opened",
            "state_changed_at": "2015-01-01T12:00:00",
            "created_at": "2015-01-01T12:00:00",
            "signing": "false"
        }';
    }
}
