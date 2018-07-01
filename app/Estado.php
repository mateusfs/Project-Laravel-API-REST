<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = "uf";
	protected $primaryKey = "uf_cod";
}
