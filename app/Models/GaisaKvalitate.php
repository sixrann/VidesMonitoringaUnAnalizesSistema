<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GaisaKvalitate extends Model
{
    public function Vietas() {
         return $this->belongsTo(Vietas::class, 'VietasID');
    }
}
