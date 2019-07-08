<?php declare(strict_types=1);

namespace YourMonorepo\SecondPackage;

use Codeception\Test\Unit;

class SecondClassTest extends Unit
{
    /**
     * @return
     */
    public function testGetSecondAttribute(): void
    {
        $secondClass = new SecondClass();

        $this->assertNull($secondClass->getSecondAttribute());
    }
}
