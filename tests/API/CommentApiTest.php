<?php

namespace App\Tests\API;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\Client;
use ApiPlatform\Core\Filter\Validator\Length;
use PHPUnit\Framework\TestCase;
use App\Entity\Comment;

class CommentApiTest extends ApiTestCase {

    public function testFindAllComments(): void
    {
        $response = static::createClient()->request('GET', '/api/comments');

        $this->assertResponseIsSuccessful();
    }

    public function testFindAllCommentsResponseType() {
      $response = static::createClient()->request('GET', '/api/comments');

      $this->assertResponseHeaderSame('content-type', 'application/ld+json; charset=utf-8');
      $this->assertJsonContains([
          '@context' => '/api/contexts/Comment',
          '@id' => '/api/comments',
          '@type' => 'hydra:Collection'
      ]);
  }
}

