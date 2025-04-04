<?php

namespace Municipio\Schema;

use \Municipio\Schema\Contracts\EducationalOccupationalProgramContract;
use \Municipio\Schema\Contracts\IntangibleContract;
use \Municipio\Schema\Contracts\ThingContract;

/**
 * A program offered by an institution which determines the learning progress to
 * achieve an outcome, usually a credential like a degree or certificate. This
 * would define a discrete set of opportunities (e.g., job, courses) that
 * together constitute a program with a clear start, end, set of requirements,
 * and transition to a new occupational opportunity (e.g., a job), or sometimes
 * a higher educational opportunity (e.g., an advanced degree).
 *
 * @see https://schema.org/EducationalOccupationalProgram
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2289
 *
 */
class EducationalOccupationalProgram extends BaseType implements EducationalOccupationalProgramContract, IntangibleContract, ThingContract
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
     * The date on which the program stops collecting applications for the next
     * enrollment cycle. Flexible application deadlines (for example, a program
     * with rolling admissions) can be described in a textual string, rather
     * than as a DateTime.
     *
     * @param \DateTimeInterface|\DateTimeInterface[]|string|string[] $applicationDeadline
     *
     * @return static
     *
     * @see https://schema.org/applicationDeadline
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2419
     */
    public function applicationDeadline($applicationDeadline)
    {
        return $this->setProperty('applicationDeadline', $applicationDeadline);
    }

    /**
     * The date at which the program begins collecting applications for the next
     * enrollment cycle.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $applicationStartDate
     *
     * @return static
     *
     * @see https://schema.org/applicationStartDate
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2419
     */
    public function applicationStartDate($applicationStartDate)
    {
        return $this->setProperty('applicationStartDate', $applicationStartDate);
    }

    /**
     * The day of the week for which these opening hours are valid.
     *
     * @param \Municipio\Schema\Contracts\DayOfWeekContract|\Municipio\Schema\Contracts\DayOfWeekContract[] $dayOfWeek
     *
     * @return static
     *
     * @see https://schema.org/dayOfWeek
     */
    public function dayOfWeek($dayOfWeek)
    {
        return $this->setProperty('dayOfWeek', $dayOfWeek);
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
     * A description of the qualification, award, certificate, diploma or other
     * educational credential awarded as a consequence of successful completion
     * of this course or program.
     *
     * @param \Municipio\Schema\Contracts\EducationalOccupationalCredentialContract|\Municipio\Schema\Contracts\EducationalOccupationalCredentialContract[]|string|string[] $educationalCredentialAwarded
     *
     * @return static
     *
     * @see https://schema.org/educationalCredentialAwarded
     * @link https://github.com/schemaorg/schemaorg/issues/2289
     */
    public function educationalCredentialAwarded($educationalCredentialAwarded)
    {
        return $this->setProperty('educationalCredentialAwarded', $educationalCredentialAwarded);
    }

    /**
     * Similar to courseMode, the medium or means of delivery of the program as
     * a whole. The value may either be a text label (e.g. "online", "onsite" or
     * "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time")
     * or a URL reference to a term from a controlled vocabulary (e.g.
     * https://ceds.ed.gov/element/001311#Asynchronous ).
     *
     * @param string|string[] $educationalProgramMode
     *
     * @return static
     *
     * @see https://schema.org/educationalProgramMode
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2419
     */
    public function educationalProgramMode($educationalProgramMode)
    {
        return $this->setProperty('educationalProgramMode', $educationalProgramMode);
    }

    /**
     * The end date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $endDate
     *
     * @return static
     *
     * @see https://schema.org/endDate
     * @link https://github.com/schemaorg/schemaorg/issues/2486
     */
    public function endDate($endDate)
    {
        return $this->setProperty('endDate', $endDate);
    }

    /**
     * A financial aid type or program which students may use to pay for tuition
     * or fees associated with the program.
     *
     * @param \Municipio\Schema\Contracts\DefinedTermContract|\Municipio\Schema\Contracts\DefinedTermContract[]|string|string[] $financialAidEligible
     *
     * @return static
     *
     * @see https://schema.org/financialAidEligible
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2418
     */
    public function financialAidEligible($financialAidEligible)
    {
        return $this->setProperty('financialAidEligible', $financialAidEligible);
    }

    /**
     * A course or class that is one of the learning opportunities that
     * constitute an educational / occupational program. No information is
     * implied about whether the course is mandatory or optional; no guarantee
     * is implied about whether the course will be available to everyone on the
     * program.
     *
     * @param \Municipio\Schema\Contracts\CourseContract|\Municipio\Schema\Contracts\CourseContract[] $hasCourse
     *
     * @return static
     *
     * @see https://schema.org/hasCourse
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2483
     */
    public function hasCourse($hasCourse)
    {
        return $this->setProperty('hasCourse', $hasCourse);
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
     * The maximum number of students who may be enrolled in the program.
     *
     * @param int|int[] $maximumEnrollment
     *
     * @return static
     *
     * @see https://schema.org/maximumEnrollment
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2419
     */
    public function maximumEnrollment($maximumEnrollment)
    {
        return $this->setProperty('maximumEnrollment', $maximumEnrollment);
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
     * The number of credits or units awarded by a Course or required to
     * complete an EducationalOccupationalProgram.
     *
     * @param \Municipio\Schema\Contracts\StructuredValueContract|\Municipio\Schema\Contracts\StructuredValueContract[]|int|int[] $numberOfCredits
     *
     * @return static
     *
     * @see https://schema.org/numberOfCredits
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2419
     */
    public function numberOfCredits($numberOfCredits)
    {
        return $this->setProperty('numberOfCredits', $numberOfCredits);
    }

    /**
     * A category describing the job, preferably using a term from a taxonomy
     * such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html),
     * [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or
     * similar, with the property repeated for each applicable value. Ideally
     * the taxonomy should be identified, and both the textual label and formal
     * code for the category should be provided.
     * 
     * Note: for historical reasons, any textual label and formal code provided
     * as a literal may be assumed to be from O*NET-SOC.
     *
     * @param \Municipio\Schema\Contracts\CategoryCodeContract|\Municipio\Schema\Contracts\CategoryCodeContract[]|string|string[] $occupationalCategory
     *
     * @return static
     *
     * @see https://schema.org/occupationalCategory
     * @see https://pending.schema.org
     */
    public function occupationalCategory($occupationalCategory)
    {
        return $this->setProperty('occupationalCategory', $occupationalCategory);
    }

    /**
     * A description of the qualification, award, certificate, diploma or other
     * occupational credential awarded as a consequence of successful completion
     * of this course or program.
     *
     * @param \Municipio\Schema\Contracts\EducationalOccupationalCredentialContract|\Municipio\Schema\Contracts\EducationalOccupationalCredentialContract[]|string|string[] $occupationalCredentialAwarded
     *
     * @return static
     *
     * @see https://schema.org/occupationalCredentialAwarded
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2289
     */
    public function occupationalCredentialAwarded($occupationalCredentialAwarded)
    {
        return $this->setProperty('occupationalCredentialAwarded', $occupationalCredentialAwarded);
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a
     * product, rent the DVD of a movie, perform a service, or give away tickets
     * to an event. Use [[businessFunction]] to indicate the kind of transaction
     * offered, i.e. sell, lease, etc. This property can also be used to
     * describe a [[Demand]]. While this property is listed as expected on a
     * number of common types, it can be used in others. In that case, using a
     * second type, such as Product or a subtype of Product, can clarify the
     * nature of the offer.
     *
     * @param \Municipio\Schema\Contracts\DemandContract|\Municipio\Schema\Contracts\DemandContract[]|\Municipio\Schema\Contracts\OfferContract|\Municipio\Schema\Contracts\OfferContract[] $offers
     *
     * @return static
     *
     * @see https://schema.org/offers
     * @link https://github.com/schemaorg/schemaorg/issues/2289
     */
    public function offers($offers)
    {
        return $this->setProperty('offers', $offers);
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
     * Prerequisites for enrolling in the program.
     *
     * @param \Municipio\Schema\Contracts\AlignmentObjectContract|\Municipio\Schema\Contracts\AlignmentObjectContract[]|\Municipio\Schema\Contracts\CourseContract|\Municipio\Schema\Contracts\CourseContract[]|\Municipio\Schema\Contracts\EducationalOccupationalCredentialContract|\Municipio\Schema\Contracts\EducationalOccupationalCredentialContract[]|string|string[] $programPrerequisites
     *
     * @return static
     *
     * @see https://schema.org/programPrerequisites
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2289
     */
    public function programPrerequisites($programPrerequisites)
    {
        return $this->setProperty('programPrerequisites', $programPrerequisites);
    }

    /**
     * The type of educational or occupational program. For example, classroom,
     * internship, alternance, etc.
     *
     * @param \Municipio\Schema\Contracts\DefinedTermContract|\Municipio\Schema\Contracts\DefinedTermContract[]|string|string[] $programType
     *
     * @return static
     *
     * @see https://schema.org/programType
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2460
     */
    public function programType($programType)
    {
        return $this->setProperty('programType', $programType);
    }

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @param \Municipio\Schema\Contracts\OrganizationContract|\Municipio\Schema\Contracts\OrganizationContract[]|\Municipio\Schema\Contracts\PersonContract|\Municipio\Schema\Contracts\PersonContract[] $provider
     *
     * @return static
     *
     * @see https://schema.org/provider
     * @see https://pending.schema.org
     */
    public function provider($provider)
    {
        return $this->setProperty('provider', $provider);
    }

    /**
     * The expected salary upon completing the training.
     *
     * @param \Municipio\Schema\Contracts\MonetaryAmountDistributionContract|\Municipio\Schema\Contracts\MonetaryAmountDistributionContract[] $salaryUponCompletion
     *
     * @return static
     *
     * @see https://schema.org/salaryUponCompletion
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2289
     */
    public function salaryUponCompletion($salaryUponCompletion)
    {
        return $this->setProperty('salaryUponCompletion', $salaryUponCompletion);
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
     * The start date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $startDate
     *
     * @return static
     *
     * @see https://schema.org/startDate
     * @link https://github.com/schemaorg/schemaorg/issues/2486
     */
    public function startDate($startDate)
    {
        return $this->setProperty('startDate', $startDate);
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
     * The amount of time in a term as defined by the institution. A term is a
     * length of time where students take one or more classes. Semesters and
     * quarters are common units for term.
     *
     * @param \Municipio\Schema\Contracts\DurationContract|\Municipio\Schema\Contracts\DurationContract[] $termDuration
     *
     * @return static
     *
     * @see https://schema.org/termDuration
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2419
     */
    public function termDuration($termDuration)
    {
        return $this->setProperty('termDuration', $termDuration);
    }

    /**
     * The number of times terms of study are offered per year. Semesters and
     * quarters are common units for term. For example, if the student can only
     * take 2 semesters for the program in one year, then termsPerYear should be
     * 2.
     *
     * @param float|float[]|int|int[] $termsPerYear
     *
     * @return static
     *
     * @see https://schema.org/termsPerYear
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2419
     */
    public function termsPerYear($termsPerYear)
    {
        return $this->setProperty('termsPerYear', $termsPerYear);
    }

    /**
     * The time of day the program normally runs. For example, "evenings".
     *
     * @param string|string[] $timeOfDay
     *
     * @return static
     *
     * @see https://schema.org/timeOfDay
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2419
     */
    public function timeOfDay($timeOfDay)
    {
        return $this->setProperty('timeOfDay', $timeOfDay);
    }

    /**
     * The expected length of time to complete the program if attending
     * full-time.
     *
     * @param \Municipio\Schema\Contracts\DurationContract|\Municipio\Schema\Contracts\DurationContract[] $timeToComplete
     *
     * @return static
     *
     * @see https://schema.org/timeToComplete
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2289
     */
    public function timeToComplete($timeToComplete)
    {
        return $this->setProperty('timeToComplete', $timeToComplete);
    }

    /**
     * The estimated salary earned while in the program.
     *
     * @param \Municipio\Schema\Contracts\MonetaryAmountDistributionContract|\Municipio\Schema\Contracts\MonetaryAmountDistributionContract[] $trainingSalary
     *
     * @return static
     *
     * @see https://schema.org/trainingSalary
     * @see https://pending.schema.org
     */
    public function trainingSalary($trainingSalary)
    {
        return $this->setProperty('trainingSalary', $trainingSalary);
    }

    /**
     * The number of credits or units a full-time student would be expected to
     * take in 1 term however 'term' is defined by the institution.
     *
     * @param \Municipio\Schema\Contracts\StructuredValueContract|\Municipio\Schema\Contracts\StructuredValueContract[]|int|int[] $typicalCreditsPerTerm
     *
     * @return static
     *
     * @see https://schema.org/typicalCreditsPerTerm
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2419
     */
    public function typicalCreditsPerTerm($typicalCreditsPerTerm)
    {
        return $this->setProperty('typicalCreditsPerTerm', $typicalCreditsPerTerm);
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
