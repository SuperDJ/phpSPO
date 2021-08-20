<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00
 */
namespace Office365\Directory\Security;

use Office365\Runtime\ClientValue;
class CloudAppSecurityState extends ClientValue
{
    /**
     * @var string
     */
    public $DestinationServiceIp;
    /**
     * @var string
     */
    public $DestinationServiceName;
    /**
     * @var string
     */
    public $RiskScore;
}