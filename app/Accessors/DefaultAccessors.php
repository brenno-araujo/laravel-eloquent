<?php

namespace App\Acessors;

trait DefaultAccessors
{
    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }
}
