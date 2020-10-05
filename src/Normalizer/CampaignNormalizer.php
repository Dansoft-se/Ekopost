<?php

namespace JGI\Ekopost\Normalizer;

use JGI\Ekopost\Model\Campaign;

class CampaignNormalizer
{
    /**
     * @param Campaign $campaign
     *
     * @return array
     */
    public static function normalize(Campaign $campaign): array
    {
        return [
            'id' => $campaign->getId(),
            'name' => $campaign->getName(),
            'output_date' => $campaign->getOutputDate() ? $campaign->getOutputDate()->format('Y-m-d H:i:s') : null,
            'cost_center' => $campaign->getCostCenter(),
            'signing' => $campaign->isSigning(),
        ];
    }

    /**
     * @param array $data
     *
     * @return Campaign
     */
    public static function denormalize(array $data): Campaign
    {
        $campaign = new Campaign();
        $campaign->setId($data['id']);
        $campaign->setName($data['name']);
        $campaign->setOutputDate(new \DateTimeImmutable($data['output_date']));
        if (array_key_exists('cost_center', $data)) {
            $campaign->setCostCenter($data['cost_center']);
        }
        $campaign->setEnvelopeCount($data['envelope_count']);
        $campaign->setState($data['state']);
        $campaign->setStateChangedAt(new \DateTimeImmutable($data['state_changed_at']));
        $campaign->setCreatedAt(new \DateTimeImmutable($data['created_at']));
        $campaign->setSigning($data['signing']);

        return $campaign;
    }
}
