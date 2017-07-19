<?php
/**
 * Created by PhpStorm.
 * User: eugene
 * Date: 2017/7/18
 * Time: 19:32
 */

namespace Eugene\ApiLog\Models;


use Illuminate\Database\Eloquent\Model;

class VisitLog extends Model
{
    protected $table = 'visit_log';
    protected $guarded = [];
    protected $casts = [
        'request_params' => 'array'
    ];

}