<?php

namespace JGI\Ekopost;

use GuzzleHttp\Client;
use JGI\Ekopost\Provider\CampaignProvider;
use JGI\Ekopost\Provider\ContentProvider;
use JGI\Ekopost\Provider\EnvelopeProvider;
use JGI\Ekopost\Provider\ReachableProvider;

class Ekopost
{
    const API_URL = 'http://api.sandbox.ekopost.se/';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $apikey;

    /**
     * @param Client $client
     * @param string $apikey
     */
    public function __construct(Client $client, string $apikey)
    {
        $this->client = $client;
        $this->apikey = $apikey;
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
        return new CampaignProvider($this->client, $this->apikey);
    }

    /**
     * @return EnvelopeProvider
     */
    public function envelopes(): EnvelopeProvider
    {
        return new EnvelopeProvider($this->client, $this->apikey);
    }

    /**
     * @return ContentProvider
     */
    public function contents(): ContentProvider
    {
        return new ContentProvider($this->client, $this->apikey);
    }

    /**
     * @return ReachableProvider
     */
    public function reachable(): ReachableProvider
    {
        return new ReachableProvider($this->client, $this->apikey);
    }
}
