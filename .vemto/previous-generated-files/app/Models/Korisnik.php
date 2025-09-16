<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Korisnik extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'korisnik_id';

    protected $table = 'Korisnik';

    protected $guarded = [];

    public function prethodneDestinacijes()
    {
        return $this->hasMany(
            PrethodneDestinacije::class,
            'korisnik_id',
            'korisnik_id'
        );
    }
}
