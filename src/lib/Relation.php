<?php
class Relation
{
    static public $relation_types = [
        'hasOne',
        'hasMany',
        'belongsTo',
        'belongsToMany'
    ];
    protected $type = 0;
    protected $model = '';
    protected $this_key = '';
    protected $that_key = '';
}