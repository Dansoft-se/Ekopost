<?php

namespace JGI\Ekopost\Normalizer\Address;

use JGI\Ekopost\Model\Address;
use JGI\Ekopost\Model\Campaign;
use JGI\Ekopost\Model\Envelope;
use LeanlinkBundle\ReplacementModel\Strategy\Add;

class PostalNormalizer
{
    /**
     * @param Address $address
     * @return string[]
     */
    public static function normalize(Address $address): array
    {
        return [
            '$type' => 'postal',
            'name' => $address->getNames(),
            'street' => $address->getStreets(),
            'postal_code' => $address->getPostalCode(),
            'city' => $address->getCity(),
            'country' => $address->getCountryCode(),
            'use_coverpage' => $address->isUseCoverPage(),
        ];
    }

    /**
     * @param array $data
     *
     * @return Address
     */
    public static function denormalize(array $data): Address
    {
        $address = new Address();
        foreach ($data['name'] as $name) {
            $address->addName($name);
        }
        foreach ($data['street'] as $street) {
            $address->addStreet($street);
        }
        $address->setPostalCode($data['postal_code']);
        $address->setCity($data['city']);
        $address->setCountryCode($data['country']);
        $address->setUseCoverPage($data['use_coverpage']);

        return $address;
    }
}
