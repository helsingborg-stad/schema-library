<?php

namespace Municipio\Schema;

use \Municipio\Schema\Contracts\VesselContract;
use \Municipio\Schema\Contracts\AnatomicalStructureContract;
use \Municipio\Schema\Contracts\MedicalEntityContract;
use \Municipio\Schema\Contracts\ThingContract;

/**
 * A component of the human body circulatory system comprised of an intricate
 * network of hollow tubes that transport blood throughout the entire body.
 *
 * @see https://schema.org/Vessel
 * @see https://health-lifesci.schema.org
 *
 */
class Vessel extends BaseType implements VesselContract, AnatomicalStructureContract, MedicalEntityContract, ThingContract
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
     * If applicable, a description of the pathophysiology associated with the
     * anatomical system, including potential abnormal changes in the
     * mechanical, physical, and biochemical functions of the system.
     *
     * @param string|string[] $associatedPathophysiology
     *
     * @return static
     *
     * @see https://schema.org/associatedPathophysiology
     * @see https://health-lifesci.schema.org
     */
    public function associatedPathophysiology($associatedPathophysiology)
    {
        return $this->setProperty('associatedPathophysiology', $associatedPathophysiology);
    }

    /**
     * Location in the body of the anatomical structure.
     *
     * @param string|string[] $bodyLocation
     *
     * @return static
     *
     * @see https://schema.org/bodyLocation
     * @see https://health-lifesci.schema.org
     */
    public function bodyLocation($bodyLocation)
    {
        return $this->setProperty('bodyLocation', $bodyLocation);
    }

    /**
     * A medical code for the entity, taken from a controlled vocabulary or
     * ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
     *
     * @param \Municipio\Schema\Contracts\MedicalCodeContract|\Municipio\Schema\Contracts\MedicalCodeContract[] $code
     *
     * @return static
     *
     * @see https://schema.org/code
     * @see https://health-lifesci.schema.org
     */
    public function code($code)
    {
        return $this->setProperty('code', $code);
    }

    /**
     * Other anatomical structures to which this structure is connected.
     *
     * @param \Municipio\Schema\Contracts\AnatomicalStructureContract|\Municipio\Schema\Contracts\AnatomicalStructureContract[] $connectedTo
     *
     * @return static
     *
     * @see https://schema.org/connectedTo
     * @see https://health-lifesci.schema.org
     */
    public function connectedTo($connectedTo)
    {
        return $this->setProperty('connectedTo', $connectedTo);
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
     * An image containing a diagram that illustrates the structure and/or its
     * component substructures and/or connections with other structures.
     *
     * @param \Municipio\Schema\Contracts\ImageObjectContract|\Municipio\Schema\Contracts\ImageObjectContract[] $diagram
     *
     * @return static
     *
     * @see https://schema.org/diagram
     * @see https://health-lifesci.schema.org
     */
    public function diagram($diagram)
    {
        return $this->setProperty('diagram', $diagram);
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
     * A [[Grant]] that directly or indirectly provide funding or sponsorship
     * for this item. See also [[ownershipFundingInfo]].
     *
     * @param \Municipio\Schema\Contracts\GrantContract|\Municipio\Schema\Contracts\GrantContract[] $funding
     *
     * @return static
     *
     * @see https://schema.org/funding
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/383
     */
    public function funding($funding)
    {
        return $this->setProperty('funding', $funding);
    }

    /**
     * A medical guideline related to this entity.
     *
     * @param \Municipio\Schema\Contracts\MedicalGuidelineContract|\Municipio\Schema\Contracts\MedicalGuidelineContract[] $guideline
     *
     * @return static
     *
     * @see https://schema.org/guideline
     * @see https://health-lifesci.schema.org
     */
    public function guideline($guideline)
    {
        return $this->setProperty('guideline', $guideline);
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
     * The drug or supplement's legal status, including any controlled substance
     * schedules that apply.
     *
     * @param \Municipio\Schema\Contracts\DrugLegalStatusContract|\Municipio\Schema\Contracts\DrugLegalStatusContract[]|\Municipio\Schema\Contracts\MedicalEnumerationContract|\Municipio\Schema\Contracts\MedicalEnumerationContract[]|string|string[] $legalStatus
     *
     * @return static
     *
     * @see https://schema.org/legalStatus
     * @see https://health-lifesci.schema.org
     */
    public function legalStatus($legalStatus)
    {
        return $this->setProperty('legalStatus', $legalStatus);
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
     * The system of medicine that includes this MedicalEntity, for example
     * 'evidence-based', 'homeopathic', 'chiropractic', etc.
     *
     * @param \Municipio\Schema\Contracts\MedicineSystemContract|\Municipio\Schema\Contracts\MedicineSystemContract[] $medicineSystem
     *
     * @return static
     *
     * @see https://schema.org/medicineSystem
     * @see https://health-lifesci.schema.org
     */
    public function medicineSystem($medicineSystem)
    {
        return $this->setProperty('medicineSystem', $medicineSystem);
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
     * The anatomical or organ system that this structure is part of.
     *
     * @param \Municipio\Schema\Contracts\AnatomicalSystemContract|\Municipio\Schema\Contracts\AnatomicalSystemContract[] $partOfSystem
     *
     * @return static
     *
     * @see https://schema.org/partOfSystem
     * @see https://health-lifesci.schema.org
     */
    public function partOfSystem($partOfSystem)
    {
        return $this->setProperty('partOfSystem', $partOfSystem);
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
     * If applicable, the organization that officially recognizes this entity as
     * part of its endorsed system of medicine.
     *
     * @param \Municipio\Schema\Contracts\OrganizationContract|\Municipio\Schema\Contracts\OrganizationContract[] $recognizingAuthority
     *
     * @return static
     *
     * @see https://schema.org/recognizingAuthority
     * @see https://health-lifesci.schema.org
     */
    public function recognizingAuthority($recognizingAuthority)
    {
        return $this->setProperty('recognizingAuthority', $recognizingAuthority);
    }

    /**
     * A medical condition associated with this anatomy.
     *
     * @param \Municipio\Schema\Contracts\MedicalConditionContract|\Municipio\Schema\Contracts\MedicalConditionContract[] $relatedCondition
     *
     * @return static
     *
     * @see https://schema.org/relatedCondition
     * @see https://health-lifesci.schema.org
     */
    public function relatedCondition($relatedCondition)
    {
        return $this->setProperty('relatedCondition', $relatedCondition);
    }

    /**
     * A medical therapy related to this anatomy.
     *
     * @param \Municipio\Schema\Contracts\MedicalTherapyContract|\Municipio\Schema\Contracts\MedicalTherapyContract[] $relatedTherapy
     *
     * @return static
     *
     * @see https://schema.org/relatedTherapy
     * @see https://health-lifesci.schema.org
     */
    public function relatedTherapy($relatedTherapy)
    {
        return $this->setProperty('relatedTherapy', $relatedTherapy);
    }

    /**
     * If applicable, a medical specialty in which this entity is relevant.
     *
     * @param \Municipio\Schema\Contracts\MedicalSpecialtyContract|\Municipio\Schema\Contracts\MedicalSpecialtyContract[] $relevantSpecialty
     *
     * @return static
     *
     * @see https://schema.org/relevantSpecialty
     * @see https://health-lifesci.schema.org
     */
    public function relevantSpecialty($relevantSpecialty)
    {
        return $this->setProperty('relevantSpecialty', $relevantSpecialty);
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
     * A medical study or trial related to this entity.
     *
     * @param \Municipio\Schema\Contracts\MedicalStudyContract|\Municipio\Schema\Contracts\MedicalStudyContract[] $study
     *
     * @return static
     *
     * @see https://schema.org/study
     * @see https://health-lifesci.schema.org
     */
    public function study($study)
    {
        return $this->setProperty('study', $study);
    }

    /**
     * Component (sub-)structure(s) that comprise this anatomical structure.
     *
     * @param \Municipio\Schema\Contracts\AnatomicalStructureContract|\Municipio\Schema\Contracts\AnatomicalStructureContract[] $subStructure
     *
     * @return static
     *
     * @see https://schema.org/subStructure
     * @see https://health-lifesci.schema.org
     */
    public function subStructure($subStructure)
    {
        return $this->setProperty('subStructure', $subStructure);
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
