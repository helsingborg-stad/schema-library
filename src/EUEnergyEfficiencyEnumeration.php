<?php

namespace Municipio\Schema;

use \Municipio\Schema\Contracts\EUEnergyEfficiencyEnumerationContract;
use \Municipio\Schema\Contracts\EnergyEfficiencyEnumerationContract;
use \Municipio\Schema\Contracts\EnumerationContract;
use \Municipio\Schema\Contracts\IntangibleContract;
use \Municipio\Schema\Contracts\ThingContract;

/**
 * Enumerates the EU energy efficiency classes A-G as well as A+, A++, and A+++
 * as defined in EU directive 2017/1369.
 *
 * @see https://schema.org/EUEnergyEfficiencyEnumeration
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2670
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class EUEnergyEfficiencyEnumeration extends BaseType implements EUEnergyEfficiencyEnumerationContract, EnergyEfficiencyEnumerationContract, EnumerationContract, IntangibleContract, ThingContract
{
    /**
     * Represents EU Energy Efficiency Class A as defined in EU energy labeling
     * regulations.
     *
     * @see https://schema.org/EUEnergyEfficiencyCategoryA
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
     const EUEnergyEfficiencyCategoryA = 'https://schema.org/EUEnergyEfficiencyCategoryA';

    /**
     * Represents EU Energy Efficiency Class A+ as defined in EU energy labeling
     * regulations.
     *
     * @see https://schema.org/EUEnergyEfficiencyCategoryA1Plus
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
     const EUEnergyEfficiencyCategoryA1Plus = 'https://schema.org/EUEnergyEfficiencyCategoryA1Plus';

    /**
     * Represents EU Energy Efficiency Class A++ as defined in EU energy
     * labeling regulations.
     *
     * @see https://schema.org/EUEnergyEfficiencyCategoryA2Plus
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
     const EUEnergyEfficiencyCategoryA2Plus = 'https://schema.org/EUEnergyEfficiencyCategoryA2Plus';

    /**
     * Represents EU Energy Efficiency Class A+++ as defined in EU energy
     * labeling regulations.
     *
     * @see https://schema.org/EUEnergyEfficiencyCategoryA3Plus
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
     const EUEnergyEfficiencyCategoryA3Plus = 'https://schema.org/EUEnergyEfficiencyCategoryA3Plus';

    /**
     * Represents EU Energy Efficiency Class B as defined in EU energy labeling
     * regulations.
     *
     * @see https://schema.org/EUEnergyEfficiencyCategoryB
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
     const EUEnergyEfficiencyCategoryB = 'https://schema.org/EUEnergyEfficiencyCategoryB';

    /**
     * Represents EU Energy Efficiency Class C as defined in EU energy labeling
     * regulations.
     *
     * @see https://schema.org/EUEnergyEfficiencyCategoryC
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
     const EUEnergyEfficiencyCategoryC = 'https://schema.org/EUEnergyEfficiencyCategoryC';

    /**
     * Represents EU Energy Efficiency Class D as defined in EU energy labeling
     * regulations.
     *
     * @see https://schema.org/EUEnergyEfficiencyCategoryD
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
     const EUEnergyEfficiencyCategoryD = 'https://schema.org/EUEnergyEfficiencyCategoryD';

    /**
     * Represents EU Energy Efficiency Class E as defined in EU energy labeling
     * regulations.
     *
     * @see https://schema.org/EUEnergyEfficiencyCategoryE
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
     const EUEnergyEfficiencyCategoryE = 'https://schema.org/EUEnergyEfficiencyCategoryE';

    /**
     * Represents EU Energy Efficiency Class F as defined in EU energy labeling
     * regulations.
     *
     * @see https://schema.org/EUEnergyEfficiencyCategoryF
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
     const EUEnergyEfficiencyCategoryF = 'https://schema.org/EUEnergyEfficiencyCategoryF';

    /**
     * Represents EU Energy Efficiency Class G as defined in EU energy labeling
     * regulations.
     *
     * @see https://schema.org/EUEnergyEfficiencyCategoryG
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
     const EUEnergyEfficiencyCategoryG = 'https://schema.org/EUEnergyEfficiencyCategoryG';

    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in.
     * Typically the value is a URI-identified RDF class, and in this case
     * corresponds to the
     *     use of rdf:type in RDF. Text values can be used sparingly, for cases
     * where useful information can be added without their being an appropriate
     * schema to reference. In the case of text values, the class label should
     * follow the schema.org [style
     * guide](https://schema.org/docs/styleguide.html).
     *
     * @param string|string[] $additionalType
     *
     * @return static
     *
     * @see https://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * An alias for the item.
     *
     * @param string|string[] $alternateName
     *
     * @return static
     *
     * @see https://schema.org/alternateName
     */
    public function alternateName($alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * A description of the item.
     *
     * @param \Municipio\Schema\Contracts\TextObjectContract|\Municipio\Schema\Contracts\TextObjectContract[]|string|string[] $description
     *
     * @return static
     *
     * @see https://schema.org/description
     */
    public function description($description)
    {
        return $this->setProperty('description', $description);
    }

    /**
     * A sub property of description. A short description of the item used to
     * disambiguate from other, similar items. Information from other properties
     * (in particular, name) may be necessary for the description to be useful
     * for disambiguation.
     *
     * @param string|string[] $disambiguatingDescription
     *
     * @return static
     *
     * @see https://schema.org/disambiguatingDescription
     */
    public function disambiguatingDescription($disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides
     * dedicated properties for representing many of these, either as textual
     * strings or as URL (URI) links. See [background
     * notes](/docs/datamodel.html#identifierBg) for more details.
     *
     * @param \Municipio\Schema\Contracts\PropertyValueContract|\Municipio\Schema\Contracts\PropertyValueContract[]|string|string[] $identifier
     *
     * @return static
     *
     * @see https://schema.org/identifier
     */
    public function identifier($identifier)
    {
        return $this->setProperty('identifier', $identifier);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @param \Municipio\Schema\Contracts\ImageObjectContract|\Municipio\Schema\Contracts\ImageObjectContract[]|string|string[] $image
     *
     * @return static
     *
     * @see https://schema.org/image
     */
    public function image($image)
    {
        return $this->setProperty('image', $image);
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main
     * entity being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @param \Municipio\Schema\Contracts\CreativeWorkContract|\Municipio\Schema\Contracts\CreativeWorkContract[]|string|string[] $mainEntityOfPage
     *
     * @return static
     *
     * @see https://schema.org/mainEntityOfPage
     */
    public function mainEntityOfPage($mainEntityOfPage)
    {
        return $this->setProperty('mainEntityOfPage', $mainEntityOfPage);
    }

    /**
     * The name of the item.
     *
     * @param string|string[] $name
     *
     * @return static
     *
     * @see https://schema.org/name
     */
    public function name($name)
    {
        return $this->setProperty('name', $name);
    }

    /**
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param \Municipio\Schema\Contracts\ActionContract|\Municipio\Schema\Contracts\ActionContract[] $potentialAction
     *
     * @return static
     *
     * @see https://schema.org/potentialAction
     */
    public function potentialAction($potentialAction)
    {
        return $this->setProperty('potentialAction', $potentialAction);
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or
     * official website.
     *
     * @param string|string[] $sameAs
     *
     * @return static
     *
     * @see https://schema.org/sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * A CreativeWork or Event about this Thing.
     *
     * @param \Municipio\Schema\Contracts\CreativeWorkContract|\Municipio\Schema\Contracts\CreativeWorkContract[]|\Municipio\Schema\Contracts\EventContract|\Municipio\Schema\Contracts\EventContract[] $subjectOf
     *
     * @return static
     *
     * @see https://schema.org/subjectOf
     * @link https://github.com/schemaorg/schemaorg/issues/1670
     */
    public function subjectOf($subjectOf)
    {
        return $this->setProperty('subjectOf', $subjectOf);
    }

    /**
     * URL of the item.
     *
     * @param string|string[] $url
     *
     * @return static
     *
     * @see https://schema.org/url
     */
    public function url($url)
    {
        return $this->setProperty('url', $url);
    }

}
