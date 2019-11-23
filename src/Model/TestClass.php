<?php

namespace App\Model;

use Symfony\Component\Validator\Constraints as Assert;

class TestClass
{
    /**
     * @Assert\Type("string"),
     * @Assert\Length(min="4"),
     * @Assert\Regex("[a-z]"),
     */
    public $foo;
}
