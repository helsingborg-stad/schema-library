<?php

namespace Municipio\Schema;

use \Municipio\Schema\Contracts\RepaymentSpecificationContract;
use \Municipio\Schema\Contracts\IntangibleContract;
use \Municipio\Schema\Contracts\StructuredValueContract;
use \Municipio\Schema\Contracts\ThingContract;

/**
 * A structured value representing repayment.
 *
 * @see https://schema.org/RepaymentSpecification
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/1253
 *
 */
class RepaymentSpecification extends BaseType implements RepaymentSpecificationContract, IntangibleContract, StructuredValueContract, ThingContract
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
     * a type of payment made in cash during the onset of the purchase of an
     * expensive good/service. The payment typically represents only a
     * percentage of the full purchase price.
     *
     * @param \Municipio\Schema\Contracts\MonetaryAmountContract|\Municipio\Schema\Contracts\MonetaryAmountContract[]|float|float[]|int|int[] $downPayment
     *
     * @return static
     *
     * @see https://schema.org/downPayment
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1253
     */
    public function downPayment($downPayment)
    {
        return $this->setProperty('downPayment', $downPayment);
    }

    /**
     * The amount to be paid as a penalty in the event of early payment of the
     * loan.
     *
     * @param \Municipio\Schema\Contracts\MonetaryAmountContract|\Municipio\Schema\Contracts\MonetaryAmountContract[] $earlyPrepaymentPenalty
     *
     * @return static
     *
     * @see https://schema.org/earlyPrepaymentPenalty
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1253
     */
    public function earlyPrepaymentPenalty($earlyPrepaymentPenalty)
    {
        return $this->setProperty('earlyPrepaymentPenalty', $earlyPrepaymentPenalty);
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
     * The amount of money to pay in a single payment.
     *
     * @param \Municipio\Schema\Contracts\MonetaryAmountContract|\Municipio\Schema\Contracts\MonetaryAmountContract[] $loanPaymentAmount
     *
     * @return static
     *
     * @see https://schema.org/loanPaymentAmount
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1253
     */
    public function loanPaymentAmount($loanPaymentAmount)
    {
        return $this->setProperty('loanPaymentAmount', $loanPaymentAmount);
    }

    /**
     * Frequency of payments due, i.e. number of months between payments. This
     * is defined as a frequency, i.e. the reciprocal of a period of time.
     *
     * @param float|float[]|int|int[] $loanPaymentFrequency
     *
     * @return static
     *
     * @see https://schema.org/loanPaymentFrequency
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1253
     */
    public function loanPaymentFrequency($loanPaymentFrequency)
    {
        return $this->setProperty('loanPaymentFrequency', $loanPaymentFrequency);
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
     * The number of payments contractually required at origination to repay the
     * loan. For monthly paying loans this is the number of months from the
     * contractual first payment date to the maturity date.
     *
     * @param float|float[]|int|int[] $numberOfLoanPayments
     *
     * @return static
     *
     * @see https://schema.org/numberOfLoanPayments
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1253
     */
    public function numberOfLoanPayments($numberOfLoanPayments)
    {
        return $this->setProperty('numberOfLoanPayments', $numberOfLoanPayments);
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
