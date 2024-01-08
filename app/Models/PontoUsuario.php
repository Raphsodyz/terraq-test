<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class PontoUsuario extends Model
{
    use HasUuids;
    protected $table = 'pontos_usuario';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $connection = 'pgsql';
    public $timestamps = false;
    protected $fillable = ['longitude', 'latitude', 'geom'];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'id_municipio');
    }
}