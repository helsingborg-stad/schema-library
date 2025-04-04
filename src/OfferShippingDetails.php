<?php

namespace Municipio\Schema;

use \Municipio\Schema\Contracts\OfferShippingDetailsContract;
use \Municipio\Schema\Contracts\IntangibleContract;
use \Municipio\Schema\Contracts\StructuredValueContract;
use \Municipio\Schema\Contracts\ThingContract;

/**
 * OfferShippingDetails represents information about shipping destinations.
 * 
 * Multiple of these entities can be used to represent different shipping rates
 * for different destinations:
 * 
 * One entity for Alaska/Hawaii. A different one for continental US. A different
 * one for all France.
 * 
 * Multiple of these entities can be used to represent different shipping costs
 * and delivery times.
 * 
 * Two entities that are identical but differ in rate and time:
 * 
 * E.g. Cheaper and slower: $5 in 5-7 days
 * or Fast and expensive: $15 in 1-2 days.
 *
 * @see https://schema.org/OfferShippingDetails
 * @link https://github.com/schemaorg/schemaorg/issues/2506
 *
 */
class OfferShippingDetails extends BaseType implements OfferShippingDetailsContract, IntangibleContract, StructuredValueContract, ThingContract
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
     * The total delay between the receipt of the order and the goods reaching
     * the final customer.
     *
     * @param \Municipio\Schema\Contracts\ShippingDeliveryTimeContract|\Municipio\Schema\Contracts\ShippingDeliveryTimeContract[] $deliveryTime
     *
     * @return static
     *
     * @see https://schema.org/deliveryTime
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function deliveryTime($deliveryTime)
    {
        return $this->setProperty('deliveryTime', $deliveryTime);
    }

    /**
     * The depth of the item.
     *
     * @param \Municipio\Schema\Contracts\DistanceContract|\Municipio\Schema\Contracts\DistanceContract[]|\Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $depth
     *
     * @return static
     *
     * @see https://schema.org/depth
     */
    public function depth($depth)
    {
        return $this->setProperty('depth', $depth);
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
     * Indicates when shipping to a particular [[shippingDestination]] is not
     * available.
     *
     * @param bool|bool[] $doesNotShip
     *
     * @return static
     *
     * @see https://schema.org/doesNotShip
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function doesNotShip($doesNotShip)
    {
        return $this->setProperty('doesNotShip', $doesNotShip);
    }

    /**
     * The height of the item.
     *
     * @param \Municipio\Schema\Contracts\DistanceContract|\Municipio\Schema\Contracts\DistanceContract[]|\Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $height
     *
     * @return static
     *
     * @see https://schema.org/height
     */
    public function height($height)
    {
        return $this->setProperty('height', $height);
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
     * indicates (possibly multiple) shipping destinations. These can be defined
     * in several ways, e.g. postalCode ranges.
     *
     * @param \Municipio\Schema\Contracts\DefinedRegionContract|\Municipio\Schema\Contracts\DefinedRegionContract[] $shippingDestination
     *
     * @return static
     *
     * @see https://schema.org/shippingDestination
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function shippingDestination($shippingDestination)
    {
        return $this->setProperty('shippingDestination', $shippingDestination);
    }

    /**
     * Label to match an [[OfferShippingDetails]] with a
     * [[ShippingRateSettings]] (within the context of a
     * [[shippingSettingsLink]] cross-reference).
     *
     * @param string|string[] $shippingLabel
     *
     * @return static
     *
     * @see https://schema.org/shippingLabel
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function shippingLabel($shippingLabel)
    {
        return $this->setProperty('shippingLabel', $shippingLabel);
    }

    /**
     * Indicates the origin of a shipment, i.e. where it should be coming from.
     *
     * @param \Municipio\Schema\Contracts\DefinedRegionContract|\Municipio\Schema\Contracts\DefinedRegionContract[] $shippingOrigin
     *
     * @return static
     *
     * @see https://schema.org/shippingOrigin
     * @link https://github.com/schemaorg/schemaorg/issues/3122
     */
    public function shippingOrigin($shippingOrigin)
    {
        return $this->setProperty('shippingOrigin', $shippingOrigin);
    }

    /**
     * The shipping rate is the cost of shipping to the specified destination.
     * Typically, the maxValue and currency values (of the [[MonetaryAmount]])
     * are most appropriate.
     *
     * @param \Municipio\Schema\Contracts\MonetaryAmountContract|\Municipio\Schema\Contracts\MonetaryAmountContract[] $shippingRate
     *
     * @return static
     *
     * @see https://schema.org/shippingRate
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function shippingRate($shippingRate)
    {
        return $this->setProperty('shippingRate', $shippingRate);
    }

    /**
     * Link to a page containing [[ShippingRateSettings]] and
     * [[DeliveryTimeSettings]] details.
     *
     * @param string|string[] $shippingSettingsLink
     *
     * @return static
     *
     * @see https://schema.org/shippingSettingsLink
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function shippingSettingsLink($shippingSettingsLink)
    {
        return $this->setProperty('shippingSettingsLink', $shippingSettingsLink);
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
     * Label to match an [[OfferShippingDetails]] with a
     * [[DeliveryTimeSettings]] (within the context of a
     * [[shippingSettingsLink]] cross-reference).
     *
     * @param string|string[] $transitTimeLabel
     *
     * @return static
     *
     * @see https://schema.org/transitTimeLabel
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function transitTimeLabel($transitTimeLabel)
    {
        return $this->setProperty('transitTimeLabel', $transitTimeLabel);
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
     * The membership program tier an Offer (or a PriceSpecification,
     * OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid
     * for.
     *
     * @param \Municipio\Schema\Contracts\MemberProgramTierContract|\Municipio\Schema\Contracts\MemberProgramTierContract[] $validForMemberTier
     *
     * @return static
     *
     * @see https://schema.org/validForMemberTier
     * @link https://github.com/schemaorg/schemaorg/issues/3563
     */
    public function validForMemberTier($validForMemberTier)
    {
        return $this->setProperty('validForMemberTier', $validForMemberTier);
    }

    /**
     * The weight of the product or person.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $weight
     *
     * @return static
     *
     * @see https://schema.org/weight
     */
    public function weight($weight)
    {
        return $this->setProperty('weight', $weight);
    }

    /**
     * The width of the item.
     *
     * @param \Municipio\Schema\Contracts\DistanceContract|\Municipio\Schema\Contracts\DistanceContract[]|\Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $width
     *
     * @return static
     *
     * @see https://schema.org/width
     */
    public function width($width)
    {
        return $this->setProperty('width', $width);
    }

}
