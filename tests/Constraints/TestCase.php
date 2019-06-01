<?php
/**
 * @link https://github.com/vuongxuongminh/symfony-validation
 * @copyright Copyright (c) 2019 Vuong Xuong Minh
 * @license [MIT](http://www.opensource.org/licenses/MIT)
 */

namespace PHPViet\Symfony\Validation\Tests\Constraints;

use PHPUnit\Framework\TestCase as BaseTestCase;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
abstract class TestCase extends BaseTestCase
{
    /**
     * @var \Symfony\Component\Validator\Context\ExecutionContextInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $context;

    /**
     * @var \Symfony\Component\Validator\ConstraintValidator
     */
    protected $validator;

    protected function setUp()
    {
        $validatorClass = $this->getValidatorClass();
        $this->context = $this->getMockBuilder('Symfony\Component\Validator\Context\ExecutionContext')
            ->disableOriginalConstructor()
            ->getMock();
        $this->validator = new $validatorClass;
        $this->validator->initialize($this->context);
    }

    protected function getConstraintsViolationBuilder()
    {
        $constraintViolationBuilder = $this->getMockBuilder('Symfony\Component\Validator\Violation\ConstraintViolationBuilderInterface')->getMock();
        $constraintViolationBuilder->expects($this->any())->method('setParameter')->willReturnSelf();
        $constraintViolationBuilder->expects($this->any())->method('setCode')->willReturnSelf();

        return $constraintViolationBuilder;
    }

    abstract protected function getValidatorClass(): string;
}
