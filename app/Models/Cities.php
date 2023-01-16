<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "name",
        "name_en",
        "cities_id",
        "order",
        "order_en",
        "name_ar",
        "lat",
        "lng",
        "is_other",
        "searchable_text",
        "url_name_ar",
        "url_name_en",
    ];
}
