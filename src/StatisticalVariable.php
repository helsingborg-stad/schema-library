<?php

namespace Municipio\Schema;

use \Municipio\Schema\Contracts\StatisticalVariableContract;
use \Municipio\Schema\Contracts\ConstraintNodeContract;
use \Municipio\Schema\Contracts\IntangibleContract;
use \Municipio\Schema\Contracts\ThingContract;

/**
 * [[StatisticalVariable]] represents any type of statistical metric that can be
 * measured at a place and time. The usage pattern for [[StatisticalVariable]]
 * is typically expressed using [[Observation]] with an explicit
 * [[populationType]], which is a type, typically drawn from Schema.org. Each
 * [[StatisticalVariable]] is marked as a [[ConstraintNode]], meaning that some
 * properties (those listed using [[constraintProperty]]) serve in this setting
 * solely to define the statistical variable rather than literally describe a
 * specific person, place or thing. For example, a [[StatisticalVariable]]
 * Median_Height_Person_Female representing the median height of women, could be
 * written as follows: the population type is [[Person]]; the measuredProperty
 * [[height]]; the [[statType]] [[median]]; the [[gender]] [[Female]]. It is
 * important to note that there are many kinds of scientific quantitative
 * observation which are not fully, perfectly or unambiguously described
 * following this pattern, or with solely Schema.org terminology. The approach
 * taken here is designed to allow partial, incremental or minimal description
 * of [[StatisticalVariable]]s, and the use of detailed sets of entity and
 * property IDs from external repositories. The [[measurementMethod]],
 * [[unitCode]] and [[unitText]] properties can also be used to clarify the
 * specific nature and notation of an observed measurement.
 *
 * @see https://schema.org/StatisticalVariable
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2564
 *
 * @method static populationType($populationType) The value should be instance of pending types Class|Class[]
 */
class StatisticalVariable extends BaseType implements StatisticalVariableContract, ConstraintNodeContract, IntangibleContract, ThingContract
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
     * Indicates a property used as a constraint. For example, in the definition
     * of a [[StatisticalVariable]]. The value is a property, either from within
     * Schema.org or from other compatible (e.g. RDF) systems such as
     * DataCommons.org or Wikidata.org.
     *
     * @param \Municipio\Schema\Contracts\PropertyContract|\Municipio\Schema\Contracts\PropertyContract[]|string|string[] $constraintProperty
     *
     * @return static
     *
     * @see https://schema.org/constraintProperty
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2291
     */
    public function constraintProperty($constraintProperty)
    {
        return $this->setProperty('constraintProperty', $constraintProperty);
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
     * Indicates the number of constraints property values defined for a
     * particular [[ConstraintNode]] such as [[StatisticalVariable]]. This helps
     * applications understand if they have access to a sufficiently complete
     * description of a [[StatisticalVariable]] or other construct that is
     * defined using properties on template-style nodes.
     *
     * @param int|int[] $numConstraints
     *
     * @return static
     *
     * @see https://schema.org/numConstraints
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2291
     */
    public function numConstraints($numConstraints)
    {
        return $this->setProperty('numConstraints', $numConstraints);
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
     * Indicates the kind of statistic represented by a [[StatisticalVariable]],
     * e.g. mean, count etc. The value of statType is a property, either from
     * within Schema.org (e.g. [[median]], [[marginOfError]], [[maxValue]],
     * [[minValue]]) or from other compatible (e.g. RDF) systems such as
     * DataCommons.org or Wikidata.org.
     *
     * @param \Municipio\Schema\Contracts\PropertyContract|\Municipio\Schema\Contracts\PropertyContract[]|string|string[] $statType
     *
     * @return static
     *
     * @see https://schema.org/statType
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2564
     */
    public function statType($statType)
    {
        return $this->setProperty('statType', $statType);
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
