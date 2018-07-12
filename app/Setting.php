<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {
    //

    public static function get($key) {
        return self::where('key', $key)->first();
    }

    public static function set($key, $value) {
        $existing = self::get($key);

        if (!$existing) {
            $existing = new self;

            $existing->key = $key;
        }

        $existing->value = $value;

        $existing->save();
    }
}
