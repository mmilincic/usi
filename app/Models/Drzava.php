<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Drzava extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'drzava_id';

    protected $table = 'Drzava';

    protected $guarded = [];

    public function grads()
    {
        return $this->hasMany(Grad::class, 'drzava_id', 'drzava_id');
    }
}
