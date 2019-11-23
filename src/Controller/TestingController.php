<?php

namespace App\Controller;

use App\Model\TestClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class TestingController extends AbstractController
{
    /**
     * @Route("/test")
     */
    public function test(ValidatorInterface $validator)
    {
        $object = new TestClass();
        $object->foo = 5;

        $violations = $validator->validate($object);

        dump($violations);die;
    }
}
