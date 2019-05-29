<?php
/**
 * @link https://github.com/vuongxuongminh/symfony-validation
 * @copyright Copyright (c) 2019 Vuong Xuong Minh
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
class MobileVN extends Constraint
{
    const MOBILE_VN_ERROR = '07b98258-11ff-4e2c-963c-4c075f83688f';

    protected static $errorNames = [
        self::MOBILE_VN_ERROR => 'MOBILE_VN_ERROR',
    ];

    public $message = 'This is not a valid Vietnam mobile phone number.';
}
