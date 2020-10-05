<?php

namespace JGI\Ekopost\Normalizer;

use JGI\Ekopost\Model\Address\AddressInterface;
use JGI\Ekopost\Model\Address\Einvoice;
use JGI\Ekopost\Model\Address\Postal;
use JGI\Ekopost\Model\Campaign;
use JGI\Ekopost\Model\Envelope;
use JGI\Ekopost\Normalizer\Address\EinvoiceNormalizer;
use JGI\Ekopost\Normalizer\Address\PostalNormalizer;
use LeanlinkBundle\ReplacementModel\Strategy\Add;

class AddressNormalizer
{
    /**
     * @param AddressInterface $address
     *
     * @return array
     */
    public static function normalize(AddressInterface $address): array
    {
        if ($address instanceof Postal) {
            return PostalNormalizer::normalize($address);
        } elseif ($address instanceof Einvoice) {
            return EinvoiceNormalizer::normalize($address);
        }
    }

    /**
     * @param array $data
     *
     * @return AddressInterface
     */
    public static function denormalize(array $data): AddressInterface
    {
        if ($data['$type'] == 'postal') {
            return PostalNormalizer::denormalize($data);
        } elseif ($data['$type'] == 'einvoice') {
            return EinvoiceNormalizer::denormalize($data);
        }
    }
}
