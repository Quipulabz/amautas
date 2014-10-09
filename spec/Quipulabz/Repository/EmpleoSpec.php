<?php

namespace spec\Quipulabz\Repository;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EmpleoSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Quipulabz\Repository\Empleo');
    }
}
