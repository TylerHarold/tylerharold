<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

use App\Models\Work;

class Controller extends BaseController
{
    public $viewParams;

    public function index() {
        $this->viewParams['work'] = DB::table('work')->orderBy('id', 'desc')->get();

        return view('index')->with($this->viewParams);
    }

    public function contact() {
        return view('contact');
    }
}
