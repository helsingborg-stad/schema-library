<?php

namespace Municipio\Schema;

use \Municipio\Schema\Contracts\MeetingRoomContract;
use \Municipio\Schema\Contracts\AccommodationContract;
use \Municipio\Schema\Contracts\PlaceContract;
use \Municipio\Schema\Contracts\RoomContract;
use \Municipio\Schema\Contracts\ThingContract;

/**
 * A meeting room, conference room, or conference hall is a room provided for
 * singular events such as business conferences and meetings (source: Wikipedia,
 * the free encyclopedia, see <a
 * href="http://en.wikipedia.org/wiki/Conference_hall">http://en.wikipedia.org/wiki/Conference_hall</a>).
 * 
 * See also the <a href="/docs/hotels.html">dedicated document on the use of
 * schema.org for marking up hotels and other forms of accommodations</a>.
 *
 * @see https://schema.org/MeetingRoom
 *
 */
class MeetingRoom extends BaseType implements MeetingRoomContract, AccommodationContract, PlaceContract, RoomContract, ThingContract
{
    /**
     * Indicates whether a FoodEstablishment or Place accepts reservations.
     * Values can be Boolean, a URL at which reservations can be made, or the
     * strings 'Yes' or 'No'.
     *
     * @param bool|bool[]|string|string[] $acceptsReservations
     *
     * @return static
     *
     * @see https://schema.org/acceptsReservations
     */
    public function acceptsReservations($acceptsReservations)
    {
        return $this->setProperty('acceptsReservations', $acceptsReservations);
    }

    /**
     * Category of an [[Accommodation]], following real estate conventions, e.g.
     * RESO (see
     * [PropertySubType](https://ddwiki.reso.org/display/DDW17/PropertySubType+Field),
     * and
     * [PropertyType](https://ddwiki.reso.org/display/DDW17/PropertyType+Field)
     * fields  for suggested values).
     *
     * @param string|string[] $accommodationCategory
     *
     * @return static
     *
     * @see https://schema.org/accommodationCategory
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2373
     */
    public function accommodationCategory($accommodationCategory)
    {
        return $this->setProperty('accommodationCategory', $accommodationCategory);
    }

