<?php

namespace App\Http\Controllers;

use phpDocumentor\Reflection\Types\Integer;

class UserController
{

public function registration()
{
    return 'registration page';
}

public function authorization()
{
    return 'authorization page';
}

public function show($id)
{
    return 'show page user '.$id;
}

public function delete()
{
    return 'delete page';
}

}
