<?php

/**
 * SEOmatic plugin for Craft CMS 3
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful, and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2023 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\MetaJsonLd;

/**
 * schema.org version: v15.0-release
 * SoftwareApplication - A software application.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/SoftwareApplication
 */
class SoftwareApplication extends MetaJsonLd implements SoftwareApplicationInterface, CreativeWorkInterface, ThingInterface
{
    use SoftwareApplicationTrait;
    use CreativeWorkTrait;
    use ThingTrait;

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    public static $schemaTypeName = 'SoftwareApplication';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    public static $schemaTypeScope = 'https://schema.org/SoftwareApplication';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    public static $schemaTypeExtends = 'CreativeWork';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    public static $schemaTypeDescription = 'A software application.';


    /**
     * @inheritdoc
     */
    public function getSchemaPropertyNames(): array
    {
        return array_keys($this->getSchemaPropertyExpectedTypes());
    }


    /**
     * @inheritdoc
     */
    public function getSchemaPropertyExpectedTypes(): array
    {
        return [
            'about' => ['Thing'],
            'abstract' => ['Text'],
            'accessMode' => ['Text'],
            'accessModeSufficient' => ['ItemList'],
            'accessibilityAPI' => ['Text'],
            'accessibilityControl' => ['Text'],
            'accessibilityFeature' => ['Text'],
            'accessibilityHazard' => ['Text'],
            'accessibilitySummary' => ['Text'],
            'accountablePerson' => ['Person'],
            'acquireLicensePage' => ['CreativeWork', 'URL'],
            'additionalType' => ['URL'],
            'aggregateRating' => ['AggregateRating'],
            'alternateName' => ['Text'],
            'alternativeHeadline' => ['Text'],
            'applicationCategory' => ['URL', 'Text'],
            'applicationSubCategory' => ['URL', 'Text'],
            'applicationSuite' => ['Text'],
            'archivedAt' => ['WebPage', 'URL'],
            'assesses' => ['DefinedTerm', 'Text'],
            'associatedMedia' => ['MediaObject'],
            'audience' => ['Audience'],
            'audio' => ['MusicRecording', 'AudioObject', 'Clip'],
            'author' => ['Organization', 'Person'],
            'availableOnDevice' => ['Text'],
            'award' => ['Text'],
            'awards' => ['Text'],
            'character' => ['Person'],
            'citation' => ['CreativeWork', 'Text'],
            'comment' => ['Comment'],
            'commentCount' => ['Integer'],
            'conditionsOfAccess' => ['Text'],
            'contentLocation' => ['Place'],
            'contentRating' => ['Text', 'Rating'],
            'contentReferenceTime' => ['DateTime'],
            'contributor' => ['Organization', 'Person'],
            'copyrightHolder' => ['Organization', 'Person'],
            'copyrightNotice' => ['Text'],
            'copyrightYear' => ['Number'],
            'correction' => ['URL', 'Text', 'CorrectionComment'],
            'countriesNotSupported' => ['Text'],
            'countriesSupported' => ['Text'],
            'countryOfOrigin' => ['Country'],
            'creativeWorkStatus' => ['DefinedTerm', 'Text'],
            'creator' => ['Person', 'Organization'],
            'creditText' => ['Text'],
            'dateCreated' => ['DateTime', 'Date'],
            'dateModified' => ['DateTime', 'Date'],
            'datePublished' => ['DateTime', 'Date'],
            'description' => ['Text'],
            'device' => ['Text'],
            'disambiguatingDescription' => ['Text'],
            'discussionUrl' => ['URL'],
            'downloadUrl' => ['URL'],
            'editEIDR' => ['URL', 'Text'],
            'editor' => ['Person'],
            'educationalAlignment' => ['AlignmentObject'],
            'educationalLevel' => ['Text', 'URL', 'DefinedTerm'],
            'educationalUse' => ['DefinedTerm', 'Text'],
            'encoding' => ['MediaObject'],
            'encodingFormat' => ['URL', 'Text'],
            'encodings' => ['MediaObject'],
            'exampleOfWork' => ['CreativeWork'],
            'expires' => ['Date', 'DateTime'],
            'featureList' => ['URL', 'Text'],
            'fileFormat' => ['Text', 'URL'],
            'fileSize' => ['Text'],
            'funder' => ['Organization', 'Person'],
            'funding' => ['Grant'],
            'genre' => ['Text', 'URL'],
            'hasPart' => ['CreativeWork'],
            'headline' => ['Text'],
            'identifier' => ['PropertyValue', 'URL', 'Text'],
            'image' => ['URL', 'ImageObject'],
            'inLanguage' => ['Text', 'Language'],
            'installUrl' => ['URL'],
            'interactionStatistic' => ['InteractionCounter'],
            'interactivityType' => ['Text'],
            'interpretedAsClaim' => ['Claim'],
            'isAccessibleForFree' => ['Boolean'],
            'isBasedOn' => ['URL', 'Product', 'CreativeWork'],
            'isBasedOnUrl' => ['URL', 'Product', 'CreativeWork'],
            'isFamilyFriendly' => ['Boolean'],
            'isPartOf' => ['URL', 'CreativeWork'],
            'keywords' => ['URL', 'DefinedTerm', 'Text'],
            'learningResourceType' => ['DefinedTerm', 'Text'],
            'license' => ['URL', 'CreativeWork'],
            'locationCreated' => ['Place'],
            'mainEntity' => ['Thing'],
            'mainEntityOfPage' => ['URL', 'CreativeWork'],
            'maintainer' => ['Person', 'Organization'],
            'material' => ['Product', 'URL', 'Text'],
            'materialExtent' => ['QuantitativeValue', 'Text'],
            'memoryRequirements' => ['Text', 'URL'],
            'mentions' => ['Thing'],
            'name' => ['Text'],
            'offers' => ['Demand', 'Offer'],
            'operatingSystem' => ['Text'],
            'pattern' => ['DefinedTerm', 'Text'],
            'permissions' => ['Text'],
            'position' => ['Text', 'Integer'],
            'potentialAction' => ['Action'],
            'processorRequirements' => ['Text'],
            'producer' => ['Organization', 'Person'],
            'provider' => ['Organization', 'Person'],
            'publication' => ['PublicationEvent'],
            'publisher' => ['Organization', 'Person'],
            'publisherImprint' => ['Organization'],
            'publishingPrinciples' => ['CreativeWork', 'URL'],
            'recordedAt' => ['Event'],
            'releaseNotes' => ['Text', 'URL'],
            'releasedEvent' => ['PublicationEvent'],
            'requirements' => ['Text', 'URL'],
            'review' => ['Review'],
            'reviews' => ['Review'],
            'sameAs' => ['URL'],
            'schemaVersion' => ['URL', 'Text'],
            'screenshot' => ['URL', 'ImageObject'],
            'sdDatePublished' => ['Date'],
            'sdLicense' => ['CreativeWork', 'URL'],
            'sdPublisher' => ['Organization', 'Person'],
            'size' => ['DefinedTerm', 'QuantitativeValue', 'Text', 'SizeSpecification'],
            'softwareAddOn' => ['SoftwareApplication'],
            'softwareHelp' => ['CreativeWork'],
            'softwareRequirements' => ['Text', 'URL'],
            'softwareVersion' => ['Text'],
            'sourceOrganization' => ['Organization'],
            'spatial' => ['Place'],
            'spatialCoverage' => ['Place'],
            'sponsor' => ['Organization', 'Person'],
            'storageRequirements' => ['URL', 'Text'],
            'subjectOf' => ['Event', 'CreativeWork'],
            'supportingData' => ['DataFeed'],
            'teaches' => ['DefinedTerm', 'Text'],
            'temporal' => ['DateTime', 'Text'],
            'temporalCoverage' => ['URL', 'Text', 'DateTime'],
            'text' => ['Text'],
            'thumbnailUrl' => ['URL'],
            'timeRequired' => ['Duration'],
            'translationOfWork' => ['CreativeWork'],
            'translator' => ['Organization', 'Person'],
            'typicalAgeRange' => ['Text'],
            'url' => ['URL'],
            'usageInfo' => ['URL', 'CreativeWork'],
            'version' => ['Number', 'Text'],
            'video' => ['VideoObject', 'Clip'],
            'workExample' => ['CreativeWork'],
            'workTranslation' => ['CreativeWork'],
        ];
    }


