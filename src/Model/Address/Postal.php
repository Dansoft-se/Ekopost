<?php

namespace JGI\Ekopost\Model\Address;

class Postal implements AddressInterface
{
    /**
     * @var string[]
     */
    private $names = [];

    /**
     * @var string[]
     */
    private $streets = [];

    /**
     * @var string|null
     */
    private $postalCode;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $countryCode;

    /**
     * @var bool
     */
    private $useCoverPage = false;

    /**
     * @return string[]
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param string $name
     */
    public function addName(string $name): void
    {
        $this->names[] = $name;
    }

    /**
     * @return string[]
     */
    public function getStreets(): array
    {
        return $this->streets;
    }

    /**
     * @param string $street
     */
    public function addStreet(string $street): void
    {
        $this->streets[] = $street;
    }

    /**
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @param string|null $postalCode
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param string|null $countryCode
     */
    public function setCountryCode(?string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return bool
     */
    public function isUseCoverPage(): bool
    {
        return $this->useCoverPage;
    }

    /**
     * @param bool $useCoverPage
     */
    public function setUseCoverPage(bool $useCoverPage): void
    {
        $this->useCoverPage = $useCoverPage;
    }
}
