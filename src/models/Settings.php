<?php
/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

namespace nystudio107\seomatic\models;

use craft\behaviors\EnvAttributeParserBehavior;
use craft\validators\ArrayValidator;
use nystudio107\seomatic\base\SeoElementInterface;
use nystudio107\seomatic\base\VarsModel;
use nystudio107\seomatic\Seomatic;
use yii\behaviors\AttributeTypecastBehavior;

/**
 * Plugin settings object, containing values for configuring the plugin
 *
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 */
class Settings extends VarsModel
{
    // Public Properties
    // =========================================================================

    /**
     * @var string The public-facing name of the plugin
     */
    public $pluginName = 'SEOmatic';

    /**
     * @var bool Should SEOmatic render metadata?
     */
    public $renderEnabled = true;

    /**
     * @var bool Should SEOmatic render frontend sitemaps?
     */
    public $sitemapsEnabled = true;

    /**
     * @var bool Should sitemaps be regenerated automatically?
     */
    public $regenerateSitemapsAutomatically = true;

    /**
     * @var bool Should sitemaps be submitted to search engines automatically whenever there are changes?
     */
    public $submitSitemaps = true;

    /**
     * @var bool Should items where the entry URL doesn't match the canonical URL be excluded?
     */
    public $excludeNonCanonicalUrls = false;

    /**
     * @var bool Should the homepage be included in the generated Breadcrumbs JSON-LD?
     */
    public $includeHomepageInBreadcrumbs = true;

    /**
     * @var bool Should SEOmatic add to the http response headers?
     */
    public $headersEnabled = true;

    /**
     * @var bool Whether the environment should be manually set, or automatically determined
     */
    public $manuallySetEnvironment = false;

    /**
     * @var string The server environment, either `live`, `staging`, or `local`
     */
    public $environment = 'live';

    /**
     * @var bool Should SEOmatic display the SEO Preview sidebar?
     */
    public $displayPreviewSidebar = true;

    /**
     * @var bool Should SEOmatic add a Social Media Preview Target?
     */
    public $socialMediaPreviewTarget = true;

    /**
     * @var array The social media platforms that should be displayed in the SEO Preview sidebar
     */
    public $sidebarDisplayPreviewTypes = [
        'google',
        'twitter',
        'facebook',
    ];

    /**
     * @var bool Should SEOmatic display the SEO Analysis sidebar?
     */
    public $displayAnalysisSidebar = true;

    /**
     * @var string If `devMode` is on, prefix the <title> with this string
     */
    public $devModeTitlePrefix = '&#x1f6a7; ';

    /**
     * @var string Prefix the Control Panel <title> with this string
     */
    public $cpTitlePrefix = '&#x2699; ';

    /**
     * @var string If `devMode` is on, prefix the Control Panel <title> with this string
     */
    public $devModeCpTitlePrefix = '&#x1f6a7;&#x2699; ';

    /**
     * @var string The separator character to use for the `<title>` tag
     */
    public $separatorChar = '|';

    /**
     * @var int The max number of characters in the `<title>` tag
     */
    public $maxTitleLength = 70;

    /**
     * @var int The max number of characters in the `<meta name="description">` tag
     */
    public $maxDescriptionLength = 155;

    /**
     * @var bool Should Title tags be truncated at the max length, on word boundaries?
     */
    public $truncateTitleTags = true;

    /**
     * @var bool Should Description tags be truncated at the max length, on word boundaries?
     */
    public $truncateDescriptionTags = true;

    /**
     * @var bool Site Groups define logically separate sites
     */
    public $siteGroupsSeparate = true;

    /**
     * @var bool Whether to dynamically include the hreflang tags
     */
    public $addHrefLang = true;

    /**
     * @var bool Whether to dynamically include the `x-default` hreflang tags
     */
    public $addXDefaultHrefLang = true;

    /**
     * @var int The site to use for the `x-default` hreflang tag (0 defaults to the Primary site)
     */
    public $xDefaultSite = 0;

    /**
     * @var bool Whether to dynamically include hreflang tags on paginated pages
     */
    public $addPaginatedHreflang = true;

    /**
     * @var string Whether to include a Content Security Policy "nonce" for inline
     *      CSS or JavaScript. Valid values are 'header' or 'tag' for how the CSP
     *      should be included. c.f.:
     *      https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/script-src#Unsafe_inline_script
     */
    public $cspNonce = '';

    /**
     * @var array Fixed Content Security Policies to be added before any CSP nonces
     */
    public $cspScriptSrcPolicies = [
        0 => [
            'policy' => "'self'",
        ],
    ];

    /**
     * @var bool
     * SEO [best practices](https://www.searchenginejournal.com/google-dont-mix-noindex-relcanonical/262607)
     * are to have `canonical` links not appear on pages that are not intended to be indexed. SEOmatic does
     * this for you by default, but you can override that behavior with this setting
     */
    public $alwaysIncludeCanonicalUrls = false;

    /**
     * @var bool Should the Canonical URL be automatically lower-cased?
     */
    public $lowercaseCanonicalUrl = true;

