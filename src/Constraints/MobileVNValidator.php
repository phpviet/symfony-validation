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
class MobileVNValidator extends ConstraintValidator
{

    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint): void
    {
        if (!$constraint instanceof MobileVN) {
            throw new UnexpectedTypeException($constraint, MobileVN::class);
        }

        if (false === ConcreteValidator::mobileVN()->validate($value)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(MobileVN::MOBILE_VN_ERROR)
                ->addViolation();
        }
    }

}
