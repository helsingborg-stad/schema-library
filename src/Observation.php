<?php

namespace Municipio\Schema;

use \Municipio\Schema\Contracts\ObservationContract;
use \Municipio\Schema\Contracts\IntangibleContract;
use \Municipio\Schema\Contracts\QuantitativeValueContract;
use \Municipio\Schema\Contracts\StructuredValueContract;
use \Municipio\Schema\Contracts\ThingContract;

/**
 * Instances of the class [[Observation]] are used to specify observations about
 * an entity at a particular time. The principal properties of an
 * [[Observation]] are [[observationAbout]], [[measuredProperty]], [[statType]],
 * [[value] and [[observationDate]]  and [[measuredProperty]]. Some but not all
 * Observations represent a [[QuantitativeValue]]. Quantitative observations can
 * be about a [[StatisticalVariable]], which is an abstract specification about
 * which we can make observations that are grounded at a particular location and
 * time.
 * 
 * Observations can also encode a subset of simple RDF-like statements (its
 * observationAbout, a StatisticalVariable, defining the measuredPoperty; its
 * observationAbout property indicating the entity the statement is about, and
 * [[value]] )
 * 
 * In the context of a quantitative knowledge graph, typical properties could
 * include [[measuredProperty]], [[observationAbout]], [[observationDate]],
 * [[value]], [[unitCode]], [[unitText]], [[measurementMethod]].
 *
 * @see https://schema.org/Observation
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2291
 *
 */
class Observation extends BaseType implements ObservationContract, IntangibleContract, QuantitativeValueContract, StructuredValueContract, ThingContract
{
    /**
     * A property-value pair representing an additional characteristic of the
     * entity, e.g. a product feature or another characteristic for which there
     * is no matching property in schema.org.
     * 
     * Note: Publishers should be aware that applications designed to use
     * specific schema.org properties (e.g. https://schema.org/width,
     * https://schema.org/color, https://schema.org/gtin13, ...) will typically
     * expect such data to be provided using those properties, rather than using
     * the generic property/value mechanism.
     *
     * @param \Municipio\Schema\Contracts\PropertyValueContract|\Municipio\Schema\Contracts\PropertyValueContract[] $additionalProperty
     *
     * @return static
     *
     * @see https://schema.org/additionalProperty
     */
    public function additionalProperty($additionalProperty)
    {
        return $this->setProperty('additionalProperty', $additionalProperty);
    }

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
     * A [[marginOfError]] for an [[Observation]].
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $marginOfError
     *
     * @return static
     *
     * @see https://schema.org/marginOfError
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2291
     */
    public function marginOfError($marginOfError)
    {
        return $this->setProperty('marginOfError', $marginOfError);
    }

    /**
     * The upper value of some characteristic or property.
     *
     * @param float|float[]|int|int[] $maxValue
     *
     * @return static
     *
     * @see https://schema.org/maxValue
     */
    public function maxValue($maxValue)
    {
        return $this->setProperty('maxValue', $maxValue);
    }

    /**
     * The measuredProperty of an [[Observation]], typically via its
     * [[StatisticalVariable]]. There are various kinds of applicable
     * [[Property]]: a schema.org property, a property from other RDF-compatible
     * systems, e.g. W3C RDF Data Cube, Data Commons, Wikidata, or schema.org
     * extensions such as [GS1's](https://www.gs1.org/voc/?show=properties).
     *
     * @param \Municipio\Schema\Contracts\PropertyContract|\Municipio\Schema\Contracts\PropertyContract[] $measuredProperty
     *
     * @return static
     *
     * @see https://schema.org/measuredProperty
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2291
     */
    public function measuredProperty($measuredProperty)
    {
        return $this->setProperty('measuredProperty', $measuredProperty);
    }

    /**
     * Identifies the denominator variable when an observation represents a
     * ratio or percentage.
     *
     * @param \Municipio\Schema\Contracts\StatisticalVariableContract|\Municipio\Schema\Contracts\StatisticalVariableContract[] $measurementDenominator
     *
     * @return static
     *
     * @see https://schema.org/measurementDenominator
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2564
     */
    public function measurementDenominator($measurementDenominator)
    {
        return $this->setProperty('measurementDenominator', $measurementDenominator);
    }

