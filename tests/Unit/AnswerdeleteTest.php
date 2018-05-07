<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnswerdeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testDelete()
    {

        $user = $user = factory(\App\User::class)->make();
        $user->delete();
        $question = factory(\App\Question::class)->make();
        $question->user()->associate($user);
        $question->delete();
        $answer = factory(\App\Answer::class)->make();
        $answer->user()->associate($user);
        $answer->question()->associate($question);
        $this->assertTrue($answer->Delete());

    }



}