<?php

/**
 * SEOmatic plugin for Craft CMS
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful, and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

/**
 * schema.org version: v26.0-release
 * Trait for DonateAction.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/DonateAction
 */
trait DonateActionTrait
{
    /**
     * A sub property of participant. The participant who is at the receiving end
     * of the action.
     *
     * @var array|Organization|Organization[]|array|Audience|Audience[]|array|Person|Person[]|array|ContactPoint|ContactPoint[]
     */
    public $recipient;
}
