<?php

namespace Municipio\Schema\Contracts;

interface SingleDigitalGatewayContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function location($location);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function policy($policy);

    public function policyCode($policyCode);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function service($service);

    public function subjectOf($subjectOf);

    public function url($url);

}
