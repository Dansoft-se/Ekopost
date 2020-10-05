<?php

namespace JGI\Ekopost\Model;

use JGI\Ekopost\Model\Address\AddressInterface;

class Envelope
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var AddressInterface|null
     */
    private $address;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return AddressInterface|null
     */
    public function getAddress(): ?AddressInterface
    {
        return $this->address;
    }

    /**
     * @param AddressInterface|null $address
     */
    public function setAddress(?AddressInterface $address): void
    {
        $this->address = $address;
    }
}
