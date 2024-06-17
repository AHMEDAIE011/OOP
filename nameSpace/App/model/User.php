<?php
namespace App\model;

use App\Traits\HasRole;
use App\Observers\UserObserver; 
use App\constuct\DatabaseHandler;

class User extends UserObserver implements DatabaseHandler
{
    use HasRole;

}

