<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use Notifiable;

    protected $fillable = [
        'first_name',
        'email',
        'country',
        'last_name',
        'telephone' ,
        'content',
        'slug',
    ];
}