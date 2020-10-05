<?php

namespace JGI\Ekopost\Model\Address;

class Einvoice implements AddressInterface
{
    /**
     * @var string|null
     */
    private $format;

    /**
     * @var string|null
     */
    private $sender;

    /**
     * @var string|null
     */
    private $senderType;

    /**
     * @var string|null
     */
    private $recipient;

    /**
     * @var string|null
     */
    private $recipientType;

    /**
     * @var string|null
     */
    private $intermediator;

    /**
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * @param string|null $format
     */
    public function setFormat(?string $format): void
    {
        $this->format = $format;
    }

    /**
     * @return string|null
     */
    public function getSender(): ?string
    {
        return $this->sender;
    }

    /**
     * @param string|null $sender
     */
    public function setSender(?string $sender): void
    {
        $this->sender = $sender;
    }

    /**
     * @return string|null
     */
    public function getSenderType(): ?string
    {
        return $this->senderType;
    }

    /**
     * @param string|null $senderType
     */
    public function setSenderType(?string $senderType): void
    {
        $this->senderType = $senderType;
    }

    /**
     * @return string|null
     */
    public function getRecipient(): ?string
    {
        return $this->recipient;
    }

    /**
     * @param string|null $recipient
     */
    public function setRecipient(?string $recipient): void
    {
        $this->recipient = $recipient;
    }

    /**
     * @return string|null
     */
    public function getRecipientType(): ?string
    {
        return $this->recipientType;
    }

    /**
     * @param string|null $recipientType
     */
    public function setRecipientType(?string $recipientType): void
    {
        $this->recipientType = $recipientType;
    }

    /**
     * @return string|null
     */
    public function getIntermediator(): ?string
    {
        return $this->intermediator;
    }

    /**
     * @param string|null $intermediator
     */
    public function setIntermediator(?string $intermediator): void
    {
        $this->intermediator = $intermediator;
    }
}
