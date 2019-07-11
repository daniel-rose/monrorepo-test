<?php declare(strict_types=1);

namespace YourMonorepo\FirstPackage;

final class FirstClass
{
    public const X = 'X';

    /**
     * @var null|string
     */
    protected $firstAttribute;

    /**
     * @return string|null
     */
    public function getFirstAttribute(): ?string
    {
        return $this->firstAttribute;
    }

    /**
     * @param string|null $firstAttribute
     * @return FirstClass
     */
    public function setFirstAttribute(?string $firstAttribute): FirstClass
    {
        $this->firstAttribute = $firstAttribute;

        return $this;
    }
}
