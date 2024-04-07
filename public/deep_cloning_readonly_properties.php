<?php

readonly class ReadOnlyClass
{
    public function __construct(public NormalClass $class) {}

    public function __clone(): void
    {
        $this->class = clone $this->class;
    }
}

class NormalClass
{
    public string $hello = 'I am from the Normal Class';
}


$instance = new ReadOnlyClass(new NormalClass());
$cloned = clone $instance;

$instance->class->hello = 'Code with Ross';

echo($instance->class->hello); echo '<br/>';
echo($cloned->class->hello); echo '<br/>';
