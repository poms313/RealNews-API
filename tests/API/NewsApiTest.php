<?php

namespace App\Tests\API;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\Client;
use ApiPlatform\Core\Filter\Validator\Length;
use PHPUnit\Framework\TestCase;
use App\Entity\News;
 
class NewsApiTest extends ApiTestCase {
    public function testFindAllNews(): void
    {
        $response = static::createClient()->request('GET', '/api/news');

        $this->assertResponseIsSuccessful();
    }

    public function testFindAllNewsResponseType() {
        $response = static::createClient()->request('GET', '/api/news');

        $this->assertResponseHeaderSame('content-type', 'application/ld+json; charset=utf-8');
        $this->assertJsonContains([
            '@context' => '/api/contexts/News',
            '@id' => '/api/news',
            '@type' => 'hydra:Collection'
        ]);
    }
    
    
    
}

