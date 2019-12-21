<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;

interface IArticlesRepository
{
    public function search(string $query = ''): Collection;
}