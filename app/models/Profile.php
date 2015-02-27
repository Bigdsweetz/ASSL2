<?php
/**
 * Created by PhpStorm.
 * User: bbarters
 * Date: 16-11-2014
 * Time: 08:31
 */

class Profile extends Eloquent {
    public static $table = 'users';  //static table named

    public function user()
    {

        return $this->belongsTo('User', 'user_id');

    }
    public static function firstOrNew(array $attributes)
    {
        if ( ! is_null($instance = static::where($attributes)->first()))
        {
            return $instance;
        }
        return new static($attributes);
    }
}
