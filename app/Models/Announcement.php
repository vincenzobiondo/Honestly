<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
//anziche fare public $location si usa $fillable che è un nome specifico che utilizza Laravel (Eloquent)
   protected $fillable = ['item','price','brand_name','measurements','img'];
}
