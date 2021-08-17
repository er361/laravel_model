<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Sf extends Model
{
    protected $fillable = [
        'fist_name',
        'last_name'
    ];

    public $timestamps = false;

    public function setAttribute($key,$value)
    {
        $snake = Str::snake($key);
        return parent::setAttribute($snake,$value);
    }

    public function getAttribute($key)
    {
        if(array_key_exists($key,$this->relations)){
            return parent::getAttribute($key);
        }else
            return parent::getAttribute(Str::snake($key));
    }
}
