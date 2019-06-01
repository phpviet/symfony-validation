<?php
/**
 * @link https://github.com/vuongxuongminh/symfony-validation
 * @copyright (c) PHP Viet
 * @license [MIT](http://www.opensource.org/licenses/MIT)
 */

namespace PHPViet\Symfony\Validation\Tests\Constraints;

use PHPViet\Symfony\Validation\Constraints\MobileVN;
use PHPViet\Symfony\Validation\Constraints\MobileVNValidator;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class MobileVNTest extends TestCase
{
    public function testValid()
    {
        $this->context->expects($this->never())->method('buildViolation');
        $this->validator->validate('0909113911', new MobileVN);
    }

    public function testInvalid()
    {
        $constraint = new MobileVN();
        $this->context->expects($this->once())
            ->method('buildViolation')
            ->with($constraint->message)
            ->willReturn($this->getConstraintsViolationBuilder());
        $this->validator->validate('0909 113911', $constraint);
    }

    protected function getValidatorClass(): string
    {
        return MobileVNValidator::class;
    }
}
