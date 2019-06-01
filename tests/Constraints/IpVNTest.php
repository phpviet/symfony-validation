<?php
/**
 * @link https://github.com/vuongxuongminh/symfony-validation
 * @copyright (c) PHP Viet
 * @license [MIT](http://www.opensource.org/licenses/MIT)
 */

namespace PHPViet\Symfony\Validation\Tests\Constraints;

use PHPViet\Symfony\Validation\Constraints\IpVN;
use PHPViet\Symfony\Validation\Constraints\IpVNValidator;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class IpVNTest extends TestCase
{
    public function testValid(): void
    {
        $this->context->expects($this->never())->method('buildViolation');
        $this->validator->validate('113.173.134.203', new IpVN);
        $this->validator->validate('113.173.134.203', new IpVN(['version' => 4]));
        $this->validator->validate('2405:4800:102:1::3', new IpVN(['version' => 6]));
    }

    public function testInvalid(): void
    {
        $this->prepareInvalidContext($constraint = new IpVN());
        $this->validator->validate('113.173.134.203a', $constraint);
        $this->prepareInvalidContext($constraint = new IpVN(['version' => 4]));
        $this->validator->validate('2405:4800:102:1::3', $constraint);
        $this->prepareInvalidContext($constraint = new IpVN(['version' => 6]));
        $this->validator->validate('113.173.134.203', $constraint);
    }

    protected function getValidatorClass(): string
    {
        return IpVNValidator::class;
    }

    protected function prepareInvalidContext(IpVN $ipVN): void
    {
        $this->setUp();
        $this->context->expects($this->once())
            ->method('buildViolation')
            ->with($ipVN->message)
            ->willReturn($this->getConstraintsViolationBuilder());
    }
}
