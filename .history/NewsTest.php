<?php

namespace App\Tests\Entity;

/*use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\Client;
use ApiPlatform\Core\Filter\Validator\Length;*/
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
    /*
   move to controller test
   public function testGetCollection(): void
    {
        $response = static::createClient()->request('GET', '/api/news?page=1');
        $this->assertResponseIsSuccessful();
    }

    public function testFindNews(): void
    {
        // Asserts that the returned JSON is equal to the passed one
        $iri = $this->findIriBy(News::class, ['id' => '1']);
        static::createClient()->request('GET', $iri);
        $this->assertResponseIsSuccessful();
    }*/
}
