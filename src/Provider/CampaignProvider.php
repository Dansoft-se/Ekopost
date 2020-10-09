<?php

namespace JGI\Ekopost\Provider;

use JGI\Ekopost\Model\Campaign;
use JGI\Ekopost\Normalizer\CampaignNormalizer;

class CampaignProvider extends BaseProvider implements ProviderInterface
{
    /**
     * @param Campaign $campaign
     *
     * @return Campaign
     */
    public function create(Campaign $campaign): Campaign
    {
        $data = CampaignNormalizer::normalize($campaign);

        $result = $this->post('campaigns', $data);

        return CampaignNormalizer::denormalize($result);
    }

    /**
     * @param Campaign $campaign
     * 
     * @return Campaign
     */
    public function close(Campaign $campaign): Campaign
    {
        $result = $this->post(sprintf('campaigns/%s/close', $campaign->getId()), []);

        return CampaignNormalizer::denormalize($result);
    }
}
