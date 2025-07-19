<?php

namespace Tests\Feature\Client;

use App\Models\City;
use App\Models\Client;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ClientFindAllTest extends TestCase
{
    use DatabaseTransactions;

    private int $count = 10;

    /**
     * @test
     */
    public function findAllCLients_while_being_authenticated_returnsOk(): void
    {
        // Arrange
        User::truncate();
        $user = User::factory()->createOne();
        $this->actingAs($user, 'jwt');
        Client::factory()->count($this->count)->create();
        $data = [
            'page' => 1,
            'per_page' => 10,
        ];
        // Act
        $response = $this->postJson('api/clients/', $data);
        $responseBody = json_decode($response->getContent(), true);
        // Assert
        $response->assertStatus(200);
        $this->assertEquals($this->count, $responseBody['data']['pagination']['total']);
    }
    /**
     * @test
     */
    public function findClientById_while_being_authenticated_returnsOk(): void
    {
        // Arrange
        User::truncate();
        $user = User::factory()->createOne();
        $this->actingAs($user, 'jwt');
        $client = Client::factory()->createOne();
        // Act
        $response = $this->getJson('api/clients/' . $client->id);
        $responseBody = json_decode($response->getContent(), true);
        // Assert
        $response->assertStatus(200);
        $this->assertEquals($client->id, $responseBody['data']['id']);
    }
    /**
     * @test
     */
    public function findClientById_while_being_authenticated_returnsNotFound(): void
    {
        // Arrange
        User::truncate();
        $user = User::factory()->createOne();
        $this->actingAs($user, 'jwt');
        // Act
        $response = $this->getJson('api/clients/1');
        // Assert
        $response->assertStatus(404);
    }
    /**
     * @test
     */
    public function findClientByCityId_while_being_authenticated_returnsOk(): void
    {
        // Arrange
        User::truncate();
        $user = User::factory()->createOne();
        $this->actingAs($user, 'jwt');
        $city = City::factory()->createOne();
        Client::factory()->count($this->count)->create();
        // Act
        $response = $this->get('api/clients/city/'.$city->id);
        $responseBody = json_decode($response->getContent(), true);
        // Assert
        $response->assertStatus(200);
    }
}
