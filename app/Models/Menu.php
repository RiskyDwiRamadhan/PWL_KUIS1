<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public static function index() {
        return Menu::where('draft', false)
            ->orderBy('id', 'desc')
            ->paginate(5);
    }
}
