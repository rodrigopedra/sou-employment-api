<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class IssuingEntity extends Model
{
    /**
     * Define o atributo para deleção lógica
     */
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * Indica o atributo para não definir dados em massa
     */
    protected $guarded = ['id'];

    /**
     * Indica os atributos para definir dados em massa
     */
    protected $fillable = ['name'];

    /**
     * Define atributos para não mostrar após a serialização dos dados
     */
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Mapeamento do relacionamento com entidades emissoras
     */
    public function issuing_entities(){
        return $this->hasMany(IssuingEntity::class);
    }
}
