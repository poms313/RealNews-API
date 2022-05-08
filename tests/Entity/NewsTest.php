<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\News;
use App\Entity\Comment;

class NewsTest extends TestCase
{
    public function testAddComment(): void
    {
        // given
        $news = new News();
        $comment = new Comment();
        $nbCommentsBefore = count($news->getComments());

        // when
        $news->addComment($comment);

        // then
        $nbCommentsAfter = count($news->getComments());
        print($nbCommentsAfter);
        echo($nbCommentsBefore+1);
        $this->assertEquals($nbCommentsAfter, $nbCommentsBefore+1);

    }  
}
