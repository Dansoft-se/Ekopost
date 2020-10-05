<?php

namespace JGI\Ekopost\Exception;

use JGI\Ekopost\Model\Error;

class EkopostHttpException extends EkopostException
{
    /**
     * @var Error
     */
    private $error;

    /**
     * @param Error $error
     */
    public function __construct(Error $error)
    {
        $this->error = $error;

        parent::__construct($error->getMessage(), $error->getStatus());
    }

    /**
     * @return Error
     */
    public function getError(): Error
    {
        return $this->error;
    }
}
