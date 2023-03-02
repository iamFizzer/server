<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class mahasiswa extends Model
{
    public function MahasiswaAll()
    {
        return DB::table('mahasiswa')->get();
    }

}
