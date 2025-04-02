<?php

namespace Municipio\Schema;

use \Municipio\Schema\Contracts\OrderItemContract;
use \Municipio\Schema\Contracts\IntangibleContract;
use \Municipio\Schema\Contracts\ThingContract;

/**
 * An order item is a line of an order. It includes the quantity and shipping
 * details of a bought offer.
 *
 * @see https://schema.org/OrderItem
 *
 */
class OrderItem extends BaseType implements OrderItemContract, IntangibleContract, ThingContract
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
     * The delivery of the parcel related to this order or order item.
     *
     * @param \Municipio\Schema\Contracts\ParcelDeliveryContract|\Municipio\Schema\Contracts\ParcelDeliveryContract[] $orderDelivery
     *
     * @return static
     *
     * @see https://schema.org/orderDelivery
     */
    public function orderDelivery($orderDelivery)
    {
        return $this->setProperty('orderDelivery', $orderDelivery);
    }

    /**
     * The identifier of the order item.
     *
     * @param string|string[] $orderItemNumber
     *
     * @return static
     *
     * @see https://schema.org/orderItemNumber
     */
    public function orderItemNumber($orderItemNumber)
    {
        return $this->setProperty('orderItemNumber', $orderItemNumber);
    }

    /**
     * The current status of the order item.
     *
     * @param \Municipio\Schema\Contracts\OrderStatusContract|\Municipio\Schema\Contracts\OrderStatusContract[] $orderItemStatus
     *
     * @return static
     *
     * @see https://schema.org/orderItemStatus
     */
    public function orderItemStatus($orderItemStatus)
    {
        return $this->setProperty('orderItemStatus', $orderItemStatus);
    }

    /**
     * The number of the item ordered. If the property is not set, assume the
     * quantity is one.
     *
     * @param \Municipio\Schema\Contracts\QuantitativeValueContract|\Municipio\Schema\Contracts\QuantitativeValueContract[]|float|float[]|int|int[] $orderQuantity
     *
     * @return static
     *
     * @see https://schema.org/orderQuantity
     */
    public function orderQuantity($orderQuantity)
    {
        return $this->setProperty('orderQuantity', $orderQuantity);
    }

    /**
     * The item ordered.
     *
     * @param \Municipio\Schema\Contracts\OrderItemContract|\Municipio\Schema\Contracts\OrderItemContract[]|\Municipio\Schema\Contracts\ProductContract|\Municipio\Schema\Contracts\ProductContract[]|\Municipio\Schema\Contracts\ServiceContract|\Municipio\Schema\Contracts\ServiceContract[] $orderedItem
     *
     * @return static
     *
     * @see https://schema.org/orderedItem
     */
    public function orderedItem($orderedItem)
    {
        return $this->setProperty('orderedItem', $orderedItem);
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
