<?php

namespace App\Controller;

use App\Document\User;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    private $dm;

    public function __construct(DocumentManager $dm)
    {
        $this->dm = $dm;
    }

    public function listUsers()
    {
        // Sử dụng DocumentManager để truy vấn MongoDB để lấy danh sách Users
        $userRepository = $this->dm->getRepository(User::class);
        $users = $userRepository->findAll();
        dd($users);
    }

    public function addUser(){
        $user = new User();
        $user->setName("thoi");
        $user->setPrice("200");
        $this->dm->persist($user);
        $this->dm->flush();
        
        return new Response('success');
    }
}