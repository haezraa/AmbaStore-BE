<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nominal extends Model
{
    protected $guarded = [];

    public function getImageAttribute($value)
    {
        if ($value) {
            return url('storage/' . $value);
        }

        return null;
    }

    public function game() {
        return $this->belongsTo(Game::class);
    }
}
