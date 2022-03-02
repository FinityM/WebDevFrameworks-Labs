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
}