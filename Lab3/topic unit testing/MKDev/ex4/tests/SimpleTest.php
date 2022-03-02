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
        $result = $s->getId();

        //Assert
        $this->assertNotNull($result);


    }

    public function testGetIdReturnsMinusOneForNewStudent()
    {
        // Arrange
        $s = new Student();
        $expectedValue = -1;

        //Act
        $result = $s->getId();

        //Assert
        $this->assertEquals($expectedValue, $result);

    }

}