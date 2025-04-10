<?php

namespace Municipio\Schema;

use \Municipio\Schema\Contracts\LocationFeatureSpecificationContract;
use \Municipio\Schema\Contracts\IntangibleContract;
use \Municipio\Schema\Contracts\PropertyValueContract;
use \Municipio\Schema\Contracts\StructuredValueContract;
use \Municipio\Schema\Contracts\ThingContract;

/**
 * Specifies a location feature by providing a structured value representing a
 * feature of an accommodation as a property-value pair of varying degrees of
 * formality.
 *
 * @see https://schema.org/LocationFeatureSpecification
 *
 */
class LocationFeatureSpecification extends BaseType implements LocationFeatureSpecificationContract, IntangibleContract, PropertyValueContract, StructuredValueContract, ThingContract
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
     * The hours during which this service or contact is available.
     *
     * @param \Municipio\Schema\Contracts\OpeningHoursSpecificationContract|\Municipio\Schema\Contracts\OpeningHoursSpecificationContract[] $hoursAvailable
     *
     * @return static
     *
     * @see https://schema.org/hoursAvailable
     */
    public function hoursAvailable($hoursAvailable)
    {
        return $this->setProperty('hoursAvailable', $hoursAvailable);
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
     * A commonly used identifier for the characteristic represented by the
     * property, e.g. a manufacturer or a standard code for a property.
     * propertyID can be
     * (1) a prefixed string, mainly meant to be used with standards for product
     * properties; (2) a site-specific, non-prefixed string (e.g. the primary
     * key of the property or the vendor-specific ID of the property), or (3)
     * a URL indicating the type of the property, either pointing to an external
     * vocabulary, or a Web resource that describes the property (e.g. a
     * glossary entry).
     * Standards bodies should promote a standard prefix for the identifiers of
     * properties from their standards.
     *
     * @param string|string[] $propertyID
     *
     * @return static
     *
     * @see https://schema.org/propertyID
     */
    public function propertyID($propertyID)
    {
        return $this->setProperty('propertyID', $propertyID);
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
     * The date when the item becomes valid.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $validFrom
     *
     * @return static
     *
     * @see https://schema.org/validFrom
     */
    public function validFrom($validFrom)
    {
        return $this->setProperty('validFrom', $validFrom);
    }

    /**
     * The date after when the item is not valid. For example the end of an
     * offer, salary period, or a period of opening hours.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $validThrough
     *
     * @return static
     *
     * @see https://schema.org/validThrough
     */
    public function validThrough($validThrough)
    {
        return $this->setProperty('validThrough', $validThrough);
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

}
