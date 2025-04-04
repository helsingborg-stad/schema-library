<?php

namespace Municipio\Schema\Contracts;

interface MedicalGuidelineRecommendationContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function code($code);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function evidenceLevel($evidenceLevel);

    public function evidenceOrigin($evidenceOrigin);

    public function funding($funding);

    public function guideline($guideline);

    public function guidelineDate($guidelineDate);

    public function guidelineSubject($guidelineSubject);

    public function identifier($identifier);

    public function image($image);

    public function legalStatus($legalStatus);

    public function mainEntityOfPage($mainEntityOfPage);

    public function medicineSystem($medicineSystem);

    public function name($name);

    public function potentialAction($potentialAction);

    public function recognizingAuthority($recognizingAuthority);

    public function recommendationStrength($recommendationStrength);

    public function relevantSpecialty($relevantSpecialty);

    public function sameAs($sameAs);

    public function study($study);

    public function subjectOf($subjectOf);

    public function url($url);

}
