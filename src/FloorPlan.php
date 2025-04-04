<?php

namespace Municipio\Schema;

use \Municipio\Schema\Contracts\FloorPlanContract;
use \Municipio\Schema\Contracts\IntangibleContract;
use \Municipio\Schema\Contracts\ThingContract;

/**
 * A FloorPlan is an explicit representation of a collection of similar
 * accommodations, allowing the provision of common information (room counts,
 * sizes, layout diagrams) and offers for rental or sale. In typical use, some
 * [[ApartmentComplex]] has an [[accommodationFloorPlan]] which is a
 * [[FloorPlan]].  A FloorPlan is always in the context of a particular place,
 * either a larger [[ApartmentComplex]] or a single [[Apartment]]. The
 * visual/spatial aspects of a floor plan (i.e. room layout, [see
 * wikipedia](https://en.wikipedia.org/wiki/Floor_plan)) can be indicated using
 * [[image]].
 *
 * @see https://schema.org/FloorPlan
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2373
 *
 */
class FloorPlan extends BaseType implements FloorPlanContract, IntangibleContract, ThingContract
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
     * An amenity feature (e.g. a characteristic or service) of the
     * Accommodation. This generic property does not make a statement about
     * whether the feature is included in an offer for the main accommodation or
     * available at extra costs.
     *
     * @param \Municipio\Schema\Contracts\LocationFeatureSpecificationContract|\Municipio\Schema\Contracts\LocationFeatureSpecificationContract[] $amenityFeature
     *
     * @return static
     *
     * @see https://schema.org/amenityFeature
     */
    public function amenityFeature($amenityFeature)
    {
        return $this->setProperty('amenityFeature', $amenityFeature);
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
     * The size of the accommodation, e.g. in square meter or squarefoot.
     * Typical unit code(s): MTK for square meter, FTK for square foot, or YDK
     * for square yard.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $floorSize
     *
     * @return static
     *
     * @see https://schema.org/floorSize
     */
    public function floorSize($floorSize)
    {
        return $this->setProperty('floorSize', $floorSize);
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
     * Indicates some accommodation that this floor plan describes.
     *
     * @param \Municipio\Schema\Contracts\AccommodationContract|\Municipio\Schema\Contracts\AccommodationContract[] $isPlanForApartment
     *
     * @return static
     *
     * @see https://schema.org/isPlanForApartment
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2373
     */
    public function isPlanForApartment($isPlanForApartment)
    {
        return $this->setProperty('isPlanForApartment', $isPlanForApartment);
    }

    /**
     * A schematic image showing the floorplan layout.
     *
     * @param \Municipio\Schema\Contracts\ImageObjectContract|\Municipio\Schema\Contracts\ImageObjectContract[]|string|string[] $layoutImage
     *
     * @return static
     *
     * @see https://schema.org/layoutImage
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2690
     */
    public function layoutImage($layoutImage)
    {
        return $this->setProperty('layoutImage', $layoutImage);
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
     * Indicates the total (available plus unavailable) number of accommodation
     * units in an [[ApartmentComplex]], or the number of accommodation units
     * for a specific [[FloorPlan]] (within its specific [[ApartmentComplex]]).
     * See also [[numberOfAvailableAccommodationUnits]].
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $numberOfAccommodationUnits
     *
     * @return static
     *
     * @see https://schema.org/numberOfAccommodationUnits
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2373
     */
    public function numberOfAccommodationUnits($numberOfAccommodationUnits)
    {
        return $this->setProperty('numberOfAccommodationUnits', $numberOfAccommodationUnits);
    }

    /**
     * Indicates the number of available accommodation units in an
     * [[ApartmentComplex]], or the number of accommodation units for a specific
     * [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also
     * [[numberOfAccommodationUnits]].
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $numberOfAvailableAccommodationUnits
     *
     * @return static
     *
     * @see https://schema.org/numberOfAvailableAccommodationUnits
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2373
     */
    public function numberOfAvailableAccommodationUnits($numberOfAvailableAccommodationUnits)
    {
        return $this->setProperty('numberOfAvailableAccommodationUnits', $numberOfAvailableAccommodationUnits);
    }

    /**
     * The total integer number of bathrooms in some [[Accommodation]],
     * following real estate conventions as [documented in
     * RESO](https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field):
     * "The simple sum of the number of bathrooms. For example for a property
     * with two Full Bathrooms and one Half Bathroom, the Bathrooms Total
     * Integer will be 3.". See also [[numberOfRooms]].
     *
     * @param int|int[] $numberOfBathroomsTotal
     *
     * @return static
     *
     * @see https://schema.org/numberOfBathroomsTotal
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2373
     */
    public function numberOfBathroomsTotal($numberOfBathroomsTotal)
    {
        return $this->setProperty('numberOfBathroomsTotal', $numberOfBathroomsTotal);
    }

    /**
     * The total integer number of bedrooms in a some [[Accommodation]],
     * [[ApartmentComplex]] or [[FloorPlan]].
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[]|float|float[]|int|int[] $numberOfBedrooms
     *
     * @return static
     *
     * @see https://schema.org/numberOfBedrooms
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2373
     */
    public function numberOfBedrooms($numberOfBedrooms)
    {
        return $this->setProperty('numberOfBedrooms', $numberOfBedrooms);
    }

    /**
     * Number of full bathrooms - The total number of full and ¾ bathrooms in
     * an [[Accommodation]]. This corresponds to the [BathroomsFull field in
     * RESO](https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field).
     *
     * @param float|float[]|int|int[] $numberOfFullBathrooms
     *
     * @return static
     *
     * @see https://schema.org/numberOfFullBathrooms
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2373
     */
    public function numberOfFullBathrooms($numberOfFullBathrooms)
    {
        return $this->setProperty('numberOfFullBathrooms', $numberOfFullBathrooms);
    }

    /**
     * Number of partial bathrooms - The total number of half and ¼ bathrooms
     * in an [[Accommodation]]. This corresponds to the [BathroomsPartial field
     * in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field).
     *
     * @param float|float[]|int|int[] $numberOfPartialBathrooms
     *
     * @return static
     *
     * @see https://schema.org/numberOfPartialBathrooms
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2373
     */
    public function numberOfPartialBathrooms($numberOfPartialBathrooms)
    {
        return $this->setProperty('numberOfPartialBathrooms', $numberOfPartialBathrooms);
    }

    /**
     * The number of rooms (excluding bathrooms and closets) of the
     * accommodation or lodging business.
     * Typical unit code(s): ROM for room or C62 for no unit. The type of room
     * can be put in the unitText property of the QuantitativeValue.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[]|float|float[]|int|int[] $numberOfRooms
     *
     * @return static
     *
     * @see https://schema.org/numberOfRooms
     */
    public function numberOfRooms($numberOfRooms)
    {
        return $this->setProperty('numberOfRooms', $numberOfRooms);
    }

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging
     * business. More detailed information can be put in a text value.
     *
     * @param bool|bool[]|string|string[] $petsAllowed
     *
     * @return static
     *
     * @see https://schema.org/petsAllowed
     */
    public function petsAllowed($petsAllowed)
    {
        return $this->setProperty('petsAllowed', $petsAllowed);
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
