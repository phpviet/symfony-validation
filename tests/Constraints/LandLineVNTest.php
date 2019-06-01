<?php
/**
 * @link https://github.com/vuongxuongminh/symfony-validation
 * @copyright (c) PHP Viet
 * @license [MIT](http://www.opensource.org/licenses/MIT)
 */

namespace PHPViet\Symfony\Validation\Tests\Constraints;

use PHPViet\Symfony\Validation\Constraints\LandLineVN;
use PHPViet\Symfony\Validation\Constraints\LandLineVNValidator;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class LandLineVNTest extends TestCase
{
    public function testValid()
    {
        $this->context->expects($this->never())->method('buildViolation');
        $this->validator->validate('02838574955', new LandLineVN);
    }

    public function testInvalid()
    {
        $constraint = new LandLineVN();
        $this->context->expects($this->once())
            ->method('buildViolation')
            ->with($constraint->message)
            ->willReturn($this->getConstraintsViolationBuilder());
        $this->validator->validate('02838574955!@#', $constraint);
    }

    protected function getValidatorClass(): string
    {
        return LandLineVNValidator::class;
    }
}
