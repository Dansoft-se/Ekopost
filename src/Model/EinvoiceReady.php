<?php

namespace JGI\Ekopost\Model;

use JGI\Ekopost\Model\Address\AddressInterface;

class EinvoiceReady
{
    /**
     * @var string|null
     */
    private $receiverCin;

    /**
     * @var string|null
     */
    private $senderCin;

    /**
     * @var string|null
     */
    private $receiverGln;

    /**
     * @var string|null
     */
    private $senderGln;

    /**
     * @var bool
     */
    private $success = false;

    /**
     * @var string|null
     */
    private $errorMessage;

    /**
     * @return string|null
     */
    public function getReceiverCin(): ?string
    {
        return $this->receiverCin;
    }

    /**
     * @param string|null $receiverCin
     */
    public function setReceiverCin(?string $receiverCin): void
    {
        $this->receiverCin = $receiverCin;
    }

    /**
     * @return string|null
     */
    public function getSenderCin(): ?string
    {
        return $this->senderCin;
    }

    /**
     * @param string|null $senderCin
     */
    public function setSenderCin(?string $senderCin): void
    {
        $this->senderCin = $senderCin;
    }

    /**
     * @return string|null
     */
    public function getReceiverGln(): ?string
    {
        return $this->receiverGln;
    }

    /**
     * @param string|null $receiverGln
     */
    public function setReceiverGln(?string $receiverGln): void
    {
        $this->receiverGln = $receiverGln;
    }

    /**
     * @return string|null
     */
    public function getSenderGln(): ?string
    {
        return $this->senderGln;
    }

    /**
     * @param string|null $senderGln
     */
    public function setSenderGln(?string $senderGln): void
    {
        $this->senderGln = $senderGln;
    }

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(bool $success): void
    {
        $this->success = $success;
    }

    /**
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * @param string|null $errorMessage
     */
    public function setErrorMessage(?string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }
}
