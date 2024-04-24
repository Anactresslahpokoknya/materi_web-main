<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Pasok extends Model
{
    use HasFactory;
    protected $table = 'detail_pasoks';
    protected $primaryKey = 'id';

    public $incrementing = false;

    public $guarded = [];
}
