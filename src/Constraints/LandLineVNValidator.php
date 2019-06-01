<?php
/**
 * @link https://github.com/vuongxuongminh/symfony-validation
 * @copyright Copyright (c) 2019 Vuong Xuong Minh
 * @license [MIT](http://www.opensource.org/licenses/MIT)
 */

namespace PHPViet\Symfony\Validation\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use PHPViet\Validation\Validator as ConcreteValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class LandLineVNValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint): void
    {
        if (! $constraint instanceof LandLineVN) {
            throw new UnexpectedTypeException($constraint, LandLineVN::class);
        }

        if (false === ConcreteValidator::landLineVN()->validate($value)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(LandLineVN::LAND_LINE_VN_ERROR)
                ->addViolation();
        }
    }
}
