<?php

/**
 * Created by PhpStorm.
 * User: Herval
 * Date: 14/08/2018
 * Time: 12:06
 */
use Illuminate\Database\Eloquent\Model;
class Unit extends Model
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
        'name',
    ];
}