<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Specify which fields are mass-assignable
    protected $fillable = ['name', 'detail'];

    // Optionally, you can use $guarded to protect fields you don't want mass-assigned
    // protected $guarded = ['_token'];
}
