<?php

require __DIR__ . '/../vendor/autoload.php';

use \App\EightTwo;
use \App\EightThree;

pre('Hi, this is PHP v' . PHP_VERSION);

/**
 * Typed Class Constants
 */
//pre(EightTwo\TypedClassConstants::PHP); //Runs in v8.3 & v8.2
//pre(EightThree\TypedClassConstants::PHP); //Fatal error in v8.3, runs in v8.2

/**
 * DeepCloningOfReadOnlyProperties
 */
$instance = new EightThree\DeepCloneReadOnlyClass(new EightThree\NormalClass());
$cloned   = clone $instance;

pre($instance->class->hello);
pre($cloned->class->hello);

$instance->class->hello = 'Code with Ross';

pre($instance->class->hello);
pre($cloned->class->hello);

/**
 * New Json Validate Function
 */
//pre(EightThree\NewJsonValidateFunction::valid());
//pre(EightThree\NewJsonValidateFunction::notValid());

/**
 * New Override Attribute
 */
//pre(EightThree\NewOverrideAttribute::JustATestDoNotPanic()); //Fatal error in v8.3

/**
 *
 */
//pre(EightThree\DynamicClassConstantFetch::{'WHO_AM_I'});

/**
 * New Randomizer::getBytesFromString() method
 */
//pre(EightThree\NewRandomizerMethods::getBytesFromString());
//pre(EightThree\NewRandomizerMethods::getFloat());
//pre(EightThree\NewRandomizerMethods::nextFloat());

/**
 * Command line linter supports multiple files
 */
//php -l foo.php bar.php