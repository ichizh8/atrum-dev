<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUsRequest extends Model
{
    protected $fillable = ['client_name', 'client_email', 'client_phone', 'client_message'];
}
