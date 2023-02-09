<?php
/**
 * Trait Uuid
 * Responsavel por gerar o empresa_id, na criação.
 * 
 */
namespace App\Models\Traits;

use App\Models\Api\Cadastros\Empresa;


trait EmpresaId
{
    public static function bootEmpresaId()
    {
        static::creating(function ($model) {
            //dd(Empresa::first()->id);
            $model->empresa_id = Empresa::first()->id;
        });
    }
}