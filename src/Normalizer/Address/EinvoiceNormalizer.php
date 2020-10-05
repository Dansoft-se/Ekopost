<?php

namespace JGI\Ekopost\Normalizer\Address;

use JGI\Ekopost\Model\Address\Einvoice;

class EinvoiceNormalizer
{
    /**
     * @param Einvoice $einvoice
     *
     * @return array
     */
    public static function normalize(Einvoice $einvoice): array
    {
        return [
            '$type' => 'einvoice',
            'format' => $einvoice->getFormat(),
            'sender' => $einvoice->getSender(),
            'sender_type' => $einvoice->getSenderType(),
            'recipient' => $einvoice->getRecipient(),
            'recipient_type' => $einvoice->getRecipientType(),
            'intermediator' => $einvoice->getIntermediator(),
        ];
    }

    /**
     * @param array $data
     *
     * @return Einvoice
     */
    public static function denormalize(array $data): Einvoice
    {
        $einvoice = new Einvoice();
        $einvoice->setFormat($data['format']);
        $einvoice->setSender($data['sender']);
        $einvoice->setSenderType($data['sender_type']);
        $einvoice->setRecipient($data['recipient']);
        $einvoice->setRecipientType($data['recipient_type']);
        $einvoice->setIntermediator($data['intermediator']);

        return $einvoice;
    }
}
