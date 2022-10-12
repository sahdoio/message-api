<?php

namespace App\Core\Data\Repositories\Thread;

use App\Models\Thread;

interface FindThreadRepositoryContract
{
    public function findOne(FindThreadRepositoryInputDto $data): null|Thread;
}
