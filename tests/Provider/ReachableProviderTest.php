<?php

declare(strict_types=1);

namespace JGI\Ekopost\Tests\Provider;

use JGI\Ekopost\Model\EinvoiceReady;
use JGI\Ekopost\Provider\ReachableProvider;
use PHPUnit\Framework\TestCase;

class ReachableProviderTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @test
     */
    public function it_returns_einvoice_reachable_status()
    {
        $reachableProvider = new ReachableProvider($this->createHttpClientMock($this->createJson()), 'foo', false);
        $einvoiceReady = $reachableProvider->einvoiceReady(new EinvoiceReady());

        $this->assertInstanceOf(EinvoiceReady::class, $einvoiceReady);

        $this->assertEquals('800101xxxx', $einvoiceReady->getReceiverCin());
    }

    /**
     * @return string
     */
    private function createJson(): string
    {
        return '{
            "receiver_cin": "800101xxxx",
            "sender_cin": "800102xxxx",
            "success": true,
            "error_message": ""
        }';
    }
}
