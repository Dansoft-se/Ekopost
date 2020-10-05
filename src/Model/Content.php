<?php

namespace JGI\Ekopost\Model;

use JGI\Ekopost\Model\Address\Postal;

class Content
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $data;

    /**
     * @var string|null
     */
    private $mime;

    /**
     * @var int|null
     */
    private $length;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var Postal|null
     */
    private $returnAddress;

    /**
     * @var \DateTimeImmutable|null
     */
    private $createdAt;

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
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * @param string|null $data
     */
    public function setData(?string $data): void
    {
        $this->data = $data;
    }

    /**
     * @return string|null
     */
    public function getMime(): ?string
    {
        return $this->mime;
    }

    /**
     * @param string|null $mime
     */
    public function setMime(?string $mime): void
    {
        $this->mime = $mime;
    }

    /**
     * @return int|null
     */
    public function getLength(): ?int
    {
        return $this->length;
    }

    /**
     * @param int|null $length
     */
    public function setLength(?int $length): void
    {
        $this->length = $length;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return Postal|null
     */
    public function getReturnAddress(): ?Postal
    {
        return $this->returnAddress;
    }

    /**
     * @param Postal|null $returnAddress
     */
    public function setReturnAddress(?Postal $returnAddress): void
    {
        $this->returnAddress = $returnAddress;
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
}
