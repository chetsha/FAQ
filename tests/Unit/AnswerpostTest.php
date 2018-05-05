<?php

namespace Tests\Entities;

use Illuminate\Database\Eloquent\Model;
use Tests\Entities\Post;
use Tests\Entities\Comment;

class AnswerpostTest extends Post
{
    protected $table = 'body';

    public function comments()
    {
        return $this->hasMany('Tests\Entities\Comment', 'post_id');
    }
}
