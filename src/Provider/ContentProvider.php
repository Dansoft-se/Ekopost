<?php

namespace JGI\Ekopost\Provider;

use JGI\Ekopost\Model\Campaign;
use JGI\Ekopost\Model\Content;
use JGI\Ekopost\Model\Envelope;
use JGI\Ekopost\Normalizer\ContentNormalizer;
use JGI\Ekopost\Normalizer\EnvelopeNormalizer;

class ContentProvider extends BaseProvider implements ProviderInterface
{
    /**
     * @param Content $envelope
     * 
     * @return Content
     */
    public function create(Campaign $campaign, Envelope $envelope, Content $content): Content
    {
        $data = ContentNormalizer::normalize($content);

        $result = $this->post(
            sprintf(
                'campaigns/%s/envelopes/%s/content',
                $campaign->getId(),
                $envelope->getId()
            ), $data
        );

        return ContentNormalizer::denormalize($result);
    }
}
