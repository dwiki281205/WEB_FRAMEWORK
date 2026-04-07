<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        return "Ini adalah method index di MahasiswaController";
    }
    public function insertSql()
    {
        $query = DB::insert("INSERT INTO students(nim,nama_lengkap,tempat_lahir,
        tgl_lahir,email,prodi,alamat,created_at,updated_at) VALUES ('2022090909',
        'Linus B Torvalds','Finlandia','1971-08-12','linus@linux.org','TRPL',
        'Jl. Sudirman no.10 Padang',now(),now())");
    }
    
}