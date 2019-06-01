<?php
/**
 * @link https://github.com/vuongxuongminh/symfony-validation
 * @copyright (c) PHP Viet
 * @license [MIT](http://www.opensource.org/licenses/MIT)
 */

namespace PHPViet\Symfony\Validation\Constraints;

use Symfony\Component\Validator\Constraint;
use PHPViet\Validation\Rules\IpVN as BaseIpVN;

/**
 * @Annotation
 *
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class IpVN extends Constraint
{
    const IPV4 = BaseIpVN::IPV4;

    const IPV6 = BaseIpVN::IPV6;

    const IP_VN_ERROR = 'a21abd13-9fc6-4319-a07a-9dfdc0b33719';

    const IPV4_VN_ERROR = '6b162d27-d99e-4c4c-aadd-179a8b37ebc8';

    const IPV6_VN_ERROR = '1c417ab3-734c-4694-a52e-af4bcfc8dd4f';

    protected static $errorNames = [
        self::IP_VN_ERROR => 'IP_VN_ERROR',
        self::IPV4_VN_ERROR => 'IPV4_VN_ERROR',
        self::IPV6_VN_ERROR => 'IPV6_VN_ERROR',
    ];

    public $message;

    public $version;

    public function __construct($options = null)
    {
        parent::__construct($options);

        if (null === $this->message) {
            switch ($this->version) {
                case self::IPV4:
                    $this->message = 'This is not a valid Vietnam ipv4.';
                    break;
                case self::IPV6:
                    $this->message = 'This is not a valid Vietnam ipv6.';
                    break;
                default:
                    $this->message = 'This is not a valid Vietnam ip.';
                    break;
            }
        }
    }
}
