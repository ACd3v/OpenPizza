<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
    protected $guarded = [];

    public function products()
    {
        return $this->BelongsToMany(Product::class);
    }
}
