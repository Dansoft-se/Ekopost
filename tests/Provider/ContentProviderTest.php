<?php

declare(strict_types=1);

namespace JGI\Ekopost\Tests\Provider;

use JGI\Ekopost\Model\Campaign;
use JGI\Ekopost\Model\Content;
use JGI\Ekopost\Model\Envelope;
use JGI\Ekopost\Provider\ContentProvider;
use PHPUnit\Framework\TestCase;

class ContentProviderTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @test
     */
    public function it_creates_a_content_item()
    {
        $contentProvider = new ContentProvider($this->createHttpClientMock($this->createJson()), 'foo', false);
        $content = $contentProvider->create(new Campaign(), new Envelope(), new Content());

        $this->assertInstanceOf(Content::class, $content);

        $this->assertEquals('d2c5fedd-0749-482c-94b9-7f13bd442a04', $content->getId());
    }

    /**
     * @return string
     */
    private function createJson(): string
    {
        return '{
            "id": "d2c5fedd-0749-482c-94b9-7f13bd442a04",
            "mime": "application/pdf",
            "length": 1024,
            "type": "document",             
            "return_address" : "false",
            "created_at": "2015-01-01T12:00:00"
        }';
    }
}
