<?php

namespace Test\Helloworld\Models;

use Igniter\Flame\Database\Model;

/**
 * Child1 Model
 */
class Child1 extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'test_helloworld_child1s';

    /**
     * @var array fillable fields
     */
    protected $fillable = [];

    public $timestamps = TRUE;

    /**
     * @var array Relations
     */
    public $relation = [
        'hasOne' => [],
        'hasMany' => [],
        'belongsTo' => [],
        'belongsToMany' => [],
        'morphTo' => [],
        'morphOne' => [],
        'morphMany' => [],
    ];

    protected $primaryKey = 'id';

    public static function getAll()
    {
        return self::get();
    }
}
