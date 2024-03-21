<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Client extends Model
{
    use HasFactory;
    protected $table = "clients";
    protected $fillable = ["name", "address", "phone", "id_country"];
    protected $hidden = ["created_at", "updated_at"];
    public function Countries() : BelongsTo{
        return $this->belongsTo(Country::class, "id_country");
    }
}
