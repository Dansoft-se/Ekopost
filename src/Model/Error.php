<?php

namespace JGI\Ekopost\Model;

class Error
{
    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $status;

    /**
     * @param string $message
     * @param string $status
     */
    public function __construct(string $message, string $status)
    {
        $this->message = $message;
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
}
