<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
         'first_name',
         'last_name',
         'gender',
         'email',
         'tell1',
         'tell2',
         'tell3',
         'address',
         'building',
         'content'
     ];
}