    /**
     * @inheritdoc
     */
    public function getSchemaPropertyDescriptions(): array
    {
        return [
            'about' => 'The subject matter of the content.',
            'abstract' => 'An abstract is a short description that summarizes a [[CreativeWork]].',
            'accessMode' => 'The human sensory perceptual system or cognitive faculty through which a person may process or perceive information. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessMode-vocabulary).',
            'accessModeSufficient' => 'A list of single or combined accessModes that are sufficient to understand all the intellectual content of a resource. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessModeSufficient-vocabulary).',
            'accessibilityAPI' => 'Indicates that the resource is compatible with the referenced accessibility API. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityAPI-vocabulary).',
            'accessibilityControl' => 'Identifies input methods that are sufficient to fully control the described resource. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityControl-vocabulary).',
            'accessibilityFeature' => 'Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityFeature-vocabulary).',
            'accessibilityHazard' => 'A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3. Values should be drawn from the [approved vocabulary](https://www.w3.org/2021/a11y-discov-vocab/latest/#accessibilityHazard-vocabulary).',
            'accessibilitySummary' => 'A human-readable summary of specific accessibility features or deficiencies, consistent with the other accessibility metadata but expressing subtleties such as "short descriptions are present but long descriptions will be needed for non-visual users" or "short descriptions are present and no long descriptions are needed."',
            'accountablePerson' => 'Specifies the Person that is legally accountable for the CreativeWork.',
            'acquireLicensePage' => 'Indicates a page documenting how licenses can be purchased or otherwise acquired, for the current item.',
            'additionalType' => 'An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the \'typeof\' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.',
            'aggregateRating' => 'The overall rating, based on a collection of reviews or ratings, of the item.',
            'alternateName' => 'An alias for the item.',
            'alternativeHeadline' => 'A secondary title of the CreativeWork.',
            'applicationCategory' => 'Type of software application, e.g. \'Game, Multimedia\'.',
            'applicationSubCategory' => 'Subcategory of the application, e.g. \'Arcade Game\'.',
            'applicationSuite' => 'The name of the application suite to which the application belongs (e.g. Excel belongs to Office).',
            'archivedAt' => 'Indicates a page or other link involved in archival of a [[CreativeWork]]. In the case of [[MediaReview]], the items in a [[MediaReviewItem]] may often become inaccessible, but be archived by archival, journalistic, activist, or law enforcement organizations. In such cases, the referenced page may not directly publish the content.',
            'assesses' => 'The item being described is intended to assess the competency or learning outcome defined by the referenced term.',
            'associatedMedia' => 'A media object that encodes this CreativeWork. This property is a synonym for encoding.',
            'audience' => 'An intended audience, i.e. a group for whom something was created.',
            'audio' => 'An embedded audio object.',
            'author' => 'The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.',
            'availableOnDevice' => 'Device required to run the application. Used in cases where a specific make/model is required to run the application.',
            'award' => 'An award won by or for this item.',
            'awards' => 'Awards won by or for this item.',
            'character' => 'Fictional person connected with a creative work.',
            'citation' => 'A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.',
            'comment' => 'Comments, typically from users.',
            'commentCount' => 'The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in Web sites with commenting system; additional comments may exist elsewhere.',
            'conditionsOfAccess' => 'Conditions that affect the availability of, or method(s) of access to, an item. Typically used for real world items such as an [[ArchiveComponent]] held by an [[ArchiveOrganization]]. This property is not suitable for use as a general Web access control mechanism. It is expressed only in natural language.  For example "Available by appointment from the Reading Room" or "Accessible only from logged-in accounts ". ',
            'contentLocation' => 'The location depicted or described in the content. For example, the location in a photograph or painting.',
            'contentRating' => 'Official rating of a piece of content—for example, \'MPAA PG-13\'.',
            'contentReferenceTime' => 'The specific time described by a creative work, for works (e.g. articles, video objects etc.) that emphasise a particular moment within an Event.',
            'contributor' => 'A secondary contributor to the CreativeWork or Event.',
            'copyrightHolder' => 'The party holding the legal copyright to the CreativeWork.',
            'copyrightNotice' => 'Text of a notice appropriate for describing the copyright aspects of this Creative Work, ideally indicating the owner of the copyright for the Work.',
            'copyrightYear' => 'The year during which the claimed copyright for the CreativeWork was first asserted.',
            'correction' => 'Indicates a correction to a [[CreativeWork]], either via a [[CorrectionComment]], textually or in another document.',
            'countriesNotSupported' => 'Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.',
            'countriesSupported' => 'Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.',
            'countryOfOrigin' => 'The country of origin of something, including products as well as creative  works such as movie and TV content.  In the case of TV and movie, this would be the country of the principle offices of the production company or individual responsible for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]] and [[locationCreated]] may be more applicable.  In the case of products, the country of origin of the product. The exact interpretation of this may vary by context and product type, and cannot be fully enumerated here.',
            'creativeWorkStatus' => 'The status of a creative work in terms of its stage in a lifecycle. Example terms include Incomplete, Draft, Published, Obsolete. Some organizations define a set of terms for the stages of their publication lifecycle.',
            'creator' => 'The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.',
            'creditText' => 'Text that can be used to credit person(s) and/or organization(s) associated with a published Creative Work.',
            'dateCreated' => 'The date on which the CreativeWork was created or the item was added to a DataFeed.',
            'dateModified' => 'The date on which the CreativeWork was most recently modified or when the item\'s entry was modified within a DataFeed.',
            'datePublished' => 'Date of first broadcast/publication.',
            'description' => 'A description of the item.',
            'device' => 'Device required to run the application. Used in cases where a specific make/model is required to run the application.',
            'disambiguatingDescription' => 'A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other properties (in particular, name) may be necessary for the description to be useful for disambiguation.',
            'discussionUrl' => 'A link to the page containing the comments of the CreativeWork.',
            'downloadUrl' => 'If the file can be downloaded, URL to download the binary.',
            'editEIDR' => 'An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing a specific edit / edition for a work of film or television.  For example, the motion picture known as "Ghostbusters" whose [[titleEIDR]] is "10.5240/7EC7-228A-510A-053E-CBB8-J" has several edits, e.g. "10.5240/1F2A-E1C5-680A-14C6-E76B-I" and "10.5240/8A35-3BEE-6497-5D12-9E4F-3".  Since schema.org types like [[Movie]] and [[TVEpisode]] can be used for both works and their multiple expressions, it is possible to use [[titleEIDR]] alone (for a general description), or alongside [[editEIDR]] for a more edit-specific description. ',
            'editor' => 'Specifies the Person who edited the CreativeWork.',
            'educationalAlignment' => 'An alignment to an established educational framework.  This property should not be used where the nature of the alignment can be described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.',
            'educationalLevel' => 'The level in terms of progression through an educational or training context. Examples of educational levels include \'beginner\', \'intermediate\' or \'advanced\', and formal sets of level indicators.',
            'educationalUse' => 'The purpose of a work in the context of education; for example, \'assignment\', \'group work\'.',
            'encoding' => 'A media object that encodes this CreativeWork. This property is a synonym for associatedMedia.',
            'encodingFormat' => 'Media type typically expressed using a MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)), e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3 etc.  In cases where a [[CreativeWork]] has several media type representations, [[encoding]] can be used to indicate each [[MediaObject]] alongside particular [[encodingFormat]] information.  Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry.',
            'encodings' => 'A media object that encodes this CreativeWork.',
            'exampleOfWork' => 'A creative work that this work is an example/instance/realization/derivation of.',
            'expires' => 'Date the content expires and is no longer useful or available. For example a [[VideoObject]] or [[NewsArticle]] whose availability or relevance is time-limited, or a [[ClaimReview]] fact check whose publisher wants to indicate that it may no longer be relevant (or helpful to highlight) after some date.',
            'featureList' => 'Features or modules provided by this application (and possibly required by other applications).',
            'fileFormat' => 'Media type, typically MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml)) of the content, e.g. application/zip of a SoftwareApplication binary. In cases where a CreativeWork has several media type representations, \'encoding\' can be used to indicate each MediaObject alongside particular fileFormat information. Unregistered or niche file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia entry.',
            'fileSize' => 'Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.',
            'funder' => 'A person or organization that supports (sponsors) something through some kind of financial contribution.',
            'funding' => 'A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].',
            'genre' => 'Genre of the creative work, broadcast channel or group.',
            'hasPart' => 'Indicates an item or CreativeWork that is part of this item, or CreativeWork (in some sense).',
            'headline' => 'Headline of the article.',
            'identifier' => 'The identifier property represents any kind of identifier for any kind of [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for more details.         ',
            'image' => 'An image of the item. This can be a [[URL]] or a fully described [[ImageObject]].',
            'inLanguage' => 'The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].',
            'installUrl' => 'URL at which the app may be installed, if different from the URL of the item.',
            'interactionStatistic' => 'The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used.',
            'interactivityType' => 'The predominant mode of learning supported by the learning resource. Acceptable values are \'active\', \'expositive\', or \'mixed\'.',
            'interpretedAsClaim' => 'Used to indicate a specific claim contained, implied, translated or refined from the content of a [[MediaObject]] or other [[CreativeWork]]. The interpreting party can be indicated using [[claimInterpreter]].',
            'isAccessibleForFree' => 'A flag to signal that the item, event, or place is accessible for free.',
            'isBasedOn' => 'A resource from which this work is derived or from which it is a modification or adaption.',
            'isBasedOnUrl' => 'A resource that was used in the creation of this resource. This term can be repeated for multiple sources. For example, http://example.com/great-multiplication-intro.html.',
            'isFamilyFriendly' => 'Indicates whether this content is family friendly.',
            'isPartOf' => 'Indicates an item or CreativeWork that this item, or CreativeWork (in some sense), is part of.',
            'keywords' => 'Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or by repeating the property.',
            'learningResourceType' => 'The predominant type or kind characterizing the learning resource. For example, \'presentation\', \'handout\'.',
            'license' => 'A license document that applies to this content, typically indicated by URL.',
            'locationCreated' => 'The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.',
            'mainEntity' => 'Indicates the primary entity described in some page or other CreativeWork.',
            'mainEntityOfPage' => 'Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See [background notes](/docs/datamodel.html#mainEntityBackground) for details.',
            'maintainer' => 'A maintainer of a [[Dataset]], software package ([[SoftwareApplication]]), or other [[Project]]. A maintainer is a [[Person]] or [[Organization]] that manages contributions to, and/or publication of, some (typically complex) artifact. It is common for distributions of software and data to be based on "upstream" sources. When [[maintainer]] is applied to a specific version of something e.g. a particular version or packaging of a [[Dataset]], it is always  possible that the upstream source has a different maintainer. The [[isBasedOn]] property can be used to indicate such relationships between datasets to make the different maintenance roles clear. Similarly in the case of software, a package may have dedicated maintainers working on integration into software distributions such as Ubuntu, as well as upstream maintainers of the underlying work.       ',
            'material' => 'A material that something is made from, e.g. leather, wool, cotton, paper.',
            'materialExtent' => 'The quantity of the materials being described or an expression of the physical space they occupy.',
            'memoryRequirements' => 'Minimum memory requirements.',
            'mentions' => 'Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.',
            'name' => 'The name of the item.',
            'offers' => 'An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.       ',
            'operatingSystem' => 'Operating systems supported (Windows 7, OS X 10.6, Android 1.6).',
            'pattern' => 'A pattern that something has, for example \'polka dot\', \'striped\', \'Canadian flag\'. Values are typically expressed as text, although links to controlled value schemes are also supported.',
            'permissions' => 'Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on wifi).',
            'position' => 'The position of an item in a series or sequence of items.',
            'potentialAction' => 'Indicates a potential Action, which describes an idealized action in which this thing would play an \'object\' role.',
            'processorRequirements' => 'Processor architecture required to run the application (e.g. IA64).',
            'producer' => 'The person or organization who produced the work (e.g. music album, movie, TV/radio series etc.).',
            'provider' => 'The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.',
            'publication' => 'A publication event associated with the item.',
            'publisher' => 'The publisher of the creative work.',
            'publisherImprint' => 'The publishing division which published the comic.',
            'publishingPrinciples' => 'The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual, e.g. a [[Person]] writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]] (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]].  While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a [[funder]]) can be expressed using schema.org terminology. ',
            'recordedAt' => 'The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.',
            'releaseNotes' => 'Description of what changed in this version.',
            'releasedEvent' => 'The place and time the release was issued, expressed as a PublicationEvent.',
            'requirements' => 'Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (examples: DirectX, Java or .NET runtime).',
            'review' => 'A review of the item.',
            'reviews' => 'Review of the item.',
            'sameAs' => 'URL of a reference Web page that unambiguously indicates the item\'s identity. E.g. the URL of the item\'s Wikipedia page, Wikidata entry, or official website.',
            'schemaVersion' => 'Indicates (by URL or string) a particular version of a schema used in some CreativeWork. This property was created primarily to     indicate the use of a specific schema.org release, e.g. ```10.0``` as a simple string, or more explicitly via URL, ```https://schema.org/docs/releases.html#v10.0```. There may be situations in which other schemas might usefully be referenced this way, e.g. ```http://dublincore.org/specifications/dublin-core/dces/1999-07-02/``` but this has not been carefully explored in the community.',
            'screenshot' => 'A link to a screenshot image of the app.',
            'sdDatePublished' => 'Indicates the date on which the current structured data was generated / published. Typically used alongside [[sdPublisher]]',
            'sdLicense' => 'A license document that applies to this structured data, typically indicated by URL.',
            'sdPublisher' => 'Indicates the party responsible for generating and publishing the current structured data markup, typically in cases where the structured data is derived automatically from existing published content but published on a different site. For example, student projects and open data initiatives often re-publish existing content with more explicitly structured metadata. The [[sdPublisher]] property helps make such practices more explicit.',
            'size' => 'A standardized size of a product or creative work, specified either through a simple textual string (for example \'XL\', \'32Wx34L\'), a  QuantitativeValue with a unitCode, or a comprehensive and structured [[SizeSpecification]]; in other cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may be more applicable. ',
            'softwareAddOn' => 'Additional content for a software application.',
            'softwareHelp' => 'Software application help.',
            'softwareRequirements' => 'Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (examples: DirectX, Java or .NET runtime).',
            'softwareVersion' => 'Version of the software instance.',
            'sourceOrganization' => 'The Organization on whose behalf the creator was working.',
            'spatial' => 'The "spatial" property can be used in cases when more specific properties (e.g. [[locationCreated]], [[spatialCoverage]], [[contentLocation]]) are not known to be appropriate.',
            'spatialCoverage' => 'The spatialCoverage of a CreativeWork indicates the place(s) which are the focus of the content. It is a subproperty of       contentLocation intended primarily for more technical and detailed materials. For example with a Dataset, it indicates       areas that the dataset describes: a dataset of New York weather would have spatialCoverage which was the place: the state of New York.',
            'sponsor' => 'A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical Study or a corporate sponsor of an event.',
            'storageRequirements' => 'Storage requirements (free space required).',
            'subjectOf' => 'A CreativeWork or Event about this Thing.',
            'supportingData' => 'Supporting data for a SoftwareApplication.',
            'teaches' => 'The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.',
            'temporal' => 'The "temporal" property can be used in cases where more specific properties (e.g. [[temporalCoverage]], [[dateCreated]], [[dateModified]], [[datePublished]]) are not known to be appropriate.',
            'temporalCoverage' => 'The temporalCoverage of a CreativeWork indicates the period that the content applies to, i.e. that it describes, either as a DateTime or as a textual string indicating a time period in [ISO 8601 time interval format](https://en.wikipedia.org/wiki/ISO_8601#Time_intervals). In       the case of a Dataset it will typically indicate the relevant time period in a precise notation (e.g. for a 2011 census dataset, the year 2011 would be written "2011/2012"). Other forms of content, e.g. ScholarlyArticle, Book, TVSeries or TVEpisode, may indicate their temporalCoverage in broader terms - textually or via well-known URL.       Written works such as books may sometimes have precise temporal coverage too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601 interval format format via "1939/1945".  Open-ended date ranges can be written with ".." in place of the end date. For example, "2015-11/.." indicates a range beginning in November 2015 and with no specified final date. This is tentative and might be updated in future when ISO 8601 is officially updated.',
            'text' => 'The textual content of this CreativeWork.',
            'thumbnailUrl' => 'A thumbnail image relevant to the Thing.',
            'timeRequired' => 'Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience, e.g. \'PT30M\', \'PT1H25M\'.',
            'translationOfWork' => 'The work that this work has been translated from. E.g. 物种起源 is a translationOf “On the Origin of Species”.',
            'translator' => 'Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.',
            'typicalAgeRange' => 'The typical expected age range, e.g. \'7-9\', \'11-\'.',
            'url' => 'URL of the item.',
            'usageInfo' => 'The schema.org [[usageInfo]] property indicates further information about a [[CreativeWork]]. This property is applicable both to works that are freely available and to those that require payment or other transactions. It can reference additional information, e.g. community expectations on preferred linking and citation conventions, as well as purchasing details. For something that can be commercially licensed, usageInfo can provide detailed, resource-specific information about licensing options.  This property can be used alongside the license property which indicates license(s) applicable to some piece of content. The usageInfo property can provide information about other licensing options, e.g. acquiring commercial usage rights for an image that is also available under non-commercial creative commons licenses.',
            'version' => 'The version of the CreativeWork embodied by a specified resource.',
            'video' => 'An embedded video object.',
            'workExample' => 'Example/instance/realization/derivation of the concept of this creative work. E.g. the paperback edition, first edition, or e-book.',
            'workTranslation' => 'A work that is a translation of the content of this work. E.g. 西遊記 has an English workTranslation “Journey to the West”, a German workTranslation “Monkeys Pilgerfahrt” and a Vietnamese  translation Tây du ký bình khảo.',
        ];
    }


    /**
     * @inheritdoc
     */
    public function getGoogleRequiredSchema(): array
    {
        return ['description', 'name'];
    }


    /**
     * @inheritdoc
     */
    public function getGoogleRecommendedSchema(): array
    {
        return ['image', 'url'];
    }


    /**
     * @inheritdoc
     */
    public function defineRules(): array
    {
        $rules = parent::defineRules();
        $rules = array_merge($rules, [
                [$this->getSchemaPropertyNames(), 'validateJsonSchema'],
                [$this->getGoogleRequiredSchema(), 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
                [$this->getGoogleRecommendedSchema(), 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.'],
            ]);

        return $rules;
    }
}
