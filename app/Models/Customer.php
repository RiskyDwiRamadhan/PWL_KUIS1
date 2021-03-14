<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public static function index() {
        return Customer::where('draft', false)
            ->orderBy('id', 'desc')
            ->paginate(6);
    }
}
