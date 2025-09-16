<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grad extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'grad_id';

    protected $table = 'Grad';

    protected $guarded = [];

    public function drzava()
    {
        return $this->belongsTo(Drzava::class, 'drzava_id', 'drzava_id');
    }

    public function grad()
    {
        return $this->hasOne(Let::class, 'grad_sletanja', 'grad_id');
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class, 'grad_id', 'grad_id');
    }
}
