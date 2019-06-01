<?php
/**
 * @link https://github.com/vuongxuongminh/symfony-validation
 * @copyright Copyright (c) 2019 Vuong Xuong Minh
 * @license [MIT](http://www.opensource.org/licenses/MIT)
 */

namespace PHPViet\Symfony\Validation\Tests\Constraints;

use PHPViet\Symfony\Validation\Constraints\IdVN;
use PHPViet\Symfony\Validation\Constraints\IdVNValidator;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class IdVNTest extends TestCase
{
    public function testValid()
    {
        $this->context->expects($this->never())->method('buildViolation');
        $this->validator->validate('025479661', new IdVN);
    }

    public function testInvalid()
    {
        $constraint = new IdVN();
        $this->context->expects($this->once())
            ->method('buildViolation')
            ->with($constraint->message)
            ->willReturn($this->getConstraintsViolationBuilder());
        $this->validator->validate('025479661@', $constraint);
    }

    protected function getValidatorClass(): string
    {
        return IdVNValidator::class;
    }
}