    /**
     * A floorplan of some [[Accommodation]].
     *
     * @param \Municipio\Schema\Contracts\FloorPlanContract|\Municipio\Schema\Contracts\FloorPlanContract[] $accommodationFloorPlan
     *
     * @return static
     *
     * @see https://schema.org/accommodationFloorPlan
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2373
     */
    public function accommodationFloorPlan($accommodationFloorPlan)
    {
        return $this->setProperty('accommodationFloorPlan', $accommodationFloorPlan);
    }

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
     * Physical address of the item.
     *
     * @param \Municipio\Schema\Contracts\PostalAddressContract|\Municipio\Schema\Contracts\PostalAddressContract[]|string|string[] $address
     *
     * @return static
     *
     * @see https://schema.org/address
     */
    public function address($address)
    {
        return $this->setProperty('address', $address);
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @param \Municipio\Schema\Contracts\AggregateRatingContract|\Municipio\Schema\Contracts\AggregateRatingContract[] $aggregateRating
     *
     * @return static
     *
     * @see https://schema.org/aggregateRating
     */
    public function aggregateRating($aggregateRating)
    {
        return $this->setProperty('aggregateRating', $aggregateRating);
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
     * The type of bed or beds included in the accommodation. For the single
     * case of just one bed of a certain type, you use bed directly with a text.
     *       If you want to indicate the quantity of a certain kind of bed, use
     * an instance of BedDetails. For more detailed information, use the
     * amenityFeature property.
     *
     * @param \Municipio\Schema\Contracts\BedDetailsContract|\Municipio\Schema\Contracts\BedDetailsContract[]|\Municipio\Schema\Contracts\BedTypeContract|\Municipio\Schema\Contracts\BedTypeContract[]|string|string[] $bed
     *
     * @return static
     *
     * @see https://schema.org/bed
     */
    public function bed($bed)
    {
        return $this->setProperty('bed', $bed);
    }

    /**
     * A short textual code (also called "store code") that uniquely identifies
     * a place of business. The code is typically assigned by the
     * parentOrganization and used in structured URLs.
     * 
     * For example, in the URL
     * http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047"
     * is a branchCode for a particular branch.
     *
     * @param string|string[] $branchCode
     *
     * @return static
     *
     * @see https://schema.org/branchCode
     */
    public function branchCode($branchCode)
    {
        return $this->setProperty('branchCode', $branchCode);
    }

    /**
     * The basic containment relation between a place and one that contains it.
     *
     * @param \Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[] $containedIn
     *
     * @return static
     *
     * @see https://schema.org/containedIn
     */
    public function containedIn($containedIn)
    {
        return $this->setProperty('containedIn', $containedIn);
    }

    /**
     * The basic containment relation between a place and one that contains it.
     *
     * @param \Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[] $containedInPlace
     *
     * @return static
     *
     * @see https://schema.org/containedInPlace
     */
    public function containedInPlace($containedInPlace)
    {
        return $this->setProperty('containedInPlace', $containedInPlace);
    }

    /**
     * The basic containment relation between a place and another that it
     * contains.
     *
     * @param \Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[] $containsPlace
     *
     * @return static
     *
     * @see https://schema.org/containsPlace
     */
    public function containsPlace($containsPlace)
    {
        return $this->setProperty('containsPlace', $containsPlace);
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
     * Upcoming or past event associated with this place, organization, or
     * action.
     *
     * @param \Municipio\Schema\Contracts\EventContract|\Municipio\Schema\Contracts\EventContract[] $event
     *
     * @return static
     *
     * @see https://schema.org/event
     */
    public function event($event)
    {
        return $this->setProperty('event', $event);
    }

    /**
     * Upcoming or past events associated with this place or organization.
     *
     * @param \Municipio\Schema\Contracts\EventContract|\Municipio\Schema\Contracts\EventContract[] $events
     *
     * @return static
     *
     * @see https://schema.org/events
     */
    public function events($events)
    {
        return $this->setProperty('events', $events);
    }

    /**
     * The fax number.
     *
     * @param string|string[] $faxNumber
     *
     * @return static
     *
     * @see https://schema.org/faxNumber
     */
    public function faxNumber($faxNumber)
    {
        return $this->setProperty('faxNumber', $faxNumber);
    }

    /**
     * The floor level for an [[Accommodation]] in a multi-storey building.
     * Since counting
     *   systems [vary
     * internationally](https://en.wikipedia.org/wiki/Storey#Consecutive_number_floor_designations),
     * the local system should be used where possible.
     *
     * @param string|string[] $floorLevel
     *
     * @return static
     *
     * @see https://schema.org/floorLevel
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2373
     */
    public function floorLevel($floorLevel)
    {
        return $this->setProperty('floorLevel', $floorLevel);
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
     * The geo coordinates of the place.
     *
     * @param \Municipio\Schema\Contracts\GeoCoordinatesContract|\Municipio\Schema\Contracts\GeoCoordinatesContract[]|\Municipio\Schema\Contracts\GeoShapeContract|\Municipio\Schema\Contracts\GeoShapeContract[] $geo
     *
     * @return static
     *
     * @see https://schema.org/geo
     */
    public function geo($geo)
    {
        return $this->setProperty('geo', $geo);
    }

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a containing geometry to a contained geometry. "a
     * contains b iff no points of b lie in the exterior of a, and at least one
     * point of the interior of b lies in the interior of a". As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Municipio\Schema\Contracts\GeospatialGeometryContract|\Municipio\Schema\Contracts\GeospatialGeometryContract[]|\Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[] $geoContains
     *
     * @return static
     *
     * @see https://schema.org/geoContains
     */
    public function geoContains($geoContains)
    {
        return $this->setProperty('geoContains', $geoContains);
    }

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a geometry to another that covers it. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Municipio\Schema\Contracts\GeospatialGeometryContract|\Municipio\Schema\Contracts\GeospatialGeometryContract[]|\Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[] $geoCoveredBy
     *
     * @return static
     *
     * @see https://schema.org/geoCoveredBy
     */
    public function geoCoveredBy($geoCoveredBy)
    {
        return $this->setProperty('geoCoveredBy', $geoCoveredBy);
    }

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a covering geometry to a covered geometry. "Every
     * point of b is a point of (the interior or boundary of) a". As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Municipio\Schema\Contracts\GeospatialGeometryContract|\Municipio\Schema\Contracts\GeospatialGeometryContract[]|\Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[] $geoCovers
     *
     * @return static
     *
     * @see https://schema.org/geoCovers
     */
    public function geoCovers($geoCovers)
    {
        return $this->setProperty('geoCovers', $geoCovers);
    }

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a geometry to another that crosses it: "a crosses b:
     * they have some but not all interior points in common, and the dimension
     * of the intersection is less than that of at least one of them". As
     * defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Municipio\Schema\Contracts\GeospatialGeometryContract|\Municipio\Schema\Contracts\GeospatialGeometryContract[]|\Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[] $geoCrosses
     *
     * @return static
     *
     * @see https://schema.org/geoCrosses
     */
    public function geoCrosses($geoCrosses)
    {
        return $this->setProperty('geoCrosses', $geoCrosses);
    }

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) are topologically disjoint: "they have no point in common.
     * They form a set of disconnected geometries." (A symmetric relationship,
     * as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
     *
     * @param \Municipio\Schema\Contracts\GeospatialGeometryContract|\Municipio\Schema\Contracts\GeospatialGeometryContract[]|\Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[] $geoDisjoint
     *
     * @return static
     *
     * @see https://schema.org/geoDisjoint
     */
    public function geoDisjoint($geoDisjoint)
    {
        return $this->setProperty('geoDisjoint', $geoDisjoint);
    }

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) are topologically equal, as defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries are
     * topologically equal if their interiors intersect and no part of the
     * interior or boundary of one geometry intersects the exterior of the
     * other" (a symmetric relationship).
     *
     * @param \Municipio\Schema\Contracts\GeospatialGeometryContract|\Municipio\Schema\Contracts\GeospatialGeometryContract[]|\Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[] $geoEquals
     *
     * @return static
     *
     * @see https://schema.org/geoEquals
     */
    public function geoEquals($geoEquals)
    {
        return $this->setProperty('geoEquals', $geoEquals);
    }

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) have at least one point in common. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Municipio\Schema\Contracts\GeospatialGeometryContract|\Municipio\Schema\Contracts\GeospatialGeometryContract[]|\Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[] $geoIntersects
     *
     * @return static
     *
     * @see https://schema.org/geoIntersects
     */
    public function geoIntersects($geoIntersects)
    {
        return $this->setProperty('geoIntersects', $geoIntersects);
    }

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a geometry to another that geospatially overlaps it,
     * i.e. they have some but not all points in common. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Municipio\Schema\Contracts\GeospatialGeometryContract|\Municipio\Schema\Contracts\GeospatialGeometryContract[]|\Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[] $geoOverlaps
     *
     * @return static
     *
     * @see https://schema.org/geoOverlaps
     */
    public function geoOverlaps($geoOverlaps)
    {
        return $this->setProperty('geoOverlaps', $geoOverlaps);
    }

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) touch: "they have at least one boundary point in common, but
     * no interior points." (A symmetric relationship, as defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
     *
     * @param \Municipio\Schema\Contracts\GeospatialGeometryContract|\Municipio\Schema\Contracts\GeospatialGeometryContract[]|\Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[] $geoTouches
     *
     * @return static
     *
     * @see https://schema.org/geoTouches
     */
    public function geoTouches($geoTouches)
    {
        return $this->setProperty('geoTouches', $geoTouches);
    }

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a geometry to one that contains it, i.e. it is
     * inside (i.e. within) its interior. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Municipio\Schema\Contracts\GeospatialGeometryContract|\Municipio\Schema\Contracts\GeospatialGeometryContract[]|\Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[] $geoWithin
     *
     * @return static
     *
     * @see https://schema.org/geoWithin
     */
    public function geoWithin($geoWithin)
    {
        return $this->setProperty('geoWithin', $geoWithin);
    }

    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also
     * referred to as International Location Number or ILN) of the respective
     * organization, person, or place. The GLN is a 13-digit number used to
     * identify parties and physical locations.
     *
     * @param string|string[] $globalLocationNumber
     *
     * @return static
     *
     * @see https://schema.org/globalLocationNumber
     */
    public function globalLocationNumber($globalLocationNumber)
    {
        return $this->setProperty('globalLocationNumber', $globalLocationNumber);
    }

    /**
     * Certification information about a product, organization, service, place,
     * or person.
     *
     * @param \Municipio\Schema\Contracts\CertificationContract|\Municipio\Schema\Contracts\CertificationContract[] $hasCertification
     *
     * @return static
     *
     * @see https://schema.org/hasCertification
     * @link https://github.com/schemaorg/schemaorg/issues/3230
     */
    public function hasCertification($hasCertification)
    {
        return $this->setProperty('hasCertification', $hasCertification);
    }

    /**
     * Indicates whether some facility (e.g. [[FoodEstablishment]],
     * [[CovidTestingFacility]]) offers a service that can be used by driving
     * through in a car. In the case of [[CovidTestingFacility]] such facilities
     * could potentially help with social distancing from other
     * potentially-infected users.
     *
     * @param bool|bool[] $hasDriveThroughService
     *
     * @return static
     *
     * @see https://schema.org/hasDriveThroughService
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2490
     */
    public function hasDriveThroughService($hasDriveThroughService)
    {
        return $this->setProperty('hasDriveThroughService', $hasDriveThroughService);
    }

    /**
     * The [GS1 digital link](https://www.gs1.org/standards/gs1-digital-link)
     * associated with the object. This URL should conform to the particular
     * requirements of digital links. The link should only contain the
     * Application Identifiers (AIs) that are relevant for the entity being
     * annotated, for instance a [[Product]] or an [[Organization]], and for the
     * correct granularity. In particular, for products:<ul>* A Digital Link
     * that contains a serial number (AI ```21```) should only be present on
     * instances of [[IndividualProduct]]* A Digital Link that contains a lot
     * number (AI ```10```) should be annotated as [[SomeProduct]] if only
     * products from that lot are sold, or [[IndividualProduct]] if there is
     * only a specific product.* A Digital Link that contains a global model
     * number (AI ```8013```)  should be attached to a [[Product]] or a
     * [[ProductModel]]. Other item types should be adapted similarly.
     *
     * @param string|string[] $hasGS1DigitalLink
     *
     * @return static
     *
     * @see https://schema.org/hasGS1DigitalLink
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3475
     */
    public function hasGS1DigitalLink($hasGS1DigitalLink)
    {
        return $this->setProperty('hasGS1DigitalLink', $hasGS1DigitalLink);
    }

    /**
     * A URL to a map of the place.
     *
     * @param \Municipio\Schema\Contracts\MapContract|\Municipio\Schema\Contracts\MapContract[]|string|string[] $hasMap
     *
     * @return static
     *
     * @see https://schema.org/hasMap
     */
    public function hasMap($hasMap)
    {
        return $this->setProperty('hasMap', $hasMap);
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
     * A flag to signal that the item, event, or place is accessible for free.
     *
     * @param bool|bool[] $isAccessibleForFree
     *
     * @return static
     *
     * @see https://schema.org/isAccessibleForFree
     */
    public function isAccessibleForFree($isAccessibleForFree)
    {
        return $this->setProperty('isAccessibleForFree', $isAccessibleForFree);
    }

    /**
     * The International Standard of Industrial Classification of All Economic
     * Activities (ISIC), Revision 4 code for a particular organization,
     * business person, or place.
     *
     * @param string|string[] $isicV4
     *
     * @return static
     *
     * @see https://schema.org/isicV4
     */
    public function isicV4($isicV4)
    {
        return $this->setProperty('isicV4', $isicV4);
    }

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in
     * a keywords list are typically delimited by commas, or by repeating the
     * property.
     *
     * @param \Municipio\Schema\Contracts\DefinedTermContract|\Municipio\Schema\Contracts\DefinedTermContract[]|string|string[] $keywords
     *
     * @return static
     *
     * @see https://schema.org/keywords
     */
    public function keywords($keywords)
    {
        return $this->setProperty('keywords', $keywords);
    }

    /**
     * The latitude of a location. For example ```37.42242``` ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @param float|float[]|int|int[]|string|string[] $latitude
     *
     * @return static
     *
     * @see https://schema.org/latitude
     */
    public function latitude($latitude)
    {
        return $this->setProperty('latitude', $latitude);
    }

    /**
     * Length of the lease for some [[Accommodation]], either particular to some
     * [[Offer]] or in some cases intrinsic to the property.
     *
     * @param \Municipio\Schema\Contracts\DurationContract|\Municipio\Schema\Contracts\DurationContract[]|\Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $leaseLength
     *
     * @return static
     *
     * @see https://schema.org/leaseLength
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2373
     */
    public function leaseLength($leaseLength)
    {
        return $this->setProperty('leaseLength', $leaseLength);
    }

    /**
     * An associated logo.
     *
     * @param \Municipio\Schema\Contracts\ImageObjectContract|\Municipio\Schema\Contracts\ImageObjectContract[]|string|string[] $logo
     *
     * @return static
     *
     * @see https://schema.org/logo
     */
    public function logo($logo)
    {
        return $this->setProperty('logo', $logo);
    }

    /**
     * The longitude of a location. For example ```-122.08585``` ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @param float|float[]|int|int[]|string|string[] $longitude
     *
     * @return static
     *
     * @see https://schema.org/longitude
     */
    public function longitude($longitude)
    {
        return $this->setProperty('longitude', $longitude);
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
     * A URL to a map of the place.
     *
     * @param string|string[] $map
     *
     * @return static
     *
     * @see https://schema.org/map
     */
    public function map($map)
    {
        return $this->setProperty('map', $map);
    }

    /**
     * A URL to a map of the place.
     *
     * @param string|string[] $maps
     *
     * @return static
     *
     * @see https://schema.org/maps
     */
    public function maps($maps)
    {
        return $this->setProperty('maps', $maps);
    }

    /**
     * The total number of individuals that may attend an event or venue.
     *
     * @param int|int[] $maximumAttendeeCapacity
     *
     * @return static
     *
     * @see https://schema.org/maximumAttendeeCapacity
     */
    public function maximumAttendeeCapacity($maximumAttendeeCapacity)
    {
        return $this->setProperty('maximumAttendeeCapacity', $maximumAttendeeCapacity);
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
     * The allowed total occupancy for the accommodation in persons (including
     * infants etc). For individual accommodations, this is not necessarily the
     * legal maximum but defines the permitted usage as per the contractual
     * agreement (e.g. a double room used by a single person).
     * Typical unit code(s): C62 for person.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $occupancy
     *
     * @return static
     *
     * @see https://schema.org/occupancy
     */
    public function occupancy($occupancy)
    {
        return $this->setProperty('occupancy', $occupancy);
    }

    /**
     * The opening hours of a certain place.
     *
     * @param \Municipio\Schema\Contracts\OpeningHoursSpecificationContract|\Municipio\Schema\Contracts\OpeningHoursSpecificationContract[] $openingHoursSpecification
     *
     * @return static
     *
     * @see https://schema.org/openingHoursSpecification
     */
    public function openingHoursSpecification($openingHoursSpecification)
    {
        return $this->setProperty('openingHoursSpecification', $openingHoursSpecification);
    }

    /**
     * Indications regarding the permitted usage of the accommodation.
     *
     * @param string|string[] $permittedUsage
     *
     * @return static
     *
     * @see https://schema.org/permittedUsage
     */
    public function permittedUsage($permittedUsage)
    {
        return $this->setProperty('permittedUsage', $permittedUsage);
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
     * A photograph of this place.
     *
     * @param \Municipio\Schema\Contracts\ImageObjectContract|\Municipio\Schema\Contracts\ImageObjectContract[]|\Municipio\Schema\Contracts\PhotographContract|\Municipio\Schema\Contracts\PhotographContract[] $photo
     *
     * @return static
     *
     * @see https://schema.org/photo
     */
    public function photo($photo)
    {
        return $this->setProperty('photo', $photo);
    }

    /**
     * Photographs of this place.
     *
     * @param \Municipio\Schema\Contracts\ImageObjectContract|\Municipio\Schema\Contracts\ImageObjectContract[]|\Municipio\Schema\Contracts\PhotographContract|\Municipio\Schema\Contracts\PhotographContract[] $photos
     *
     * @return static
     *
     * @see https://schema.org/photos
     */
    public function photos($photos)
    {
        return $this->setProperty('photos', $photos);
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
     * A flag to signal that the [[Place]] is open to public visitors.  If this
     * property is omitted there is no assumed default boolean value.
     *
     * @param bool|bool[] $publicAccess
     *
     * @return static
     *
     * @see https://schema.org/publicAccess
     */
    public function publicAccess($publicAccess)
    {
        return $this->setProperty('publicAccess', $publicAccess);
    }

    /**
     * A review of the item.
     *
     * @param \Municipio\Schema\Contracts\ReviewContract|\Municipio\Schema\Contracts\ReviewContract[] $review
     *
     * @return static
     *
     * @see https://schema.org/review
     */
    public function review($review)
    {
        return $this->setProperty('review', $review);
    }

    /**
     * Review of the item.
     *
     * @param \Municipio\Schema\Contracts\ReviewContract|\Municipio\Schema\Contracts\ReviewContract[] $reviews
     *
     * @return static
     *
     * @see https://schema.org/reviews
     */
    public function reviews($reviews)
    {
        return $this->setProperty('reviews', $reviews);
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
     * A slogan or motto associated with the item.
     *
     * @param string|string[] $slogan
     *
     * @return static
     *
     * @see https://schema.org/slogan
     */
    public function slogan($slogan)
    {
        return $this->setProperty('slogan', $slogan);
    }

    /**
     * Indicates whether it is allowed to smoke in the place, e.g. in the
     * restaurant, hotel or hotel room.
     *
     * @param bool|bool[] $smokingAllowed
     *
     * @return static
     *
     * @see https://schema.org/smokingAllowed
     */
    public function smokingAllowed($smokingAllowed)
    {
        return $this->setProperty('smokingAllowed', $smokingAllowed);
    }

    /**
     * The special opening hours of a certain place.
     * 
     * Use this to explicitly override general opening hours brought in scope by
     * [[openingHoursSpecification]] or [[openingHours]].
     *
     * @param \Municipio\Schema\Contracts\OpeningHoursSpecificationContract|\Municipio\Schema\Contracts\OpeningHoursSpecificationContract[] $specialOpeningHoursSpecification
     *
     * @return static
     *
     * @see https://schema.org/specialOpeningHoursSpecification
     */
    public function specialOpeningHoursSpecification($specialOpeningHoursSpecification)
    {
        return $this->setProperty('specialOpeningHoursSpecification', $specialOpeningHoursSpecification);
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
     * The telephone number.
     *
     * @param string|string[] $telephone
     *
     * @return static
     *
     * @see https://schema.org/telephone
     */
    public function telephone($telephone)
    {
        return $this->setProperty('telephone', $telephone);
    }

    /**
     * A page providing information on how to book a tour of some [[Place]],
     * such as an [[Accommodation]] or [[ApartmentComplex]] in a real estate
     * setting, as well as other kinds of tours as appropriate.
     *
     * @param string|string[] $tourBookingPage
     *
     * @return static
     *
     * @see https://schema.org/tourBookingPage
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2373
     */
    public function tourBookingPage($tourBookingPage)
    {
        return $this->setProperty('tourBookingPage', $tourBookingPage);
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
     * The year an [[Accommodation]] was constructed. This corresponds to the
     * [YearBuilt field in
     * RESO](https://ddwiki.reso.org/display/DDW17/YearBuilt+Field).
     *
     * @param float|float[]|int|int[] $yearBuilt
     *
     * @return static
     *
     * @see https://schema.org/yearBuilt
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2373
     */
    public function yearBuilt($yearBuilt)
    {
        return $this->setProperty('yearBuilt', $yearBuilt);
    }

}
