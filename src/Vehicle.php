<?php

namespace Municipio\Schema;

use \Municipio\Schema\Contracts\VehicleContract;
use \Municipio\Schema\Contracts\ProductContract;
use \Municipio\Schema\Contracts\ThingContract;

/**
 * A vehicle is a device that is designed or used to transport people or cargo
 * over land, water, air, or through space.
 *
 * @see https://schema.org/Vehicle
 *
 */
class Vehicle extends BaseType implements VehicleContract, ProductContract, ThingContract
{
    /**
     * The time needed to accelerate the vehicle from a given start velocity to
     * a given target velocity.
     * 
     * Typical unit code(s): SEC for seconds
     * 
     * * Note: There are unfortunately no standard unit codes for seconds/0..100
     * km/h or seconds/0..60 mph. Simply use "SEC" for seconds and indicate the
     * velocities in the [[name]] of the [[QuantitativeValue]], or use
     * [[valueReference]] with a [[QuantitativeValue]] of 0..60 mph or 0..100
     * km/h to specify the reference speeds.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $accelerationTime
     *
     * @return static
     *
     * @see https://schema.org/accelerationTime
     * @see https://auto.schema.org
     */
    public function accelerationTime($accelerationTime)
    {
        return $this->setProperty('accelerationTime', $accelerationTime);
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
     * An Amazon Standard Identification Number (ASIN) is a 10-character
     * alphanumeric unique identifier assigned by Amazon.com and its partners
     * for product identification within the Amazon organization (summary from
     * [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)'s
     * article).
     * 
     * Note also that this is a definition for how to include ASINs in
     * Schema.org data, and not a definition of ASINs in general - see
     * documentation from Amazon for authoritative details.
     * ASINs are most commonly encoded as text strings, but the [asin] property
     * supports URL/URI as potential values too.
     *
     * @param string|string[] $asin
     *
     * @return static
     *
     * @see https://schema.org/asin
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function asin($asin)
    {
        return $this->setProperty('asin', $asin);
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param \Municipio\Schema\Contracts\AudienceContract|\Municipio\Schema\Contracts\AudienceContract[] $audience
     *
     * @return static
     *
     * @see https://schema.org/audience
     */
    public function audience($audience)
    {
        return $this->setProperty('audience', $audience);
    }

    /**
     * An award won by or for this item.
     *
     * @param string|string[] $award
     *
     * @return static
     *
     * @see https://schema.org/award
     */
    public function award($award)
    {
        return $this->setProperty('award', $award);
    }

    /**
     * Awards won by or for this item.
     *
     * @param string|string[] $awards
     *
     * @return static
     *
     * @see https://schema.org/awards
     */
    public function awards($awards)
    {
        return $this->setProperty('awards', $awards);
    }

    /**
     * Indicates the design and body style of the vehicle (e.g. station wagon,
     * hatchback, etc.).
     *
     * @param \Municipio\Schema\Contracts\QualitativeValueContract|\Municipio\Schema\Contracts\QualitativeValueContract[]|string|string[] $bodyType
     *
     * @return static
     *
     * @see https://schema.org/bodyType
     * @see https://auto.schema.org
     */
    public function bodyType($bodyType)
    {
        return $this->setProperty('bodyType', $bodyType);
    }

    /**
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     *
     * @param \Municipio\Schema\Contracts\BrandContract|\Municipio\Schema\Contracts\BrandContract[]|\Municipio\Schema\Contracts\OrganizationContract|\Municipio\Schema\Contracts\OrganizationContract[] $brand
     *
     * @return static
     *
     * @see https://schema.org/brand
     */
    public function brand($brand)
    {
        return $this->setProperty('brand', $brand);
    }

    /**
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in
     * broadcasting and radio communications to identify people, radio and TV
     * stations, or vehicles.
     *
     * @param string|string[] $callSign
     *
     * @return static
     *
     * @see https://schema.org/callSign
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2109
     */
    public function callSign($callSign)
    {
        return $this->setProperty('callSign', $callSign);
    }

    /**
     * The available volume for cargo or luggage. For automobiles, this is
     * usually the trunk volume.
     * 
     * Typical unit code(s): LTR for liters, FTQ for cubic foot/feet
     * 
     * Note: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $cargoVolume
     *
     * @return static
     *
     * @see https://schema.org/cargoVolume
     */
    public function cargoVolume($cargoVolume)
    {
        return $this->setProperty('cargoVolume', $cargoVolume);
    }

    /**
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     *
     * @param \Municipio\Schema\Contracts\CategoryCodeContract|\Municipio\Schema\Contracts\CategoryCodeContract[]|\Municipio\Schema\Contracts\PhysicalActivityCategoryContract|\Municipio\Schema\Contracts\PhysicalActivityCategoryContract[]|\Municipio\Schema\Contracts\ThingContract|\Municipio\Schema\Contracts\ThingContract[]|string|string[] $category
     *
     * @return static
     *
     * @see https://schema.org/category
     */
    public function category($category)
    {
        return $this->setProperty('category', $category);
    }

    /**
     * The color of the product.
     *
     * @param string|string[] $color
     *
     * @return static
     *
     * @see https://schema.org/color
     */
    public function color($color)
    {
        return $this->setProperty('color', $color);
    }

    /**
     * A color swatch image, visualizing the color of a [[Product]]. Should
     * match the textual description specified in the [[color]] property. This
     * can be a URL or a fully described ImageObject.
     *
     * @param \Municipio\Schema\Contracts\ImageObjectContract|\Municipio\Schema\Contracts\ImageObjectContract[]|string|string[] $colorSwatch
     *
     * @return static
     *
     * @see https://schema.org/colorSwatch
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3423
     */
    public function colorSwatch($colorSwatch)
    {
        return $this->setProperty('colorSwatch', $colorSwatch);
    }

    /**
     * The place where the product was assembled.
     *
     * @param string|string[] $countryOfAssembly
     *
     * @return static
     *
     * @see https://schema.org/countryOfAssembly
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/991
     */
    public function countryOfAssembly($countryOfAssembly)
    {
        return $this->setProperty('countryOfAssembly', $countryOfAssembly);
    }

    /**
     * The place where the item (typically [[Product]]) was last processed and
     * tested before importation.
     *
     * @param string|string[] $countryOfLastProcessing
     *
     * @return static
     *
     * @see https://schema.org/countryOfLastProcessing
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/991
     */
    public function countryOfLastProcessing($countryOfLastProcessing)
    {
        return $this->setProperty('countryOfLastProcessing', $countryOfLastProcessing);
    }

    /**
     * The country of origin of something, including products as well as
     * creative  works such as movie and TV content.
     * 
     * In the case of TV and movie, this would be the country of the principle
     * offices of the production company or individual responsible for the
     * movie. For other kinds of [[CreativeWork]] it is difficult to provide
     * fully general guidance, and properties such as [[contentLocation]] and
     * [[locationCreated]] may be more applicable.
     * 
     * In the case of products, the country of origin of the product. The exact
     * interpretation of this may vary by context and product type, and cannot
     * be fully enumerated here.
     *
     * @param \Municipio\Schema\Contracts\CountryContract|\Municipio\Schema\Contracts\CountryContract[] $countryOfOrigin
     *
     * @return static
     *
     * @see https://schema.org/countryOfOrigin
     */
    public function countryOfOrigin($countryOfOrigin)
    {
        return $this->setProperty('countryOfOrigin', $countryOfOrigin);
    }

    /**
     * The date of the first registration of the vehicle with the respective
     * public authorities.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dateVehicleFirstRegistered
     *
     * @return static
     *
     * @see https://schema.org/dateVehicleFirstRegistered
     */
    public function dateVehicleFirstRegistered($dateVehicleFirstRegistered)
    {
        return $this->setProperty('dateVehicleFirstRegistered', $dateVehicleFirstRegistered);
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
     * The drive wheel configuration, i.e. which roadwheels will receive torque
     * from the vehicle's engine via the drivetrain.
     *
     * @param \Municipio\Schema\Contracts\DriveWheelConfigurationValueContract|\Municipio\Schema\Contracts\DriveWheelConfigurationValueContract[]|string|string[] $driveWheelConfiguration
     *
     * @return static
     *
     * @see https://schema.org/driveWheelConfiguration
     */
    public function driveWheelConfiguration($driveWheelConfiguration)
    {
        return $this->setProperty('driveWheelConfiguration', $driveWheelConfiguration);
    }

    /**
     * The CO2 emissions in g/km. When used in combination with a
     * QuantitativeValue, put "g/km" into the unitText property of that value,
     * since there is no UN/CEFACT Common Code for "g/km".
     *
     * @param float|float[]|int|int[] $emissionsCO2
     *
     * @return static
     *
     * @see https://schema.org/emissionsCO2
     * @see https://auto.schema.org
     */
    public function emissionsCO2($emissionsCO2)
    {
        return $this->setProperty('emissionsCO2', $emissionsCO2);
    }

    /**
     * The capacity of the fuel tank or in the case of electric cars, the
     * battery. If there are multiple components for storage, this should
     * indicate the total of all storage of the same type.
     * 
     * Typical unit code(s): LTR for liters, GLL of US gallons, GLI for UK /
     * imperial gallons, AMH for ampere-hours (for electrical vehicles).
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $fuelCapacity
     *
     * @return static
     *
     * @see https://schema.org/fuelCapacity
     * @see https://auto.schema.org
     */
    public function fuelCapacity($fuelCapacity)
    {
        return $this->setProperty('fuelCapacity', $fuelCapacity);
    }

    /**
     * The amount of fuel consumed for traveling a particular distance or
     * temporal duration with the given vehicle (e.g. liters per 100 km).
     * 
     * * Note 1: There are unfortunately no standard unit codes for liters per
     * 100 km.  Use [[unitText]] to indicate the unit of measurement, e.g. L/100
     * km.
     * * Note 2: There are two ways of indicating the fuel consumption,
     * [[fuelConsumption]] (e.g. 8 liters per 100 km) and [[fuelEfficiency]]
     * (e.g. 30 miles per gallon). They are reciprocal.
     * * Note 3: Often, the absolute value is useful only when related to
     * driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can
     * use [[valueReference]] to link the value for the fuel consumption to
     * another value.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $fuelConsumption
     *
     * @return static
     *
     * @see https://schema.org/fuelConsumption
     */
    public function fuelConsumption($fuelConsumption)
    {
        return $this->setProperty('fuelConsumption', $fuelConsumption);
    }

    /**
     * The distance traveled per unit of fuel used; most commonly miles per
     * gallon (mpg) or kilometers per liter (km/L).
     * 
     * * Note 1: There are unfortunately no standard unit codes for miles per
     * gallon or kilometers per liter. Use [[unitText]] to indicate the unit of
     * measurement, e.g. mpg or km/L.
     * * Note 2: There are two ways of indicating the fuel consumption,
     * [[fuelConsumption]] (e.g. 8 liters per 100 km) and [[fuelEfficiency]]
     * (e.g. 30 miles per gallon). They are reciprocal.
     * * Note 3: Often, the absolute value is useful only when related to
     * driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can
     * use [[valueReference]] to link the value for the fuel economy to another
     * value.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $fuelEfficiency
     *
     * @return static
     *
     * @see https://schema.org/fuelEfficiency
     */
    public function fuelEfficiency($fuelEfficiency)
    {
        return $this->setProperty('fuelEfficiency', $fuelEfficiency);
    }

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If
     * the vehicle has only one engine, this property can be attached directly
     * to the vehicle.
     *
     * @param \Municipio\Schema\Contracts\QualitativeValueContract|\Municipio\Schema\Contracts\QualitativeValueContract[]|string|string[] $fuelType
     *
     * @return static
     *
     * @see https://schema.org/fuelType
     */
    public function fuelType($fuelType)
    {
        return $this->setProperty('fuelType', $fuelType);
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
     * A Global Trade Item Number
     * ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify
     * trade items, including products and services, using numeric
     * identification codes.
     * 
     * A correct [[gtin]] value should be a valid GTIN, which means that it
     * should be an all-numeric string of either 8, 12, 13 or 14 digits, or a
     * "GS1 Digital Link" URL based on such a string. The numeric component
     * should also have a [valid GS1 check
     * digit](https://www.gs1.org/services/check-digit-calculator) and meet the
     * other rules for valid GTINs. See also [GS1's GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and
     * [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for
     * more details. Left-padding of the gtin values is not required or
     * encouraged. The [[gtin]] property generalizes the earlier [[gtin8]],
     * [[gtin12]], [[gtin13]], and [[gtin14]] properties.
     * 
     * The GS1 [digital link
     * specifications](https://www.gs1.org/standards/Digital-Link/) expresses
     * GTINs as URLs (URIs, IRIs, etc.).
     * Digital Links should be populated into the [[hasGS1DigitalLink]]
     * attribute.
     * 
     * Note also that this is a definition for how to include GTINs in
     * Schema.org data, and not a definition of GTINs in general - see the GS1
     * documentation for authoritative details.
     *
     * @param string|string[] $gtin
     *
     * @return static
     *
     * @see https://schema.org/gtin
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function gtin($gtin)
    {
        return $this->setProperty('gtin', $gtin);
    }

    /**
     * The GTIN-12 code of the product, or the product to which the offer
     * refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a
     * U.P.C. Company Prefix, Item Reference, and Check Digit used to identify
     * trade items. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin12
     *
     * @return static
     *
     * @see https://schema.org/gtin12
     */
    public function gtin12($gtin12)
    {
        return $this->setProperty('gtin12', $gtin12);
    }

    /**
     * The GTIN-13 code of the product, or the product to which the offer
     * refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former
     * 12-digit UPC codes can be converted into a GTIN-13 code by simply adding
     * a preceding zero. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin13
     *
     * @return static
     *
     * @see https://schema.org/gtin13
     */
    public function gtin13($gtin13)
    {
        return $this->setProperty('gtin13', $gtin13);
    }

    /**
     * The GTIN-14 code of the product, or the product to which the offer
     * refers. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin14
     *
     * @return static
     *
     * @see https://schema.org/gtin14
     */
    public function gtin14($gtin14)
    {
        return $this->setProperty('gtin14', $gtin14);
    }

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers.
     * This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin8
     *
     * @return static
     *
     * @see https://schema.org/gtin8
     */
    public function gtin8($gtin8)
    {
        return $this->setProperty('gtin8', $gtin8);
    }

    /**
     * Used to tag an item to be intended or suitable for consumption or use by
     * adults only.
     *
     * @param \Municipio\Schema\Contracts\AdultOrientedEnumerationContract|\Municipio\Schema\Contracts\AdultOrientedEnumerationContract[] $hasAdultConsideration
     *
     * @return static
     *
     * @see https://schema.org/hasAdultConsideration
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2989
     */
    public function hasAdultConsideration($hasAdultConsideration)
    {
        return $this->setProperty('hasAdultConsideration', $hasAdultConsideration);
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
     * Defines the energy efficiency Category (also known as "class" or
     * "rating") for a product according to an international energy efficiency
     * standard.
     *
     * @param \Municipio\Schema\Contracts\EnergyConsumptionDetailsContract|\Municipio\Schema\Contracts\EnergyConsumptionDetailsContract[] $hasEnergyConsumptionDetails
     *
     * @return static
     *
     * @see https://schema.org/hasEnergyConsumptionDetails
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
    public function hasEnergyConsumptionDetails($hasEnergyConsumptionDetails)
    {
        return $this->setProperty('hasEnergyConsumptionDetails', $hasEnergyConsumptionDetails);
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
     * A measurement of an item, For example, the inseam of pants, the wheel
     * size of a bicycle, the gauge of a screw, or the carbon footprint measured
     * for certification by an authority. Usually an exact measurement, but can
     * also be a range of measurements for adjustable products, for example
     * belts and ski bindings.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $hasMeasurement
     *
     * @return static
     *
     * @see https://schema.org/hasMeasurement
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public function hasMeasurement($hasMeasurement)
    {
        return $this->setProperty('hasMeasurement', $hasMeasurement);
    }

    /**
     * Specifies a MerchantReturnPolicy that may be applicable.
     *
     * @param \Municipio\Schema\Contracts\MerchantReturnPolicyContract|\Municipio\Schema\Contracts\MerchantReturnPolicyContract[] $hasMerchantReturnPolicy
     *
     * @return static
     *
     * @see https://schema.org/hasMerchantReturnPolicy
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function hasMerchantReturnPolicy($hasMerchantReturnPolicy)
    {
        return $this->setProperty('hasMerchantReturnPolicy', $hasMerchantReturnPolicy);
    }

    /**
     * Indicates a ProductReturnPolicy that may be applicable.
     *
     * @param \Municipio\Schema\Contracts\ProductReturnPolicyContract|\Municipio\Schema\Contracts\ProductReturnPolicyContract[] $hasProductReturnPolicy
     *
     * @return static
     *
     * @see https://schema.org/hasProductReturnPolicy
     * @see https://attic.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function hasProductReturnPolicy($hasProductReturnPolicy)
    {
        return $this->setProperty('hasProductReturnPolicy', $hasProductReturnPolicy);
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
     * Indicates the [[productGroupID]] for a [[ProductGroup]] that this product
     * [[isVariantOf]].
     *
     * @param string|string[] $inProductGroupWithID
     *
     * @return static
     *
     * @see https://schema.org/inProductGroupWithID
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1797
     */
    public function inProductGroupWithID($inProductGroupWithID)
    {
        return $this->setProperty('inProductGroupWithID', $inProductGroupWithID);
    }

    /**
     * A pointer to another product (or multiple products) for which this
     * product is an accessory or spare part.
     *
     * @param \Municipio\Schema\Contracts\ProductContract|\Municipio\Schema\Contracts\ProductContract[] $isAccessoryOrSparePartFor
     *
     * @return static
     *
     * @see https://schema.org/isAccessoryOrSparePartFor
     */
    public function isAccessoryOrSparePartFor($isAccessoryOrSparePartFor)
    {
        return $this->setProperty('isAccessoryOrSparePartFor', $isAccessoryOrSparePartFor);
    }

    /**
     * A pointer to another product (or multiple products) for which this
     * product is a consumable.
     *
     * @param \Municipio\Schema\Contracts\ProductContract|\Municipio\Schema\Contracts\ProductContract[] $isConsumableFor
     *
     * @return static
     *
     * @see https://schema.org/isConsumableFor
     */
    public function isConsumableFor($isConsumableFor)
    {
        return $this->setProperty('isConsumableFor', $isConsumableFor);
    }

    /**
     * Indicates whether this content is family friendly.
     *
     * @param bool|bool[] $isFamilyFriendly
     *
     * @return static
     *
     * @see https://schema.org/isFamilyFriendly
     */
    public function isFamilyFriendly($isFamilyFriendly)
    {
        return $this->setProperty('isFamilyFriendly', $isFamilyFriendly);
    }

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     * @param \Municipio\Schema\Contracts\ProductContract|\Municipio\Schema\Contracts\ProductContract[]|\Municipio\Schema\Contracts\ServiceContract|\Municipio\Schema\Contracts\ServiceContract[] $isRelatedTo
     *
     * @return static
     *
     * @see https://schema.org/isRelatedTo
     */
    public function isRelatedTo($isRelatedTo)
    {
        return $this->setProperty('isRelatedTo', $isRelatedTo);
    }

    /**
     * A pointer to another, functionally similar product (or multiple
     * products).
     *
     * @param \Municipio\Schema\Contracts\ProductContract|\Municipio\Schema\Contracts\ProductContract[]|\Municipio\Schema\Contracts\ServiceContract|\Municipio\Schema\Contracts\ServiceContract[] $isSimilarTo
     *
     * @return static
     *
     * @see https://schema.org/isSimilarTo
     */
    public function isSimilarTo($isSimilarTo)
    {
        return $this->setProperty('isSimilarTo', $isSimilarTo);
    }

    /**
     * Indicates the kind of product that this is a variant of. In the case of
     * [[ProductModel]], this is a pointer (from a ProductModel) to a base
     * product from which this product is a variant. It is safe to infer that
     * the variant inherits all product features from the base model, unless
     * defined locally. This is not transitive. In the case of a
     * [[ProductGroup]], the group description also serves as a template,
     * representing a set of Products that vary on explicitly defined, specific
     * dimensions only (so it defines both a set of variants, as well as which
     * values distinguish amongst those variants). When used with
     * [[ProductGroup]], this property can apply to any [[Product]] included in
     * the group.
     *
     * @param \Municipio\Schema\Contracts\ProductGroupContract|\Municipio\Schema\Contracts\ProductGroupContract[]|\Municipio\Schema\Contracts\ProductModelContract|\Municipio\Schema\Contracts\ProductModelContract[] $isVariantOf
     *
     * @return static
     *
     * @see https://schema.org/isVariantOf
     */
    public function isVariantOf($isVariantOf)
    {
        return $this->setProperty('isVariantOf', $isVariantOf);
    }

    /**
     * A predefined value from OfferItemCondition specifying the condition of
     * the product or service, or the products or services included in the
     * offer. Also used for product return policies to specify the condition of
     * products accepted for returns.
     *
     * @param \Municipio\Schema\Contracts\OfferItemConditionContract|\Municipio\Schema\Contracts\OfferItemConditionContract[] $itemCondition
     *
     * @return static
     *
     * @see https://schema.org/itemCondition
     */
    public function itemCondition($itemCondition)
    {
        return $this->setProperty('itemCondition', $itemCondition);
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
     * A textual description of known damages, both repaired and unrepaired.
     *
     * @param string|string[] $knownVehicleDamages
     *
     * @return static
     *
     * @see https://schema.org/knownVehicleDamages
     */
    public function knownVehicleDamages($knownVehicleDamages)
    {
        return $this->setProperty('knownVehicleDamages', $knownVehicleDamages);
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
     * The manufacturer of the product.
     *
     * @param \Municipio\Schema\Contracts\OrganizationContract|\Municipio\Schema\Contracts\OrganizationContract[] $manufacturer
     *
     * @return static
     *
     * @see https://schema.org/manufacturer
     */
    public function manufacturer($manufacturer)
    {
        return $this->setProperty('manufacturer', $manufacturer);
    }

    /**
     * A material that something is made from, e.g. leather, wool, cotton,
     * paper.
     *
     * @param \Municipio\Schema\Contracts\ProductContract|\Municipio\Schema\Contracts\ProductContract[]|string|string[] $material
     *
     * @return static
     *
     * @see https://schema.org/material
     */
    public function material($material)
    {
        return $this->setProperty('material', $material);
    }

    /**
     * Indicates that the vehicle meets the respective emission standard.
     *
     * @param \Municipio\Schema\Contracts\QualitativeValueContract|\Municipio\Schema\Contracts\QualitativeValueContract[]|string|string[] $meetsEmissionStandard
     *
     * @return static
     *
     * @see https://schema.org/meetsEmissionStandard
     * @see https://auto.schema.org
     */
    public function meetsEmissionStandard($meetsEmissionStandard)
    {
        return $this->setProperty('meetsEmissionStandard', $meetsEmissionStandard);
    }

    /**
     * The total distance travelled by the particular vehicle since its initial
     * production, as read from its odometer.
     * 
     * Typical unit code(s): KMT for kilometers, SMI for statute miles.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $mileageFromOdometer
     *
     * @return static
     *
     * @see https://schema.org/mileageFromOdometer
     */
    public function mileageFromOdometer($mileageFromOdometer)
    {
        return $this->setProperty('mileageFromOdometer', $mileageFromOdometer);
    }

    /**
     * The [[mobileUrl]] property is provided for specific situations in which
     * data consumers need to determine whether one of several provided URLs is
     * a dedicated 'mobile site'.
     * 
     * To discourage over-use, and reflecting intial usecases, the property is
     * expected only on [[Product]] and [[Offer]], rather than [[Thing]]. The
     * general trend in web technology is towards [responsive
     * design](https://en.wikipedia.org/wiki/Responsive_web_design) in which
     * content can be flexibly adapted to a wide range of browsing environments.
     * Pages and sites referenced with the long-established [[url]] property
     * should ideally also be usable on a wide variety of devices, including
     * mobile phones. In most cases, it would be pointless and counter
     * productive to attempt to update all [[url]] markup to use [[mobileUrl]]
     * for more mobile-oriented pages. The property is intended for the case
     * when items (primarily [[Product]] and [[Offer]]) have extra URLs hosted
     * on an additional "mobile site" alongside the main one. It should not be
     * taken as an endorsement of this publication style.
     *
     * @param string|string[] $mobileUrl
     *
     * @return static
     *
     * @see https://schema.org/mobileUrl
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3134
     */
    public function mobileUrl($mobileUrl)
    {
        return $this->setProperty('mobileUrl', $mobileUrl);
    }

    /**
     * The model of the product. Use with the URL of a ProductModel or a textual
     * representation of the model identifier. The URL of the ProductModel can
     * be from an external source. It is recommended to additionally provide
     * strong product identifiers via the gtin8/gtin13/gtin14 and mpn
     * properties.
     *
     * @param \Municipio\Schema\Contracts\ProductModelContract|\Municipio\Schema\Contracts\ProductModelContract[]|string|string[] $model
     *
     * @return static
     *
     * @see https://schema.org/model
     */
    public function model($model)
    {
        return $this->setProperty('model', $model);
    }

    /**
     * The release date of a vehicle model (often used to differentiate versions
     * of the same make and model).
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $modelDate
     *
     * @return static
     *
     * @see https://schema.org/modelDate
     * @see https://auto.schema.org
     */
    public function modelDate($modelDate)
    {
        return $this->setProperty('modelDate', $modelDate);
    }

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to
     * which the offer refers.
     *
     * @param string|string[] $mpn
     *
     * @return static
     *
     * @see https://schema.org/mpn
     */
    public function mpn($mpn)
    {
        return $this->setProperty('mpn', $mpn);
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
     * Provides negative considerations regarding something, most typically in
     * pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry 
     * 
     * In the case of a [[Review]], the property describes the [[itemReviewed]]
     * from the perspective of the review; in the case of a [[Product]], the
     * product itself is being described. Since product descriptions 
     * tend to emphasise positive claims, it may be relatively unusual to find
     * [[negativeNotes]] used in this way. Nevertheless for the sake of
     * symmetry, [[negativeNotes]] can be used on [[Product]].
     * 
     * The property values can be expressed either as unstructured text
     * (repeated as necessary), or if ordered, as a list (in which case the most
     * negative is at the beginning of the list).
     *
     * @param \Municipio\Schema\Contracts\ItemListContract|\Municipio\Schema\Contracts\ItemListContract[]|\Municipio\Schema\Contracts\ListItemContract|\Municipio\Schema\Contracts\ListItemContract[]|\Municipio\Schema\Contracts\WebContentContract|\Municipio\Schema\Contracts\WebContentContract[]|string|string[] $negativeNotes
     *
     * @return static
     *
     * @see https://schema.org/negativeNotes
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2832
     */
    public function negativeNotes($negativeNotes)
    {
        return $this->setProperty('negativeNotes', $negativeNotes);
    }

    /**
     * Indicates the [NATO stock
     * number](https://en.wikipedia.org/wiki/NATO_Stock_Number) (nsn) of a
     * [[Product]].
     *
     * @param string|string[] $nsn
     *
     * @return static
     *
     * @see https://schema.org/nsn
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2126
     */
    public function nsn($nsn)
    {
        return $this->setProperty('nsn', $nsn);
    }

    /**
     * The number or type of airbags in the vehicle.
     *
     * @param float|float[]|int|int[]|string|string[] $numberOfAirbags
     *
     * @return static
     *
     * @see https://schema.org/numberOfAirbags
     */
    public function numberOfAirbags($numberOfAirbags)
    {
        return $this->setProperty('numberOfAirbags', $numberOfAirbags);
    }

    /**
     * The number of axles.
     * 
     * Typical unit code(s): C62.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[]|float|float[]|int|int[] $numberOfAxles
     *
     * @return static
     *
     * @see https://schema.org/numberOfAxles
     */
    public function numberOfAxles($numberOfAxles)
    {
        return $this->setProperty('numberOfAxles', $numberOfAxles);
    }

    /**
     * The number of doors.
     * 
     * Typical unit code(s): C62.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[]|float|float[]|int|int[] $numberOfDoors
     *
     * @return static
     *
     * @see https://schema.org/numberOfDoors
     */
    public function numberOfDoors($numberOfDoors)
    {
        return $this->setProperty('numberOfDoors', $numberOfDoors);
    }

    /**
     * The total number of forward gears available for the transmission system
     * of the vehicle.
     * 
     * Typical unit code(s): C62.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[]|float|float[]|int|int[] $numberOfForwardGears
     *
     * @return static
     *
     * @see https://schema.org/numberOfForwardGears
     */
    public function numberOfForwardGears($numberOfForwardGears)
    {
        return $this->setProperty('numberOfForwardGears', $numberOfForwardGears);
    }

    /**
     * The number of owners of the vehicle, including the current one.
     * 
     * Typical unit code(s): C62.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[]|float|float[]|int|int[] $numberOfPreviousOwners
     *
     * @return static
     *
     * @see https://schema.org/numberOfPreviousOwners
     */
    public function numberOfPreviousOwners($numberOfPreviousOwners)
    {
        return $this->setProperty('numberOfPreviousOwners', $numberOfPreviousOwners);
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
     * A pattern that something has, for example 'polka dot', 'striped',
     * 'Canadian flag'. Values are typically expressed as text, although links
     * to controlled value schemes are also supported.
     *
     * @param \Municipio\Schema\Contracts\DefinedTermContract|\Municipio\Schema\Contracts\DefinedTermContract[]|string|string[] $pattern
     *
     * @return static
     *
     * @see https://schema.org/pattern
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1797
     */
    public function pattern($pattern)
    {
        return $this->setProperty('pattern', $pattern);
    }

    /**
     * The permitted weight of passengers and cargo, EXCLUDING the weight of the
     * empty vehicle.
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * 
     * * Note 1: Many databases specify the permitted TOTAL weight instead,
     * which is the sum of [[weight]] and [[payload]]
     * * Note 2: You can indicate additional information in the [[name]] of the
     * [[QuantitativeValue]] node.
     * * Note 3: You may also link to a [[QualitativeValue]] node that provides
     * additional information using [[valueReference]].
     * * Note 4: Note that you can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $payload
     *
     * @return static
     *
     * @see https://schema.org/payload
     * @see https://auto.schema.org
     */
    public function payload($payload)
    {
        return $this->setProperty('payload', $payload);
    }

    /**
     * Provides positive considerations regarding something, for example product
     * highlights or (alongside [[negativeNotes]]) pro/con lists for reviews.
     * 
     * In the case of a [[Review]], the property describes the [[itemReviewed]]
     * from the perspective of the review; in the case of a [[Product]], the
     * product itself is being described.
     * 
     * The property values can be expressed either as unstructured text
     * (repeated as necessary), or if ordered, as a list (in which case the most
     * positive is at the beginning of the list).
     *
     * @param \Municipio\Schema\Contracts\ItemListContract|\Municipio\Schema\Contracts\ItemListContract[]|\Municipio\Schema\Contracts\ListItemContract|\Municipio\Schema\Contracts\ListItemContract[]|\Municipio\Schema\Contracts\WebContentContract|\Municipio\Schema\Contracts\WebContentContract[]|string|string[] $positiveNotes
     *
     * @return static
     *
     * @see https://schema.org/positiveNotes
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2832
     */
    public function positiveNotes($positiveNotes)
    {
        return $this->setProperty('positiveNotes', $positiveNotes);
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
     * The product identifier, such as ISBN. For example: ``` meta
     * itemprop="productID" content="isbn:123-456-789" ```.
     *
     * @param string|string[] $productID
     *
     * @return static
     *
     * @see https://schema.org/productID
     */
    public function productID($productID)
    {
        return $this->setProperty('productID', $productID);
    }

    /**
     * The date of production of the item, e.g. vehicle.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $productionDate
     *
     * @return static
     *
     * @see https://schema.org/productionDate
     */
    public function productionDate($productionDate)
    {
        return $this->setProperty('productionDate', $productionDate);
    }

    /**
     * The date the item, e.g. vehicle, was purchased by the current owner.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $purchaseDate
     *
     * @return static
     *
     * @see https://schema.org/purchaseDate
     */
    public function purchaseDate($purchaseDate)
    {
        return $this->setProperty('purchaseDate', $purchaseDate);
    }

    /**
     * The release date of a product or product model. This can be used to
     * distinguish the exact variant of a product.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $releaseDate
     *
     * @return static
     *
     * @see https://schema.org/releaseDate
     */
    public function releaseDate($releaseDate)
    {
        return $this->setProperty('releaseDate', $releaseDate);
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
     * The number of persons that can be seated (e.g. in a vehicle), both in
     * terms of the physical space available, and in terms of limitations set by
     * law.
     * 
     * Typical unit code(s): C62 for persons.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[]|float|float[]|int|int[] $seatingCapacity
     *
     * @return static
     *
     * @see https://schema.org/seatingCapacity
     * @see https://auto.schema.org
     */
    public function seatingCapacity($seatingCapacity)
    {
        return $this->setProperty('seatingCapacity', $seatingCapacity);
    }

    /**
     * A standardized size of a product or creative work, specified either
     * through a simple textual string (for example 'XL', '32Wx34L'), a 
     * QuantitativeValue with a unitCode, or a comprehensive and structured
     * [[SizeSpecification]]; in other cases, the [[width]], [[height]],
     * [[depth]] and [[weight]] properties may be more applicable.
     *
     * @param \Municipio\Schema\Contracts\DefinedTermContract|\Municipio\Schema\Contracts\DefinedTermContract[]|\Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[]|\Municipio\Schema\Contracts\SizeSpecificationContract|\Municipio\Schema\Contracts\SizeSpecificationContract[]|string|string[] $size
     *
     * @return static
     *
     * @see https://schema.org/size
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1797
     */
    public function size($size)
    {
        return $this->setProperty('size', $size);
    }

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a
     * product or service, or the product to which the offer refers.
     *
     * @param string|string[] $sku
     *
     * @return static
     *
     * @see https://schema.org/sku
     */
    public function sku($sku)
    {
        return $this->setProperty('sku', $sku);
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
     * The speed range of the vehicle. If the vehicle is powered by an engine,
     * the upper limit of the speed range (indicated by [[maxValue]]) should be
     * the maximum speed achievable under regular conditions.
     * 
     * Typical unit code(s): KMH for km/h, HM for mile per hour (0.447 04 m/s),
     * KNT for knot
     * 
     * *Note 1: Use [[minValue]] and [[maxValue]] to indicate the range.
     * Typically, the minimal value is zero.
     * * Note 2: There are many different ways of measuring the speed range. You
     * can link to information about how the given value has been determined
     * using the [[valueReference]] property.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $speed
     *
     * @return static
     *
     * @see https://schema.org/speed
     * @see https://auto.schema.org
     */
    public function speed($speed)
    {
        return $this->setProperty('speed', $speed);
    }

    /**
     * The position of the steering wheel or similar device (mostly for cars).
     *
     * @param \Municipio\Schema\Contracts\SteeringPositionValueContract|\Municipio\Schema\Contracts\SteeringPositionValueContract[] $steeringPosition
     *
     * @return static
     *
     * @see https://schema.org/steeringPosition
     */
    public function steeringPosition($steeringPosition)
    {
        return $this->setProperty('steeringPosition', $steeringPosition);
    }

    /**
     * This is a StupidProperty! - for testing only.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $stupidProperty
     *
     * @return static
     *
     * @see https://schema.org/stupidProperty
     * @see https://attic.schema.org
     */
    public function stupidProperty($stupidProperty)
    {
        return $this->setProperty('stupidProperty', $stupidProperty);
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
     * The permitted vertical load (TWR) of a trailer attached to the vehicle.
     * Also referred to as Tongue Load Rating (TLR) or Vertical Load Rating
     * (VLR).
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * 
     * * Note 1: You can indicate additional information in the [[name]] of the
     * [[QuantitativeValue]] node.
     * * Note 2: You may also link to a [[QualitativeValue]] node that provides
     * additional information using [[valueReference]].
     * * Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $tongueWeight
     *
     * @return static
     *
     * @see https://schema.org/tongueWeight
     * @see https://auto.schema.org
     */
    public function tongueWeight($tongueWeight)
    {
        return $this->setProperty('tongueWeight', $tongueWeight);
    }

    /**
     * The permitted weight of a trailer attached to the vehicle.
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * * Note 1: You can indicate additional information in the [[name]] of the
     * [[QuantitativeValue]] node.
     * * Note 2: You may also link to a [[QualitativeValue]] node that provides
     * additional information using [[valueReference]].
     * * Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $trailerWeight
     *
     * @return static
     *
     * @see https://schema.org/trailerWeight
     * @see https://auto.schema.org
     */
    public function trailerWeight($trailerWeight)
    {
        return $this->setProperty('trailerWeight', $trailerWeight);
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
     * A short text indicating the configuration of the vehicle, e.g. '5dr
     * hatchback ST 2.5 MT 225 hp' or 'limited edition'.
     *
     * @param string|string[] $vehicleConfiguration
     *
     * @return static
     *
     * @see https://schema.org/vehicleConfiguration
     */
    public function vehicleConfiguration($vehicleConfiguration)
    {
        return $this->setProperty('vehicleConfiguration', $vehicleConfiguration);
    }

    /**
     * Information about the engine or engines of the vehicle.
     *
     * @param \Municipio\Schema\Contracts\EngineSpecificationContract|\Municipio\Schema\Contracts\EngineSpecificationContract[] $vehicleEngine
     *
     * @return static
     *
     * @see https://schema.org/vehicleEngine
     */
    public function vehicleEngine($vehicleEngine)
    {
        return $this->setProperty('vehicleEngine', $vehicleEngine);
    }

    /**
     * The Vehicle Identification Number (VIN) is a unique serial number used by
     * the automotive industry to identify individual motor vehicles.
     *
     * @param string|string[] $vehicleIdentificationNumber
     *
     * @return static
     *
     * @see https://schema.org/vehicleIdentificationNumber
     */
    public function vehicleIdentificationNumber($vehicleIdentificationNumber)
    {
        return $this->setProperty('vehicleIdentificationNumber', $vehicleIdentificationNumber);
    }

    /**
     * The color or color combination of the interior of the vehicle.
     *
     * @param string|string[] $vehicleInteriorColor
     *
     * @return static
     *
     * @see https://schema.org/vehicleInteriorColor
     */
    public function vehicleInteriorColor($vehicleInteriorColor)
    {
        return $this->setProperty('vehicleInteriorColor', $vehicleInteriorColor);
    }

    /**
     * The type or material of the interior of the vehicle (e.g. synthetic
     * fabric, leather, wood, etc.). While most interior types are characterized
     * by the material used, an interior type can also be based on vehicle usage
     * or target audience.
     *
     * @param string|string[] $vehicleInteriorType
     *
     * @return static
     *
     * @see https://schema.org/vehicleInteriorType
     */
    public function vehicleInteriorType($vehicleInteriorType)
    {
        return $this->setProperty('vehicleInteriorType', $vehicleInteriorType);
    }

    /**
     * The release date of a vehicle model (often used to differentiate versions
     * of the same make and model).
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $vehicleModelDate
     *
     * @return static
     *
     * @see https://schema.org/vehicleModelDate
     */
    public function vehicleModelDate($vehicleModelDate)
    {
        return $this->setProperty('vehicleModelDate', $vehicleModelDate);
    }

    /**
     * The number of passengers that can be seated in the vehicle, both in terms
     * of the physical space available, and in terms of limitations set by law.
     * 
     * Typical unit code(s): C62 for persons.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[]|float|float[]|int|int[] $vehicleSeatingCapacity
     *
     * @return static
     *
     * @see https://schema.org/vehicleSeatingCapacity
     */
    public function vehicleSeatingCapacity($vehicleSeatingCapacity)
    {
        return $this->setProperty('vehicleSeatingCapacity', $vehicleSeatingCapacity);
    }

    /**
     * Indicates whether the vehicle has been used for special purposes, like
     * commercial rental, driving school, or as a taxi. The legislation in many
     * countries requires this information to be revealed when offering a car
     * for sale.
     *
     * @param \Municipio\Schema\Contracts\CarUsageTypeContract|\Municipio\Schema\Contracts\CarUsageTypeContract[]|string|string[] $vehicleSpecialUsage
     *
     * @return static
     *
     * @see https://schema.org/vehicleSpecialUsage
     * @see https://auto.schema.org
     */
    public function vehicleSpecialUsage($vehicleSpecialUsage)
    {
        return $this->setProperty('vehicleSpecialUsage', $vehicleSpecialUsage);
    }

    /**
     * The type of component used for transmitting the power from a rotating
     * power source to the wheels or other relevant component(s) ("gearbox" for
     * cars).
     *
     * @param \Municipio\Schema\Contracts\QualitativeValueContract|\Municipio\Schema\Contracts\QualitativeValueContract[]|string|string[] $vehicleTransmission
     *
     * @return static
     *
     * @see https://schema.org/vehicleTransmission
     */
    public function vehicleTransmission($vehicleTransmission)
    {
        return $this->setProperty('vehicleTransmission', $vehicleTransmission);
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
     * The permitted total weight of the loaded vehicle, including passengers
     * and cargo and the weight of the empty vehicle.
     * 
     * Typical unit code(s): KGM for kilogram, LBR for pound
     * 
     * * Note 1: You can indicate additional information in the [[name]] of the
     * [[QuantitativeValue]] node.
     * * Note 2: You may also link to a [[QualitativeValue]] node that provides
     * additional information using [[valueReference]].
     * * Note 3: Note that you can use [[minValue]] and [[maxValue]] to indicate
     * ranges.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $weightTotal
     *
     * @return static
     *
     * @see https://schema.org/weightTotal
     * @see https://auto.schema.org
     */
    public function weightTotal($weightTotal)
    {
        return $this->setProperty('weightTotal', $weightTotal);
    }

    /**
     * The distance between the centers of the front and rear wheels.
     * 
     * Typical unit code(s): CMT for centimeters, MTR for meters, INH for
     * inches, FOT for foot/feet.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[] $wheelbase
     *
     * @return static
     *
     * @see https://schema.org/wheelbase
     * @see https://auto.schema.org
     */
    public function wheelbase($wheelbase)
    {
        return $this->setProperty('wheelbase', $wheelbase);
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
