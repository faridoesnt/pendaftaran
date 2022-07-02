<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pendaftaran;

class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pendaftaran = Pendaftaran::paginate(10);

        $data['pendaftaran'] = $pendaftaran;

        $view = 'admin.index';

        return view($view, $data);
    }
}
