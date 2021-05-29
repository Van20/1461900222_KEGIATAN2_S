<?php

namespace App\Http\Controllers;

use App\Models\Select;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function selectLike()
    {
        $dataSiswa = DB::table('siswa')
            ->where('nama', 'like', 'ABI%')
            ->get();

        $dataSiswa2 = DB::table('siswa')
            ->where('nama', 'like', 'NOVI%')
            ->get();

        return view('selectlike0222', ['dataSiswa1' => $dataSiswa, 'dataSiswa2' => $dataSiswa2]);
    }
}
