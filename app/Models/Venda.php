<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Venda extends Model
{
    use HasFactory;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'produto_id',
        'preco',
        'cliente_id',
        'qtd',
        'desconto',
        'status',
    ];
    public function produto()
    {
        return $this->hasOne(Produto::class,"id","produto_id");
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}


