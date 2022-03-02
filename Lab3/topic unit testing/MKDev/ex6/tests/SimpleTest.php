<?php
namespace MKDev;

use PHPUnit\Framework\TestCase;
use MKDev\Student;

class StudentTest extends TestCase
{
    public function testNewStudentObjectNotNull()
    {
        // Arrange
        $s = new Student();

        // Act

        // Assert
        $this->assertNotNull($s);
    }

    public function testGetIdReturnsNonNullForNewStudent()
    {
        // Arrange
        $s = new Student();

        //Act
        $s->setId(1);

        //Assert
        $this->assertNotNull($s->getId());


    }

    public function testGetIdReturnsMinusOneForNewStudent()
    {
        // Arrange
        $s = new Student();

        //Act
        $s->setId(-1);

        //Assert
        $this->assertNotNull($s->getId());

    }

    public function testGetIdReturnsEightForNewStudent()
    {
        // Arrange
        $s = new Student();
        $expectedResult = 8;

        //Act
        $s->setId(8);
        $result = $s->getId();

        //Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetGpaValueOneMatchesPreviousSetGpaValueOne()
    {
        // Arrange
        $s = new Student();
        $expectedResult = 1;

        //Act
        $s->setGpa(1);
        $result = $s->getGpa();

        //Assert
        $this->assertEquals($expectedResult, $result);

    }

    public function testGetGpaValueFourMatchesPreviousSetGpaValueFour()
    {
        // Arrange
        $s = new Student();
        $expectedResult = 4;

        // Act
        $s->setGpa(4);
        $result = $s->getGpa();

        // Assert
        $this->assertEquals($expectedResult, $result);

    }

    public function testGetGpaReturnsZeroBeforeAnySetGpa()
    {
        // Arrange
        $s = new Student();
        $expectedResult = 0;

        // Act
        $result = $s->getGpa();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetGpaAfterNegativeSetGpaAfterPositiveSetReturnsZero()
    {
        // Arrange
        $s = new Student();
        $expectedResult = 0;

        // Act
        $s->setGpa(2);
        $s->setGpa(-99);
        $result = $s->getGpa();

        // Assert
        $this->assertEquals($expectedResult, $result);

    }

    public function testGetGpaReturnsZeroAfterSetGpaGreaterThanFour()
    {
        // Arrange
        $s = new Student();
        $expectedResult = 0;

        // Act
        $s->setGpa(100);
        $result = $s->getGpa();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetGpaReturnsMaxGpaAfterSetGpaMaxGpa()
    {
        // Arrange
        $s = new Student();
        $expectedResult = Student::MAX_GPA;


        // Act
        $s->setGpa(Student::MAX_GPA);
        $result = $s->getGpa();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @dataProvider providerForGpaTest
     */

    public function testSetGetGpaWithProvider($value, $expectedResult)
    {
        // Arrange
        $s = new Student();

        // Act
        $s->setGpa($value);
        $result = $s->getGpa();

        // Assert
        $this->assertEquals($expectedResult, $result);

    }

    public function providerForGpaTest()
    {
        // value in / expected getGpa() result
        return [
          [0, 0],
          [0.5, 0.5],
          [1,1],
          [3,3],
          [4,4],
          [5,0],
          [99, 0],
          [-99, 0],
          [-1, 0],
          [-0.1, 0]
        ];

    }
}