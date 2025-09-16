<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'hotel_id';

    protected $table = 'Hotel';

    protected $guarded = [];

    public function grad()
    {
        return $this->belongsTo(Grad::class, 'grad_id', 'grad_id');
    }
}
