<?php
/**
 * Created by PhpStorm.
 * User: Herval
 * Date: 14/08/2018
 * Time: 12:17
 */
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class Troca extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'unit_id', 'user1_id', 'turma1', 'user2_id', 'turma2', 'data1', 'turno1', 'tipo1', 'tipo2', 'data2', 'turno2', 'tipo3', 'tipo4', 'situacao',
    ];
}