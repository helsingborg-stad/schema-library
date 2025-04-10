<?php

namespace Municipio\Schema\Contracts;

interface PronounceableTextContract
{
    public function inLanguage($inLanguage);

    public function phoneticText($phoneticText);

    public function speechToTextMarkup($speechToTextMarkup);

    public function textValue($textValue);

}
