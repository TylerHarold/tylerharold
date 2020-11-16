<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Work;

class Controller extends BaseController
{
    public $viewParams;

    public function index() {
        $this->viewParams['work'] = Work::all();
    }
}
