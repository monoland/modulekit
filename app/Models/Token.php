<?php

namespace App\Models;

use Laravel\Passport\Token as Model;

class Token extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string|null
     */
    protected $connection = 'coredb';
}
