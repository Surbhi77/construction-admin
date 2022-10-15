<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerModel extends Model
{
    use HasFactory;
    protected $table="career";
    protected $primaryKey="id";
    protected $fillable = [
        'heading',
        'title',
        'description',
        'description_long'
    ];
}
