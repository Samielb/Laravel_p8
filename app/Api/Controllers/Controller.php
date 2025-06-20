<?php

namespace App\Api\Controllers;

use Illuminate\Foundation\Auth\Access\RespondsToPasswordlessAuthentication;
use Illuminate\Foundation\Auth\Access\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\ValidatesWhenResolved;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use DispatchesJobs;
    use ValidatesRequests;
    use ValidatesWhenResolved;
    use RespondsToPasswordlessAuthentication;
}
