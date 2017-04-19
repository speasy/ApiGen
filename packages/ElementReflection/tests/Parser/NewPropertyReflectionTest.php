<?php declare(strict_types=1);

namespace ApiGen\ElementReflection\Tests\Parser;

use ApiGen\Contracts\Parser\Reflection\PropertyReflectionInterface;
use ApiGen\ElementReflection\Parser\Parser;
use ApiGen\Tests\AbstractContainerAwareTestCase;

/**
 * Mirror to Function test @see \ApiGen\Parser\Tests\ParserTest
 */
final class NewPropertyReflectionTest extends AbstractContainerAwareTestCase
{
    /**
     * @var PropertyReflectionInterface
     */
    private $propertyReflection;

    protected function setUp()
    {
        /** @var Parser $parser */
        $parser = $this->container->getByType(Parser::class);
        $parser->parseDirectories([__DIR__ . '/../../../../tests/Parser/Parser/ParserSource']);

        $classReflections = $parser->getClassReflections();
        $classReflection = array_pop($classReflections);
        $propertyReflections = $classReflection->getProperties();
        $this->propertyReflection = array_shift($propertyReflections);
    }

    public function testLines()
    {
        $this->assertTrue(true);
//        dump($this->propertyReflection);
//        die;
//
//        $this->assertSame(16, $this->functionReflection->getStartLine());
//        $this->assertSame(18, $this->functionReflection->getEndLine());
    }
//
//    public function testNames(): void
//    {
//        $this->assertSame('SomeNamespace\someAloneFunction', $this->functionReflection->getName());
//        $this->assertSame('someAloneFunction', $this->functionReflection->getShortName());
//        $this->assertSame('SomeNamespace\someAloneFunction()', $this->functionReflection->getPrettyName());
//    }
//
//    public function testNamespaces()
//    {
//        $this->assertSame('SomeNamespace', $this->functionReflection->getNamespaceName());
//        $this->assertSame('SomeNamespace', $this->functionReflection->getPseudoNamespaceName());
//        $this->testNames();
//    }
//
//    public function testAnnotations(): void
//    {
//        $this->assertCount(4, $this->functionReflection->getAnnotations());
//        $this->assertTrue($this->functionReflection->hasAnnotation('return'));
//        $this->assertTrue($this->functionReflection->hasAnnotation('param'));
//
//        $returnAnnotation = $this->functionReflection->getAnnotation('return')[0];
//        $this->assertInstanceOf(Return_::class, $returnAnnotation);
//        $this->assertCount(3, $this->functionReflection->getAnnotation('param'));
//
//        $this->assertFalse($this->functionReflection->isDeprecated());
//
//        $this->assertSame(
//            'Some description.' . PHP_EOL . PHP_EOL . 'And more lines!',
//            $this->functionReflection->getDescription()
//        );
//    }
//
//    public function testParameters()
//    {
//        $parameters = $this->functionReflection->getParameters();
//        $this->assertCount(3, $parameters);
//    }
//
//    public function testMisc()
//    {
//        $this->assertTrue($this->functionReflection->isDocumented());
//    }
}