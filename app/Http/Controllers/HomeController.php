<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\App;

class HomeController extends Controller
{
    public function index() {
    	$apps = App::orderBy('created_at')->get();
    	return view('welcome')->with('apps', $apps);
    }

    public function detail($id) {
    	$app = App::where('id', '=', $id)->first();

		$apps = App::orderBy('created_at')->get();

    	return view('detail')
    			->with('app', $app)
    			->with('apps', $apps);
    }
}
