<?php declare(strict_types=1);

namespace YourMonorepo\SecondPackage;

final class SecondClass
{
    /**
     * @var string|null
     */
    protected $secondAttribute;

    /**
     * @return string|null
     */
    public function getSecondAttribute(): ?string
    {
        return $this->secondAttribute;
    }

    /**
     * @param string|null $secondAttribute
     *
     * @return \YourMonorepo\SecondPackage\SecondClass
     */
    public function setSecondAttribute(?string $secondAttribute): SecondClass
    {
        $this->secondAttribute = $secondAttribute;

        return $this;
    }
}
