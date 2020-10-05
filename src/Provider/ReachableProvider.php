<?php

namespace JGI\Ekopost\Provider;

use JGI\Ekopost\Model\EinvoiceReady;
use JGI\Ekopost\Model\Envelope;
use JGI\Ekopost\Normalizer\EinvoiceReadyNormalizer;

class ReachableProvider extends BaseProvider implements ProviderInterface
{
    /**
     * @param Envelope $envelope
     *
     * @return EinvoiceReady
     */
    public function einvoiceReady(EinvoiceReady $einvoiceReady): EinvoiceReady
    {
        $data = EinvoiceReadyNormalizer::normalize($einvoiceReady);

        $result = $this->post('reachable/einvoiceready', $data);

        return EinvoiceReadyNormalizer::denormalize($result);
    }
}
