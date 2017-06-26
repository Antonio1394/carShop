<?php

namespace App\Http\Middleware;

use Closure;

class IsUser extends IsType
{
    public function getType()
    {
        $this->getRedirect();

        return 2;
    }
}
