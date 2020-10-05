<?php

namespace JGI\Ekopost\Normalizer;

use JGI\Ekopost\Model\Campaign;
use JGI\Ekopost\Model\Envelope;

class EnvelopeNormalizer
{
    /**
     * @param Envelope $envelope
     *
     * @return array
     */
    public static function normalize(Envelope $envelope): array
    {
        $data = [
            'id' => $envelope->getId(),
        ];
        if ($envelope->getAddress()) {
            $data['address'] = AddressNormalizer::normalize($envelope->getAddress());
        }
        
        return $data;
    }

    /**
     * @param array $data
     *
     * @return Envelope
     */
    public static function denormalize(array $data): Envelope
    {
        $envelope = new Envelope();
        $envelope->setId($data['id']);

        return $envelope;
    }
}
