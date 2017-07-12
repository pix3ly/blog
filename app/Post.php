<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    public function blog() {
        return $this->belongsTo('App\Blog');
    }

    public function votes() {
        return $this->hasMany('App\Vote');
    }

    public function netVotes() {
        return ($this->votes()->where('direction', 1)->count() - $this->votes()->where('direction', -1)->count());
    }
}
