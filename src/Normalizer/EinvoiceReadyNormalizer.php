<?php

namespace JGI\Ekopost\Normalizer;

use JGI\Ekopost\Model\EinvoiceReady;

class EinvoiceReadyNormalizer
{
    /**
     * @param EinvoiceReady $einvoiceReady
     *
     * @return array
     */
    public static function normalize(EinvoiceReady $einvoiceReady): array
    {
        $data = [];

        if ($einvoiceReady->getReceiverCin()) {
            $data['ReceiverCin'] = $einvoiceReady->getReceiverCin();
        }

        if ($einvoiceReady->getSenderCin()) {
            $data['SenderCin'] = $einvoiceReady->getSenderCin();
        }
        if ($einvoiceReady->getReceiverGln()) {
            $data['ReceiverGln'] = $einvoiceReady->getReceiverGln();
        }
        if ($einvoiceReady->getSenderGln()) {
            $data['SenderGln'] = $einvoiceReady->getSenderGln();
        }

        return $data;
    }

    /**
     * @param array $data
     *
     * @return EinvoiceReady
     */
    public static function denormalize(array $data): EinvoiceReady
    {
        $einvoiceReady = new EinvoiceReady();
        if (array_key_exists('receiver_cin', $data)) {
            $einvoiceReady->setReceiverCin($data['receiver_cin']);
        }
        if (array_key_exists('sender_cin', $data)) {
            $einvoiceReady->setSenderCin($data['sender_cin']);
        }
        if (array_key_exists('receiver_gln', $data)) {
            $einvoiceReady->setReceiverGln($data['receiver_gln']);
        }
        if (array_key_exists('sender_gln', $data)) {
            $einvoiceReady->setSenderGln($data['sender_gln']);
        }

        $einvoiceReady->setSuccess($data['success']);
        if (array_key_exists('error_message', $data)) {
            $einvoiceReady->setErrorMessage($data['error_message']);
        }


        return $einvoiceReady;
    }
}
