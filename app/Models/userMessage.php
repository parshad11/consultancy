<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userMessage extends Model
{
    use HasFactory;
    protected $table ='userMessage';
    protected $fillable= ['usermessage'];
}