<?php

namespace JGI\Ekopost\Model;

class Campaign
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var \DateTimeImmutable|null
     */
    private $outputDate;

    /**
     * @var string|null
     */
    private $costCenter;

    /**
     * @var int|null
     */
    private $envelopeCount;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var \DateTimeImmutable|null
     */
    private $stateChangedAt;

    /**
     * @var \DateTimeImmutable|null
     */
    private $createdAt;

    /**
     * @var bool
     */
    private $signing = false;

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
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getOutputDate(): ?\DateTimeImmutable
    {
        return $this->outputDate;
    }

    /**
     * @param \DateTimeImmutable|null $outputDate
     */
    public function setOutputDate(?\DateTimeImmutable $outputDate): void
    {
        $this->outputDate = $outputDate;
    }

    /**
     * @return string|null
     */
    public function getCostCenter(): ?string
    {
        return $this->costCenter;
    }

    /**
     * @param string|null $costCenter
     */
    public function setCostCenter(?string $costCenter): void
    {
        $this->costCenter = $costCenter;
    }

    /**
     * @return int|null
     */
    public function getEnvelopeCount(): ?int
    {
        return $this->envelopeCount;
    }

    /**
     * @param int|null $envelopeCount
     */
    public function setEnvelopeCount(?int $envelopeCount): void
    {
        $this->envelopeCount = $envelopeCount;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getStateChangedAt(): ?\DateTimeImmutable
    {
        return $this->stateChangedAt;
    }

    /**
     * @param \DateTimeImmutable|null $stateChangedAt
     */
    public function setStateChangedAt(?\DateTimeImmutable $stateChangedAt): void
    {
        $this->stateChangedAt = $stateChangedAt;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeImmutable|null $createdAt
     */
    public function setCreatedAt(?\DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return bool
     */
    public function isSigning(): bool
    {
        return $this->signing;
    }

    /**
     * @param bool $signing
     */
    public function setSigning(bool $signing): void
    {
        $this->signing = $signing;
    }

}
