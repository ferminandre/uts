<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kontakModel extends Model
{
    protected $fillable = ['nama', 'telepon', 'email', 'alamat'];
}
