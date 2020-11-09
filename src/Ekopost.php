<?php

namespace JGI\Ekopost;

use GuzzleHttp\Client;
use JGI\Ekopost\Provider\CampaignProvider;
use JGI\Ekopost\Provider\ContentProvider;
use JGI\Ekopost\Provider\EnvelopeProvider;
use JGI\Ekopost\Provider\ReachableProvider;

class Ekopost
{
    const API_SANDBOX_URL = 'http://api.sandbox.ekopost.se/';
    const API_URL = 'https://api.ekopost.se/';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $apikey;

    /**
     * @var bool
     */
    private $sandbox;

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

    public function setClient(Client $client): void
    {
        $this->client = $client;
    }

    /**
     * @return CampaignProvider
     */
    public function campaigns(): CampaignProvider
    {
        return new CampaignProvider($this->client, $this->apikey, $this->sandbox);
    }

    /**
     * @return EnvelopeProvider
     */
    public function envelopes(): EnvelopeProvider
    {
        return new EnvelopeProvider($this->client, $this->apikey, $this->sandbox);
    }

    /**
     * @return ContentProvider
     */
    public function contents(): ContentProvider
    {
        return new ContentProvider($this->client, $this->apikey, $this->sandbox);
    }

    /**
     * @return ReachableProvider
     */
    public function reachable(): ReachableProvider
    {
        return new ReachableProvider($this->client, $this->apikey, $this->sandbox);
    }
}
