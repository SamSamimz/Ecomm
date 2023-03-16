<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class Product extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

}
