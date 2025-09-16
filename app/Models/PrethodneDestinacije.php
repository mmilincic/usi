<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PrethodneDestinacije extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'pret_id';

    protected $table = 'PrethodneDestinacije';

    protected $guarded = [];

    public function korisnik()
    {
        return $this->belongsTo(Korisnik::class, 'korisnik_id', 'korisnik_id');
    }

    public function lets()
    {
        return $this->belongsTo(Let::class, 'let_id', 'let_id');
    }
}
