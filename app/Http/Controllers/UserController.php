<?php

namespace App\Http\Controllers;

use App\Service\User\UserRepository;
use App\Service\User\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function findUser($id)
    {
        $user = $this->userRepository->findById($id);
        dd($user);
    }
}
