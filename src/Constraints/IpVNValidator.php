<?php
/**
 * @link https://github.com/vuongxuongminh/symfony-validation
 * @copyright Copyright (c) 2019 Vuong Xuong Minh
 * @license [MIT](http://www.opensource.org/licenses/MIT)
 */

namespace PHPViet\Symfony\Validation\Constraints;

use PHPViet\Validation\Validator as ConcreteValidator;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class IpVNValidator extends ConstraintValidator
{

    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint): void
    {
        if (!$constraint instanceof IpVN) {
            throw new UnexpectedTypeException($constraint, IpVN::class);
        }

        if (false === ConcreteValidator::ipVN($constraint->version)->validate($value)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode($this->getCode($constraint->version))
                ->addViolation();
        }
    }

    protected function getCode(?int $ipVersion): string
    {
        switch ($ipVersion) {
            case IpVN::IPV4:
                return IpVN::IPV4_VN_ERROR;
            case IpVN::IPV6:
                return IpVN::IPV6_VN_ERROR;
            default:
                return IpVN::IP_VN_ERROR;
        }
    }

}
