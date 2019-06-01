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
class IdVN extends Constraint
{
    const ID_VN_ERROR = '6d8d6065-0b7b-4e02-a65c-9500a511e628';

    protected static $errorNames = [
        self::ID_VN_ERROR => 'ID_VN_ERROR',
    ];

    public $message = 'This is not a valid Vietnam id number.';
}
