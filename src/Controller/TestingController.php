<?php

namespace App\Controller;

use App\Model\TestClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestingController extends AbstractController
{
    /**
     * @Route("/test")
     */
    public function test()
    {
        $object = new TestClass();
        $object->foo = 5;

        return new Response('hi!');
    }
}
