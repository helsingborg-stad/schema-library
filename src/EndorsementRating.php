<?php

namespace Municipio\Schema;

use \Municipio\Schema\Contracts\EndorsementRatingContract;
use \Municipio\Schema\Contracts\IntangibleContract;
use \Municipio\Schema\Contracts\RatingContract;
use \Municipio\Schema\Contracts\ThingContract;

/**
 * An EndorsementRating is a rating that expresses some level of endorsement,
 * for example inclusion in a "critic's pick" blog, a
 * "Like" or "+1" on a social network. It can be considered the [[result]] of an
 * [[EndorseAction]] in which the [[object]] of the action is rated positively
 * by
 * some [[agent]]. As is common elsewhere in schema.org, it is sometimes more
 * useful to describe the results of such an action without explicitly
 * describing the [[Action]].
 * 
 * An [[EndorsementRating]] may be part of a numeric scale or organized system,
 * but this is not required: having an explicit type for indicating a positive,
 * endorsement rating is particularly useful in the absence of numeric scales as
 * it helps consumers understand that the rating is broadly positive.
 *
 * @see https://schema.org/EndorsementRating
 * @link https://github.com/schemaorg/schemaorg/issues/1293
 *
 */
class EndorsementRating extends BaseType implements EndorsementRatingContract, IntangibleContract, RatingContract, ThingContract
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
     * The author of this content or rating. Please note that author is special
     * in that HTML 5 provides a special mechanism for indicating authorship via
     * the rel tag. That is equivalent to this and may be used interchangeably.
     *
     * @param \Municipio\Schema\Contracts\OrganizationContract|\Municipio\Schema\Contracts\OrganizationContract[]|\Municipio\Schema\Contracts\PersonContract|\Municipio\Schema\Contracts\PersonContract[] $author
     *
     * @return static
     *
     * @see https://schema.org/author
     */
    public function author($author)
    {
        return $this->setProperty('author', $author);
    }

    /**
     * The highest value allowed in this rating system.
     *
     * @param float|float[]|int|int[]|string|string[] $bestRating
     *
     * @return static
     *
     * @see https://schema.org/bestRating
     */
    public function bestRating($bestRating)
    {
        return $this->setProperty('bestRating', $bestRating);
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
     * A short explanation (e.g. one to two sentences) providing background
     * context and other information that led to the conclusion expressed in the
     * rating. This is particularly applicable to ratings associated with "fact
     * check" markup using [[ClaimReview]].
     *
     * @param string|string[] $ratingExplanation
     *
     * @return static
     *
     * @see https://schema.org/ratingExplanation
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2300
     */
    public function ratingExplanation($ratingExplanation)
    {
        return $this->setProperty('ratingExplanation', $ratingExplanation);
    }

    /**
     * The rating for the content.
     * 
     * Usage guidelines:
     * 
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
     * decimal point. Avoid using these symbols as a readability separator.
     *
     * @param float|float[]|int|int[]|string|string[] $ratingValue
     *
     * @return static
     *
     * @see https://schema.org/ratingValue
     */
    public function ratingValue($ratingValue)
    {
        return $this->setProperty('ratingValue', $ratingValue);
    }

    /**
     * This Review or Rating is relevant to this part or facet of the
     * itemReviewed.
     *
     * @param string|string[] $reviewAspect
     *
     * @return static
     *
     * @see https://schema.org/reviewAspect
     * @link https://github.com/schemaorg/schemaorg/issues/1689
     */
    public function reviewAspect($reviewAspect)
    {
        return $this->setProperty('reviewAspect', $reviewAspect);
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

    /**
     * The lowest value allowed in this rating system.
     *
     * @param float|float[]|int|int[]|string|string[] $worstRating
     *
     * @return static
     *
     * @see https://schema.org/worstRating
     */
    public function worstRating($worstRating)
    {
        return $this->setProperty('worstRating', $worstRating);
    }

}
