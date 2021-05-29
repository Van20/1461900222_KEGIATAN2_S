<?php

namespace App\Http\Controllers;

use App\Models\Select;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function index()
    {
        //
    }

    public function select()
    {
        $dataSiswa = Select::all();

        return view('select0222', ['dataSiswa' => $dataSiswa]);
    }
}
