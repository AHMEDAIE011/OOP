<?php

require_once 'Database.php';
require_once 'Role.php';


class Admin extends Database
{
    use Role;

    public function delete($id)
    {
        
        if (Role::has('ahmed')) {
            return 'sorry.granted';

        } else {
            return 'sorry. no permission granted';
        }
    }
}
