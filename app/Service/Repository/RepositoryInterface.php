<?php
namespace App\Service\Repository;

use Exception;
use Illuminate\Database\Eloquent\Model;


interface RepositoryInterface
{
    public function findById(int $id);
}
