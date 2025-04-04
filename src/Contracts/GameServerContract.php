<?php

namespace Municipio\Schema\Contracts;

interface GameServerContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function game($game);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function playersOnline($playersOnline);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function serverStatus($serverStatus);

    public function subjectOf($subjectOf);

    public function url($url);

}
