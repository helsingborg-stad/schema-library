<?php

namespace Municipio\Schema;

use \Municipio\Schema\Contracts\RadiationTherapyContract;
use \Municipio\Schema\Contracts\MedicalEntityContract;
use \Municipio\Schema\Contracts\MedicalProcedureContract;
use \Municipio\Schema\Contracts\MedicalTherapyContract;
use \Municipio\Schema\Contracts\TherapeuticProcedureContract;
use \Municipio\Schema\Contracts\ThingContract;

/**
 * A process of care using radiation aimed at improving a health condition.
 *
 * @see https://schema.org/RadiationTherapy
 * @see https://health-lifesci.schema.org
 *
 */
class RadiationTherapy extends BaseType implements RadiationTherapyContract, MedicalEntityContract, MedicalProcedureContract, MedicalTherapyContract, TherapeuticProcedureContract, ThingContract
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
     * A possible complication and/or side effect of this therapy. If it is
     * known that an adverse outcome is serious (resulting in death, disability,
     * or permanent damage; requiring hospitalization; or otherwise
     * life-threatening or requiring immediate medical attention), tag it as a
     * seriousAdverseOutcome instead.
     *
     * @param \Municipio\Schema\Contracts\MedicalEntityContract|\Municipio\Schema\Contracts\MedicalEntityContract[] $adverseOutcome
     *
     * @return static
     *
     * @see https://schema.org/adverseOutcome
     * @see https://health-lifesci.schema.org
     */
    public function adverseOutcome($adverseOutcome)
    {
        return $this->setProperty('adverseOutcome', $adverseOutcome);
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
     * A contraindication for this therapy.
     *
     * @param \Municipio\Schema\Contracts\MedicalContraindicationContract|\Municipio\Schema\Contracts\MedicalContraindicationContract[]|string|string[] $contraindication
     *
     * @return static
     *
     * @see https://schema.org/contraindication
     * @see https://health-lifesci.schema.org
     */
    public function contraindication($contraindication)
    {
        return $this->setProperty('contraindication', $contraindication);
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
     * A dosing schedule for the drug for a given population, either observed,
     * recommended, or maximum dose based on the type used.
     *
     * @param \Municipio\Schema\Contracts\DoseScheduleContract|\Municipio\Schema\Contracts\DoseScheduleContract[] $doseSchedule
     *
     * @return static
     *
     * @see https://schema.org/doseSchedule
     * @see https://health-lifesci.schema.org
     */
    public function doseSchedule($doseSchedule)
    {
        return $this->setProperty('doseSchedule', $doseSchedule);
    }

    /**
     * Specifying a drug or medicine used in a medication procedure.
     *
     * @param \Municipio\Schema\Contracts\DrugContract|\Municipio\Schema\Contracts\DrugContract[] $drug
     *
     * @return static
     *
     * @see https://schema.org/drug
     * @see https://health-lifesci.schema.org
     */
    public function drug($drug)
    {
        return $this->setProperty('drug', $drug);
    }

    /**
     * A therapy that duplicates or overlaps this one.
     *
     * @param \Municipio\Schema\Contracts\MedicalTherapyContract|\Municipio\Schema\Contracts\MedicalTherapyContract[] $duplicateTherapy
     *
     * @return static
     *
     * @see https://schema.org/duplicateTherapy
     * @see https://health-lifesci.schema.org
     */
    public function duplicateTherapy($duplicateTherapy)
    {
        return $this->setProperty('duplicateTherapy', $duplicateTherapy);
    }

    /**
     * Typical or recommended followup care after the procedure is performed.
     *
     * @param string|string[] $followup
     *
     * @return static
     *
     * @see https://schema.org/followup
     * @see https://health-lifesci.schema.org
     */
    public function followup($followup)
    {
        return $this->setProperty('followup', $followup);
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
     * How the procedure is performed.
     *
     * @param string|string[] $howPerformed
     *
     * @return static
     *
     * @see https://schema.org/howPerformed
     * @see https://health-lifesci.schema.org
     */
    public function howPerformed($howPerformed)
    {
        return $this->setProperty('howPerformed', $howPerformed);
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
     * Typical preparation that a patient must undergo before having the
     * procedure performed.
     *
     * @param \Municipio\Schema\Contracts\MedicalEntityContract|\Municipio\Schema\Contracts\MedicalEntityContract[]|string|string[] $preparation
     *
     * @return static
     *
     * @see https://schema.org/preparation
     * @see https://health-lifesci.schema.org
     */
    public function preparation($preparation)
    {
        return $this->setProperty('preparation', $preparation);
    }

    /**
     * The type of procedure, for example Surgical, Noninvasive, or
     * Percutaneous.
     *
     * @param \Municipio\Schema\Contracts\MedicalProcedureTypeContract|\Municipio\Schema\Contracts\MedicalProcedureTypeContract[] $procedureType
     *
     * @return static
     *
     * @see https://schema.org/procedureType
     * @see https://health-lifesci.schema.org
     */
    public function procedureType($procedureType)
    {
        return $this->setProperty('procedureType', $procedureType);
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
     * A possible serious complication and/or serious side effect of this
     * therapy. Serious adverse outcomes include those that are
     * life-threatening; result in death, disability, or permanent damage;
     * require hospitalization or prolong existing hospitalization; cause
     * congenital anomalies or birth defects; or jeopardize the patient and may
     * require medical or surgical intervention to prevent one of the outcomes
     * in this definition.
     *
     * @param \Municipio\Schema\Contracts\MedicalEntityContract|\Municipio\Schema\Contracts\MedicalEntityContract[] $seriousAdverseOutcome
     *
     * @return static
     *
     * @see https://schema.org/seriousAdverseOutcome
     * @see https://health-lifesci.schema.org
     */
    public function seriousAdverseOutcome($seriousAdverseOutcome)
    {
        return $this->setProperty('seriousAdverseOutcome', $seriousAdverseOutcome);
    }

    /**
     * The status of the study (enumerated).
     *
     * @param \Municipio\Schema\Contracts\EventStatusTypeContract|\Municipio\Schema\Contracts\EventStatusTypeContract[]|\Municipio\Schema\Contracts\MedicalStudyStatusContract|\Municipio\Schema\Contracts\MedicalStudyStatusContract[]|string|string[] $status
     *
     * @return static
     *
     * @see https://schema.org/status
     * @see https://health-lifesci.schema.org
     */
    public function status($status)
    {
        return $this->setProperty('status', $status);
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
