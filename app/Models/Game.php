<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = 'table_data_game';

    protected $fillable = ['tanggal', 'team1', 'team2', 'keterangan']; 
}
