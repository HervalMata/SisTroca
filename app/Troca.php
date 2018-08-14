<?php
/**
 * Created by PhpStorm.
 * User: Herval
 * Date: 14/08/2018
 * Time: 12:17
 */
use Illuminate\Database\Eloquent\Model;
class Troca extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $dates;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'unit_id', 'user1_id', 'turma1', 'user2_id', 'turma2', 'data1', 'turno1', 'tipo1', 'tipo2', 'data2', 'turno2', 'tipo3', 'tipo4', 'situacao',
    ];
}