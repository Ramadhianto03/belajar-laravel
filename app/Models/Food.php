<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food// extends Model
{
    private static $data_food =
[
    [
        'title' => 'Nasi Padang',
        'jenis' => 'ayam',
        'seller' => 'Dwi',
        'body' => 'Nasi Atama Kmapung.'
    ],
    [
        'title' => 'Nasi ayam', 
        'jenis' => 'nasi-padang',
        'seller' => 'Dwi',
        'body' => 'Nasi Atama Kmapung.'
    ],
];

    public static function all()
    {
        return self::$data_food;
    }
}