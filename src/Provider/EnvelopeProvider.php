<?php

namespace JGI\Ekopost\Provider;

use JGI\Ekopost\Model\Campaign;
use JGI\Ekopost\Model\Envelope;
use JGI\Ekopost\Normalizer\EnvelopeNormalizer;

class EnvelopeProvider extends BaseProvider implements ProviderInterface
{
    /**
     * @param Envelope $envelope
     *
     * @return Envelope
     */
    public function create(Campaign $campaign, Envelope $envelope): Envelope
    {
        $data = EnvelopeNormalizer::normalize($envelope);

        $result = $this->post(sprintf('campaigns/%s/envelopes', $campaign->getId()), $data);

        return EnvelopeNormalizer::denormalize($result);
    }
}