    /**
     * A subproperty of [[measurementTechnique]] that can be used for specifying
     * specific methods, in particular via [[MeasurementMethodEnum]].
     *
     * @param \Municipio\Schema\Contracts\DefinedTermContract|\Municipio\Schema\Contracts\DefinedTermContract[]|\Municipio\Schema\Contracts\MeasurementMethodEnumContract|\Municipio\Schema\Contracts\MeasurementMethodEnumContract[]|string|string[] $measurementMethod
     *
     * @return static
     *
     * @see https://schema.org/measurementMethod
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1425
     */
    public function measurementMethod($measurementMethod)
    {
        return $this->setProperty('measurementMethod', $measurementMethod);
    }

    /**
     * Provides additional qualification to an observation. For example, a GDP
     * observation measures the Nominal value.
     *
     * @param \Municipio\Schema\Contracts\EnumerationContract|\Municipio\Schema\Contracts\EnumerationContract[] $measurementQualifier
     *
     * @return static
     *
     * @see https://schema.org/measurementQualifier
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2564
     */
    public function measurementQualifier($measurementQualifier)
    {
        return $this->setProperty('measurementQualifier', $measurementQualifier);
    }

    /**
     * A technique, method or technology used in an [[Observation]],
     * [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]],
     * [[DataCatalog]]), corresponding to the method used for measuring the
     * corresponding variable(s) (for datasets, described using
     * [[variableMeasured]]; for [[Observation]], a [[StatisticalVariable]]).
     * Often but not necessarily each [[variableMeasured]] will have an explicit
     * representation as (or mapping to) an property such as those defined in
     * Schema.org, or other RDF vocabularies and "knowledge graphs". In that
     * case the subproperty of [[variableMeasured]] called [[measuredProperty]]
     * is applicable.
     *     
     * The [[measurementTechnique]] property helps when extra clarification is
     * needed about how a [[measuredProperty]] was measured. This is oriented
     * towards scientific and scholarly dataset publication but may have broader
     * applicability; it is not intended as a full representation of
     * measurement, but can often serve as a high level summary for dataset
     * discovery. 
     * 
     * For example, if [[variableMeasured]] is: molecule concentration,
     * [[measurementTechnique]] could be: "mass spectrometry" or "nmr
     * spectroscopy" or "colorimetry" or "immunofluorescence". If the
     * [[variableMeasured]] is "depression rating", the [[measurementTechnique]]
     * could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory". 
     * 
     * If there are several [[variableMeasured]] properties recorded for some
     * given data object, use a [[PropertyValue]] for each [[variableMeasured]]
     * and attach the corresponding [[measurementTechnique]]. The value can also
     * be from an enumeration, organized as a [[MeasurementMetholdEnumeration]].
     *
     * @param \Municipio\Schema\Contracts\DefinedTermContract|\Municipio\Schema\Contracts\DefinedTermContract[]|\Municipio\Schema\Contracts\MeasurementMethodEnumContract|\Municipio\Schema\Contracts\MeasurementMethodEnumContract[]|string|string[] $measurementTechnique
     *
     * @return static
     *
     * @see https://schema.org/measurementTechnique
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1425
     */
    public function measurementTechnique($measurementTechnique)
    {
        return $this->setProperty('measurementTechnique', $measurementTechnique);
    }

