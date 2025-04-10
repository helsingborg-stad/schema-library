<?php

namespace Municipio\Schema;

use \Municipio\Schema\Contracts\RentalCarReservationContract;
use \Municipio\Schema\Contracts\IntangibleContract;
use \Municipio\Schema\Contracts\ReservationContract;
use \Municipio\Schema\Contracts\ThingContract;

/**
 * A reservation for a rental car.
 * 
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations.
 *
 * @see https://schema.org/RentalCarReservation
 *
 */
class RentalCarReservation extends BaseType implements RentalCarReservationContract, IntangibleContract, ReservationContract, ThingContract
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
     * 'bookingAgent' is an out-dated term indicating a 'broker' that serves as
     * a booking agent.
     *
     * @param \Municipio\Schema\Contracts\OrganizationContract|\Municipio\Schema\Contracts\OrganizationContract[]|\Municipio\Schema\Contracts\PersonContract|\Municipio\Schema\Contracts\PersonContract[] $bookingAgent
     *
     * @return static
     *
     * @see https://schema.org/bookingAgent
     */
    public function bookingAgent($bookingAgent)
    {
        return $this->setProperty('bookingAgent', $bookingAgent);
    }

    /**
     * The date and time the reservation was booked.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $bookingTime
     *
     * @return static
     *
     * @see https://schema.org/bookingTime
     */
    public function bookingTime($bookingTime)
    {
        return $this->setProperty('bookingTime', $bookingTime);
    }

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In
     * most cases a broker never acquires or releases ownership of a product or
     * service involved in an exchange.  If it is not clear whether an entity is
     * a broker, seller, or buyer, the latter two terms are preferred.
     *
     * @param \Municipio\Schema\Contracts\OrganizationContract|\Municipio\Schema\Contracts\OrganizationContract[]|\Municipio\Schema\Contracts\PersonContract|\Municipio\Schema\Contracts\PersonContract[] $broker
     *
     * @return static
     *
     * @see https://schema.org/broker
     */
    public function broker($broker)
    {
        return $this->setProperty('broker', $broker);
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
     * Where a rental car can be dropped off.
     *
     * @param \Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[] $dropoffLocation
     *
     * @return static
     *
     * @see https://schema.org/dropoffLocation
     */
    public function dropoffLocation($dropoffLocation)
    {
        return $this->setProperty('dropoffLocation', $dropoffLocation);
    }

    /**
     * When a rental car can be dropped off.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dropoffTime
     *
     * @return static
     *
     * @see https://schema.org/dropoffTime
     */
    public function dropoffTime($dropoffTime)
    {
        return $this->setProperty('dropoffTime', $dropoffTime);
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
     * The date and time the reservation was modified.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $modifiedTime
     *
     * @return static
     *
     * @see https://schema.org/modifiedTime
     */
    public function modifiedTime($modifiedTime)
    {
        return $this->setProperty('modifiedTime', $modifiedTime);
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
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     *
     * @param \Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[] $pickupLocation
     *
     * @return static
     *
     * @see https://schema.org/pickupLocation
     */
    public function pickupLocation($pickupLocation)
    {
        return $this->setProperty('pickupLocation', $pickupLocation);
    }

    /**
     * When a taxi will pick up a passenger or a rental car can be picked up.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $pickupTime
     *
     * @return static
     *
     * @see https://schema.org/pickupTime
     */
    public function pickupTime($pickupTime)
    {
        return $this->setProperty('pickupTime', $pickupTime);
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
     * The currency of the price, or a price component when attached to
     * [[PriceSpecification]] and its subtypes.
     * 
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange
     * Trading
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system)
     * (LETS) and other currency types, e.g. "Ithaca HOUR".
     *
     * @param string|string[] $priceCurrency
     *
     * @return static
     *
     * @see https://schema.org/priceCurrency
     */
    public function priceCurrency($priceCurrency)
    {
        return $this->setProperty('priceCurrency', $priceCurrency);
    }

    /**
     * Any membership in a frequent flyer, hotel loyalty program, etc. being
     * applied to the reservation.
     *
     * @param \Municipio\Schema\Contracts\ProgramMembershipContract|\Municipio\Schema\Contracts\ProgramMembershipContract[] $programMembershipUsed
     *
     * @return static
     *
     * @see https://schema.org/programMembershipUsed
     */
    public function programMembershipUsed($programMembershipUsed)
    {
        return $this->setProperty('programMembershipUsed', $programMembershipUsed);
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
     * The thing -- flight, event, restaurant, etc. being reserved.
     *
     * @param \Municipio\Schema\Contracts\ThingContract|\Municipio\Schema\Contracts\ThingContract[] $reservationFor
     *
     * @return static
     *
     * @see https://schema.org/reservationFor
     */
    public function reservationFor($reservationFor)
    {
        return $this->setProperty('reservationFor', $reservationFor);
    }

    /**
     * A unique identifier for the reservation.
     *
     * @param string|string[] $reservationId
     *
     * @return static
     *
     * @see https://schema.org/reservationId
     */
    public function reservationId($reservationId)
    {
        return $this->setProperty('reservationId', $reservationId);
    }

    /**
     * The current status of the reservation.
     *
     * @param \Municipio\Schema\Contracts\ReservationStatusTypeContract|\Municipio\Schema\Contracts\ReservationStatusTypeContract[] $reservationStatus
     *
     * @return static
     *
     * @see https://schema.org/reservationStatus
     */
    public function reservationStatus($reservationStatus)
    {
        return $this->setProperty('reservationStatus', $reservationStatus);
    }

    /**
     * A ticket associated with the reservation.
     *
     * @param \Municipio\Schema\Contracts\TicketContract|\Municipio\Schema\Contracts\TicketContract[] $reservedTicket
     *
     * @return static
     *
     * @see https://schema.org/reservedTicket
     */
    public function reservedTicket($reservedTicket)
    {
        return $this->setProperty('reservedTicket', $reservedTicket);
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
     * The total price for the reservation or ticket, including applicable
     * taxes, shipping, etc.
     * 
     * Usage guidelines:
     * 
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
     * decimal point. Avoid using these symbols as a readability separator.
     *
     * @param \Municipio\Schema\Contracts\PriceSpecificationContract|\Municipio\Schema\Contracts\PriceSpecificationContract[]|float|float[]|int|int[]|string|string[] $totalPrice
     *
     * @return static
     *
     * @see https://schema.org/totalPrice
     */
    public function totalPrice($totalPrice)
    {
        return $this->setProperty('totalPrice', $totalPrice);
    }

    /**
     * The person or organization the reservation or ticket is for.
     *
     * @param \Municipio\Schema\Contracts\OrganizationContract|\Municipio\Schema\Contracts\OrganizationContract[]|\Municipio\Schema\Contracts\PersonContract|\Municipio\Schema\Contracts\PersonContract[] $underName
     *
     * @return static
     *
     * @see https://schema.org/underName
     */
    public function underName($underName)
    {
        return $this->setProperty('underName', $underName);
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
