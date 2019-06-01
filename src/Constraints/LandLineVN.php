<?php
/**
 * @link https://github.com/vuongxuongminh/symfony-validation
 * @copyright (c) PHP Viet
 * @license [MIT](http://www.opensource.org/licenses/MIT)
 */

namespace PHPViet\Symfony\Validation\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 *
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class LandLineVN extends Constraint
{
    const LAND_LINE_VN_ERROR = '61b40d48-c1e1-41d7-afea-7f6e007db510';

    protected static $errorNames = [
        self::LAND_LINE_VN_ERROR => 'LAND_LINE_VN_ERROR',
    ];

    public $message = 'This is not a valid Vietnam land line phone number.';
}
