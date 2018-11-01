<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['voornaam','achternaam','adres','postcode','woonplaats','telefoon','email','iban','body'];
}
