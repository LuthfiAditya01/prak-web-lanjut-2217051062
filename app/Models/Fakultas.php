<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'fakultas_column';

    public function user()
    {
        return $this->hasMany(Fakultas::class, 'fakultas_id');
    }
}
