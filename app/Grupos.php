<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Grupos extends Model {
    protected $table = 'grupos';
    public $timestamps = false;
    public $incrementing=false;
    protected  $primaryKey = 'cvemat';

}