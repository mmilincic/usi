<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Let extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'let_id';

    protected $table = 'Let';

    protected $guarded = [];

    public function grads()
    {
        return $this->belongsTo(Grad::class, 'grad_sletanja', 'grad_id');
    }

    public function prethodneDestinacije()
    {
        return $this->hasOne(PrethodneDestinacije::class, 'let_id', 'let_id');
    }
}
