<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    protected $table      = "artikel";
    protected $primaryKey = "id";
    public    $timestamps = true;
    protected $fillable   = ['id', 'judul', 'slug', 'slug', 'tag'];
}
