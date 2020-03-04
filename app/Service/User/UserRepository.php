<?php

namespace App\Service\User;

use App\Service\Repository\BaseRepository;
use App\User;

class  UserRepository extends BaseRepository implements UserRepositoryInterface
{

    /**
     * @var User
     */
    protected $model;

    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