    /**
     * @var bool Should the meta generator tag and X-Powered-By header be included?
     */
    public $generatorEnabled = true;

    /**
     * @var string|array
     * SEOmatic uses the Craft `siteUrl` to generate the external URLs.  If you
     * are using it in a non-standard environment, such as a headless GraphQL or
     * ElementAPI server, you can override what it uses for the `siteUrl` below.
     * This can be either a simple string, or an array of strings indexed by the site
     * handle, for multi-site setups. e.g.:
     * 'siteUrlOverride' => [
     *     'default' => 'http://example.com/',
     *     'spanish' => 'http://example.com/es/',
     * ],     */
    public $siteUrlOverride = '';

    /**
     * @var int|string|null
     * The duration of the SEOmatic meta cache in seconds.  Null means always cached until explicitly broken
     * If devMode is on, caches last 30 seconds.
     */
    public $metaCacheDuration = 0;

    /**
     * @var bool Determines whether the meta container endpoint should be enabled for anonymous frontend access
     */
    public $enableMetaContainerEndpoint = false;

    /**
     * @var bool Determines whether the JSON-LD endpoint should be enabled for anonymous frontend access
     */
    public $enableJsonLdEndpoint = false;

    /**
     * @var bool Determines whether the SEO File Link endpoint should be enabled for anonymous frontend access
     */
    public $enableSeoFileLinkEndpoint = false;

    /**
     * @var bool Determines whether the SEOmatic debug toolbar panel should be added to the Yii2 debug toolbar
     */
    public $enableDebugToolbarPanel = true;

    /**
     * @var SeoElementInterface[] The default SeoElement type classes
     */
    public $defaultSeoElementTypes = [
    ];

    /**
     * @var string[] URL params that are allowed to be considered part of the unique URL used for the metadata cache
     */
    public $allowedUrlParams = [
    ];

    // Public Methods
    // =========================================================================

    /**
     * @inerhitdoc
     */
    public function init()
    {
        // Normalize the metaCacheDuration to an integer
        if ($this->metaCacheDuration === null || $this->metaCacheDuration === 'null') {
            $this->metaCacheDuration = 0;
        }
    }

    /**
     * @inheritdoc
     */
    public function rules(): array
    {
        return [
            ['pluginName', 'string'],
            ['pluginName', 'default', 'value' => 'SEOmatic'],
            [
                [
                    'renderEnabled',
                    'sitemapsEnabled',
                    'regenerateSitemapsAutomatically',
                    'submitSitemaps',
                    'excludeNonCanonicalUrls',
                    'includeHomepageInBreadcrumbs',
                    'headersEnabled',
                    'generatorEnabled',
                    'addHrefLang',
                    'addXDefaultHrefLang',
                    'addPaginatedHreflang',
                    'manuallySetEnvironment',
                ],
                'boolean',
            ],
            ['xDefaultSite', 'integer'],
            ['xDefaultSite', 'default', 'value' => 0],
            ['cspNonce', 'string'],
            ['cspNonce', 'in', 'range' => [
                '',
                'header',
                'tag',
            ]],
            ['environment', 'string'],
            ['environment', 'default', 'value' => 'live'],
            [
                [
                    'displayPreviewSidebar',
                    'socialMediaPreviewTarget',
                    'displayAnalysisSidebar',
                    'enableMetaContainerEndpoint',
                    'enableJsonLdEndpoint',
                    'enableSeoFileLinkEndpoint',
                    'alwaysIncludeCanonicalUrls',
                    'lowercaseCanonicalUrl',
                    'enableDebugToolbarPanel',
                ],
                'boolean',
            ],
            [['devModeTitlePrefix', 'cpTitlePrefix', 'devModeCpTitlePrefix', 'truncateTitleTags', 'truncateDescriptionTags'], 'string'],
            ['separatorChar', 'string'],
            ['separatorChar', 'default', 'value' => '|'],
            ['maxTitleLength', 'integer', 'min' => 10],
            ['maxTitleLength', 'default', 'value' => 70],
            ['maxDescriptionLength', 'integer', 'min' => 10],
            ['maxDescriptionLength', 'default', 'value' => 155],
            ['siteUrlOverride', 'safe'],
            ['siteUrlOverride', 'default', 'value' => ''],
            [
                [
                    'sidebarDisplayPreviewTypes',
                    'defaultSeoElementTypes',
                    'cspScriptSrcPolicies',
                    'allowedUrlParams',
                ],
                ArrayValidator::class,
            ],
            ['metaCacheDuration', 'default', 'value' => 0],
            ['metaCacheDuration', 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        // Keep any parent behaviors
        $behaviors = parent::behaviors();
        // Add in the AttributeTypecastBehavior
        $behaviors['typecast'] = [
            'class' => AttributeTypecastBehavior::class,
            // 'attributeTypes' will be composed automatically according to `rules()`
        ];
        // If we're running Craft 3.1 or later, add in the EnvAttributeParserBehavior
        if (Seomatic::$craft31) {
            $behaviors['parser'] = [
                'class' => EnvAttributeParserBehavior::class,
                'attributes' => [
                    'environment',
                ],
            ];
        }

        return $behaviors;
    }
}
