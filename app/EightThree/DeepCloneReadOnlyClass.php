<?php

namespace App\EightThree;

readonly class DeepCloneReadOnlyClass
{
    public function __construct(public NormalClass $class)
    {}

    /**
     * This is the deep cloning, otherwise the clone of DeepCloneReadOnlyClass will have a pointer to the NormalClass
     * And won't properly clone it.
     *
     * @return void
     */
    public function __clone(): void
    {
        $this->class = clone $this->class;
    }
}

class NormalClass
{
    public string $hello = 'world';
}
