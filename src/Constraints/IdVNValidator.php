<?php
/**
 * @link https://github.com/vuongxuongminh/symfony-validation
 * @copyright (c) PHP Viet
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
class IdVNValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint): void
    {
        if (! $constraint instanceof IdVN) {
            throw new UnexpectedTypeException($constraint, IdVN::class);
        }

        if (false === ConcreteValidator::idVN()->validate($value)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(IdVN::ID_VN_ERROR)
                ->addViolation();
        }
    }
}
