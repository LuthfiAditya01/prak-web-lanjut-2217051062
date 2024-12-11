<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'jurusan_column';

    public function user()
    {
        return $this->hasMany(Jurusan::class, 'jurusan_id');
    }

    public function getJurusan(){
        return $this->all();
    }
}
