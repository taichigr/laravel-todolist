<?php

namespace App;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Listitem extends Model
{
    //
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
