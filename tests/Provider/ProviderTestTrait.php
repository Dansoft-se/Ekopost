<?php

declare(strict_types=1);

namespace JGI\Ekopost\Tests\Provider;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

trait ProviderTestTrait
{
    /**
     * @param string|null $json
     * @param int $statusCode
     *
     * @return Client
     */
    private function createHttpClientMock(?string $json, int $statusCode = 200): Client
    {
        $httpClientMock = $this->getMockBuilder(Client::class)->getMock();
        $responseMock = $this->getMockBuilder(ResponseInterface::class)->getMock();
        $streamMock = $this->getMockBuilder(StreamInterface::class)->getMock();
        $streamMock->method('__toString')->willReturn($json);
        $responseMock->method('getBody')->willReturn($streamMock);
        $responseMock->method('getStatusCode')->willReturn($statusCode);
        $httpClientMock->method('__call')->willReturn($responseMock);

        return $httpClientMock;
    }
}
