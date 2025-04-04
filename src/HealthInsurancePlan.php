<?php

namespace Municipio\Schema;

use \Municipio\Schema\Contracts\HealthInsurancePlanContract;
use \Municipio\Schema\Contracts\IntangibleContract;
use \Municipio\Schema\Contracts\ThingContract;

/**
 * A US-style health insurance plan, including PPOs, EPOs, and HMOs.
 *
 * @see https://schema.org/HealthInsurancePlan
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/1062
 *
 */
class HealthInsurancePlan extends BaseType implements HealthInsurancePlanContract, IntangibleContract, ThingContract
{
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
     * The URL that goes directly to the summary of benefits and coverage for
     * the specific standard plan or plan variation.
     *
     * @param string|string[] $benefitsSummaryUrl
     *
     * @return static
     *
     * @see https://schema.org/benefitsSummaryUrl
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1062
     */
    public function benefitsSummaryUrl($benefitsSummaryUrl)
    {
        return $this->setProperty('benefitsSummaryUrl', $benefitsSummaryUrl);
    }

    /**
     * A contact point for a person or organization.
     *
     * @param \Municipio\Schema\Contracts\ContactPointContract|\Municipio\Schema\Contracts\ContactPointContract[] $contactPoint
     *
     * @return static
     *
     * @see https://schema.org/contactPoint
     */
    public function contactPoint($contactPoint)
    {
        return $this->setProperty('contactPoint', $contactPoint);
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
     * TODO.
     *
     * @param string|string[] $healthPlanDrugOption
     *
     * @return static
     *
     * @see https://schema.org/healthPlanDrugOption
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1062
     */
    public function healthPlanDrugOption($healthPlanDrugOption)
    {
        return $this->setProperty('healthPlanDrugOption', $healthPlanDrugOption);
    }

    /**
     * The tier(s) of drugs offered by this formulary or insurance plan.
     *
     * @param string|string[] $healthPlanDrugTier
     *
     * @return static
     *
     * @see https://schema.org/healthPlanDrugTier
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1062
     */
    public function healthPlanDrugTier($healthPlanDrugTier)
    {
        return $this->setProperty('healthPlanDrugTier', $healthPlanDrugTier);
    }

    /**
     * The 14-character, HIOS-generated Plan ID number. (Plan IDs must be
     * unique, even across different markets.)
     *
     * @param string|string[] $healthPlanId
     *
     * @return static
     *
     * @see https://schema.org/healthPlanId
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1062
     */
    public function healthPlanId($healthPlanId)
    {
        return $this->setProperty('healthPlanId', $healthPlanId);
    }

    /**
     * The URL that goes directly to the plan brochure for the specific standard
     * plan or plan variation.
     *
     * @param string|string[] $healthPlanMarketingUrl
     *
     * @return static
     *
     * @see https://schema.org/healthPlanMarketingUrl
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1062
     */
    public function healthPlanMarketingUrl($healthPlanMarketingUrl)
    {
        return $this->setProperty('healthPlanMarketingUrl', $healthPlanMarketingUrl);
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
     * Formularies covered by this plan.
     *
     * @param \Municipio\Schema\Contracts\HealthPlanFormularyContract|\Municipio\Schema\Contracts\HealthPlanFormularyContract[] $includesHealthPlanFormulary
     *
     * @return static
     *
     * @see https://schema.org/includesHealthPlanFormulary
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1062
     */
    public function includesHealthPlanFormulary($includesHealthPlanFormulary)
    {
        return $this->setProperty('includesHealthPlanFormulary', $includesHealthPlanFormulary);
    }

    /**
     * Networks covered by this plan.
     *
     * @param \Municipio\Schema\Contracts\HealthPlanNetworkContract|\Municipio\Schema\Contracts\HealthPlanNetworkContract[] $includesHealthPlanNetwork
     *
     * @return static
     *
     * @see https://schema.org/includesHealthPlanNetwork
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1062
     */
    public function includesHealthPlanNetwork($includesHealthPlanNetwork)
    {
        return $this->setProperty('includesHealthPlanNetwork', $includesHealthPlanNetwork);
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

    /**
     * The standard for interpreting the Plan ID. The preferred is "HIOS". See
     * the Centers for Medicare & Medicaid Services for more details.
     *
     * @param string|string[] $usesHealthPlanIdStandard
     *
     * @return static
     *
     * @see https://schema.org/usesHealthPlanIdStandard
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1062
     */
    public function usesHealthPlanIdStandard($usesHealthPlanIdStandard)
    {
        return $this->setProperty('usesHealthPlanIdStandard', $usesHealthPlanIdStandard);
    }

}
