<?php

namespace App\Model;

class TestClass
{
    /**
     * @Assert\Sequentially({
     *     @Assert\Type("string"),
     *     @Assert\Length(min="4"),
     *     @Assert\Regex("[a-z]"),
     * })
     */
    public $foo;
}
