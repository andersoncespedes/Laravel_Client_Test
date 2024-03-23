<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;
    /**
     * Seting the value of the table of this model
     *
     * @var string
     */
    protected $table = "countries";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ["name"];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ["created_at", "updated_at"];
      /**
     * Configuration of the relation
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo;
     */
    public function Client(): HasMany
    {
        return $this->hasMany(Client::class);
    }
}
