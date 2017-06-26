<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin extends IsType
{
    public function getType()
    {
        $this->getRedirect();

        return 1;
    }
}
