<?php

namespace Municipio\Schema;

use \Municipio\Schema\Contracts\ActionAccessSpecificationContract;
use \Municipio\Schema\Contracts\IntangibleContract;
use \Municipio\Schema\Contracts\ThingContract;

/**
 * A set of requirements that must be fulfilled in order to perform an Action.
 *
 * @see https://schema.org/ActionAccessSpecification
 * @link https://github.com/schemaorg/schemaorg/issues/1741
 *
 */
class ActionAccessSpecification extends BaseType implements ActionAccessSpecificationContract, IntangibleContract, ThingContract
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
     * The end of the availability of the product or service included in the
     * offer.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $availabilityEnds
     *
     * @return static
     *
     * @see https://schema.org/availabilityEnds
     * @link https://github.com/schemaorg/schemaorg/issues/1741
     */
    public function availabilityEnds($availabilityEnds)
    {
        return $this->setProperty('availabilityEnds', $availabilityEnds);
    }

    /**
     * The beginning of the availability of the product or service included in
     * the offer.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $availabilityStarts
     *
     * @return static
     *
     * @see https://schema.org/availabilityStarts
     * @link https://github.com/schemaorg/schemaorg/issues/1741
     */
    public function availabilityStarts($availabilityStarts)
    {
        return $this->setProperty('availabilityStarts', $availabilityStarts);
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
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery
     * charge specification is valid.
     * 
     * See also [[ineligibleRegion]].
     *
     * @param \Municipio\Schema\Contracts\GeoShapeContract|\Municipio\Schema\Contracts\GeoShapeContract[]|\Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[]|string|string[] $eligibleRegion
     *
     * @return static
     *
     * @see https://schema.org/eligibleRegion
     * @link https://github.com/schemaorg/schemaorg/issues/1741
     */
    public function eligibleRegion($eligibleRegion)
    {
        return $this->setProperty('eligibleRegion', $eligibleRegion);
    }

    /**
     * An Offer which must be accepted before the user can perform the Action.
     * For example, the user may need to buy a movie before being able to watch
     * it.
     *
     * @param \Municipio\Schema\Contracts\OfferContract|\Municipio\Schema\Contracts\OfferContract[] $expectsAcceptanceOf
     *
     * @return static
     *
     * @see https://schema.org/expectsAcceptanceOf
     * @link https://github.com/schemaorg/schemaorg/issues/1741
     */
    public function expectsAcceptanceOf($expectsAcceptanceOf)
    {
        return $this->setProperty('expectsAcceptanceOf', $expectsAcceptanceOf);
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
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery
     * charge specification is not valid, e.g. a region where the transaction is
     * not allowed.
     * 
     * See also [[eligibleRegion]].
     *
     * @param \Municipio\Schema\Contracts\GeoShapeContract|\Municipio\Schema\Contracts\GeoShapeContract[]|\Municipio\Schema\Contracts\PlaceContract|\Municipio\Schema\Contracts\PlaceContract[]|string|string[] $ineligibleRegion
     *
     * @return static
     *
     * @see https://schema.org/ineligibleRegion
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2242
     */
    public function ineligibleRegion($ineligibleRegion)
    {
        return $this->setProperty('ineligibleRegion', $ineligibleRegion);
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
     * Indicates if use of the media require a subscription  (either paid or
     * free). Allowed values are ```true``` or ```false``` (note that an earlier
     * version had 'yes', 'no').
     *
     * @param \Municipio\Schema\Contracts\MediaSubscriptionContract|\Municipio\Schema\Contracts\MediaSubscriptionContract[]|bool|bool[] $requiresSubscription
     *
     * @return static
     *
     * @see https://schema.org/requiresSubscription
     * @link https://github.com/schemaorg/schemaorg/issues/1741
     */
    public function requiresSubscription($requiresSubscription)
    {
        return $this->setProperty('requiresSubscription', $requiresSubscription);
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
