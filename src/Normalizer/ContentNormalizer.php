<?php

namespace JGI\Ekopost\Normalizer;

use JGI\Ekopost\Model\Content;

class ContentNormalizer
{
    /**
     * @param Content $content
     *
     * @return array
     */
    public static function normalize(Content $content): array
    {
        $data = [
            'id' => $content->getId(),
            'mime' => $content->getMime(),
            'length' => $content->getLength(),
            'type' => $content->getType(),
            'data' => $content->getData(),
        ];

        return $data;
    }

    /**
     * @param array $data
     *
     * @return Content
     */
    public static function denormalize(array $data): Content
    {
        $content = new Content();
        $content->setId($data['id']);
        $content->setMime($data['mime']);
        $content->setLength($data['length']);
        $content->setType($data['type']);
        if (array_key_exists('data', $data)) {
            $content->setData($data['data']);
        }
        $content->setCreatedAt(new \DateTimeImmutable($data['created_at']));

        return $content;
    }
}