    /**
     * The lower value of some characteristic or property.
     *
     * @param float|float[]|int|int[] $minValue
     *
     * @return static
     *
     * @see https://schema.org/minValue
     */
    public function minValue($minValue)
    {
        return $this->setProperty('minValue', $minValue);
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
     * The [[observationAbout]] property identifies an entity, often a
     * [[Place]], associated with an [[Observation]].
     *
     * @param \Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[]|\Municipio\Schema\Contracts\ThingContract|\Municipio\Schema\Contracts\ThingContract[] $observationAbout
     *
     * @return static
     *
     * @see https://schema.org/observationAbout
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2291
     */
    public function observationAbout($observationAbout)
    {
        return $this->setProperty('observationAbout', $observationAbout);
    }

    /**
     * The observationDate of an [[Observation]].
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $observationDate
     *
     * @return static
     *
     * @see https://schema.org/observationDate
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2291
     */
    public function observationDate($observationDate)
    {
        return $this->setProperty('observationDate', $observationDate);
    }

    /**
     * The length of time an Observation took place over. The format follows
     * `P[0-9]*[Y|M|D|h|m|s]`. For example, P1Y is Period 1 Year, P3M is Period
     * 3 Months, P3h is Period 3 hours.
     *
     * @param string|string[] $observationPeriod
     *
     * @return static
     *
     * @see https://schema.org/observationPeriod
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2564
     */
    public function observationPeriod($observationPeriod)
    {
        return $this->setProperty('observationPeriod', $observationPeriod);
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
     * The unit of measurement given using the UN/CEFACT Common Code (3
     * characters) or a URL. Other codes than the UN/CEFACT Common Code may be
     * used with a prefix followed by a colon.
     *
     * @param string|string[] $unitCode
     *
     * @return static
     *
     * @see https://schema.org/unitCode
     */
    public function unitCode($unitCode)
    {
        return $this->setProperty('unitCode', $unitCode);
    }

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot
     * provide a standard unit code for
     * <a href='unitCode'>unitCode</a>.
     *
     * @param string|string[] $unitText
     *
     * @return static
     *
     * @see https://schema.org/unitText
     */
    public function unitText($unitText)
    {
        return $this->setProperty('unitText', $unitText);
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
     * The value of a [[QuantitativeValue]] (including [[Observation]]) or
     * property value node.
     * 
     * * For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type
     * for values is 'Number'.
     * * For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or
     * 'StructuredValue'.
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
     * decimal point. Avoid using these symbols as a readability separator.
     *
     * @param \Municipio\Schema\Contracts\StructuredValueContract|\Municipio\Schema\Contracts\StructuredValueContract[]|bool|bool[]|float|float[]|int|int[]|string|string[] $value
     *
     * @return static
     *
     * @see https://schema.org/value
     */
    public function value($value)
    {
        return $this->setProperty('value', $value);
    }

    /**
     * A secondary value that provides additional information on the original
     * value, e.g. a reference temperature or a type of measurement.
     *
     * @param \Municipio\Schema\Contracts\DefinedTermContract|\Municipio\Schema\Contracts\DefinedTermContract[]|\Municipio\Schema\Contracts\EnumerationContract|\Municipio\Schema\Contracts\EnumerationContract[]|\Municipio\Schema\Contracts\MeasurementTypeEnumerationContract|\Municipio\Schema\Contracts\MeasurementTypeEnumerationContract[]|\Municipio\Schema\Contracts\PropertyValueContract|\Municipio\Schema\Contracts\PropertyValueContract[]|\Municipio\Schema\Contracts\QualitativeValueContract|\Municipio\Schema\Contracts\QualitativeValueContract[]|\Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[]|\Municipio\Schema\Contracts\StructuredValueContract|\Municipio\Schema\Contracts\StructuredValueContract[]|string|string[] $valueReference
     *
     * @return static
     *
     * @see https://schema.org/valueReference
     */
    public function valueReference($valueReference)
    {
        return $this->setProperty('valueReference', $valueReference);
    }

    /**
     * The variableMeasured property can indicate (repeated as necessary) the 
     * variables that are measured in some dataset, either described as text or
     * as pairs of identifier and description using PropertyValue, or more
     * explicitly as a [[StatisticalVariable]].
     *
     * @param \Municipio\Schema\Contracts\PropertyContract|\Municipio\Schema\Contracts\PropertyValueContract|\Municipio\Schema\Contracts\PropertyValueContract[]|\Municipio\Schema\Contracts\PropertyContract[]|\Municipio\Schema\Contracts\StatisticalVariableContract|\Municipio\Schema\Contracts\StatisticalVariableContract[]|string|string[] $variableMeasured
     *
     * @return static
     *
     * @see https://schema.org/variableMeasured
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1083
     */
    public function variableMeasured($variableMeasured)
    {
        return $this->setProperty('variableMeasured', $variableMeasured);
    }

}
