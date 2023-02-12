<?php

namespace App\Ship\Parents\Repositories;

use Prettus\Repository\Contracts\CacheableInterface as PrettusCacheable;
use Prettus\Repository\Eloquent\BaseRepository as PrettusRepository;

abstract class Repository extends PrettusRepository implements PrettusCacheable
{

}
