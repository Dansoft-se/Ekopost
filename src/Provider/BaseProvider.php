<?php

namespace JGI\Ekopost\Provider;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use JGI\Ekopost\Ekopost;
use JGI\Ekopost\Exception\EkopostException;
use JGI\Ekopost\Exception\EkopostHttpException;
use JGI\Ekopost\Model\Error;
use Psr\Http\Message\ResponseInterface;

abstract class BaseProvider implements ProviderInterface
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $apikey;

    /**
     * @var bool
     */
    protected $sandbox;

    /**
     * @param Client $client
     * @param string $apikey
     * @param bool $sandbox
     */
    public function __construct(Client $client, string $apikey, bool $sandbox)
    {
        $this->client = $client;
        $this->apikey = $apikey;
        $this->sandbox = $sandbox;
    }

    /**
     * @param string $path
     *
     * @return array|null
     */
    protected function get(string $path): ?array
    {
        $response = $this->client->get(
            $this->getUrl($path),
            $this->createOptions()
        );

        return $this->handleResponse($response);
    }

    /**
     * @param string $path
     * @param array $data
     *
     * @return array|null
     */
    protected function post(string $path, array $data): ?array
    {
        $options = [
            RequestOptions::JSON => $data,
        ];

        $response = $this->client->post(
            $this->getUrl($path),
            array_merge($options, $this->createOptions())
        );

        return $this->handleResponse($response);
    }

    /**
     * @param string $path
     * @param array $data
     *
     * @return array|null
     */
    protected function put(string $path, array $data): ?array
    {
        $response = $this->client->put(
            $this->getUrl($path),
            array_merge([
                RequestOptions::JSON => $data,
            ], $this->createOptions())
        );

        return $this->handleResponse($response);
    }

    /**
     * @param ResponseInterface $response
     *
     * @return array
     */
    protected function handleResponse(ResponseInterface $response): array
    {
        $json = $response->getBody()->__toString(); // Pointer is not rewinded in logger

        $array = json_decode($json, true);

        if (substr($response->getStatusCode(), 0, 1) != '2') {
            throw new EkopostException($json);
        }
        if (!is_array($array)) {
            throw new EkopostException($json);
        }

        if (array_key_exists('error_code', $array)) {
            $error = new Error('', (string) $response->getStatusCode());

            throw new EkopostHttpException($error);
        }

        return $array;
    }

    /**
     * @param string $path
     *
     * @return array|null
     */
    protected function deleteRequest(string $path): ?array
    {
        $response = $this->client->delete(
            $this->getUrl($path),
            $this->createOptions()
        );

        return $this->handleResponse($response);
    }

    /**
     * @param string $path
     *
     * @return string
     */
    private function getUrl(string $path): string
    {
        if ($this->sandbox) {
            return Ekopost::API_SANDBOX_URL . $path;
        }

        return Ekopost::API_URL . $path;
    }

    /**
     * @return array
     */
    protected function createOptions(): array
    {
        return [
            RequestOptions::HEADERS => [
                'authorization' => 'api-key ' . $this->apikey,
                'Content-Type' => 'application/json',
            ],
        ];
    }
}
