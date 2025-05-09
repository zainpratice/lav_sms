<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    // Define the table name if it differs from the default (plural form of the model)
    protected $table = 'settings';  // Optional if your table is named 'settings'

    // Specify the fillable attributes (columns you want to mass-assign)
    protected $fillable = ['type', 'description'];

    // If your table does not have timestamps, disable them
    public $timestamps = false;  // Set to false if the table does not use 'created_at' and 'updated_at'
}
