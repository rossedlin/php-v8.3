<?php

echo(json_validate('{ "test": { "foo": "bar" } }') ? 'Valid' : 'Not Valid'); //Valid
//echo(json_validate('{ "test": { "foo": "bar" } }}') ? 'Valid' : 'Not Valid'); //Not Valid
