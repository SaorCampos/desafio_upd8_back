<?php

namespace Tests\Feature\Representative;

use App\Models\Client;
use App\Models\Representative;
use App\Models\RepresentativeClient;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class RepresentativeListingTest extends TestCase
{
    use DatabaseTransactions;

    private int $count = 10;

    /**
     * @test
     */
    public function listAllRepresentatives_while_being_authenticated_returnsOk(): void
    {
        // Arrange
        User::truncate();
        $user = User::factory()->createOne();
        $this->actingAs($user, 'jwt');
        RepresentativeClient::factory()->count($this->count)->create();
        // Act
        $response = $this->get('api/representatives/?page=1&perPage=10');
        $responseBody = json_decode($response->getContent(), true);
        // Assert
        $response->assertStatus(200);
        $this->assertEquals($this->count, $responseBody['data']['pagination']['total']);
    }
    /**
     * @test
     */
    public function findRepresentativeById_while_being_authenticated_returnsOk(): void
    {
        // Arrange
        User::truncate();
        $user = User::factory()->createOne();
        $this->actingAs($user, 'jwt');
        $representative = Representative::factory()->createOne();
        // Act
        $response = $this->getJson('api/representatives/' . $representative->id);
        $responseBody = json_decode($response->getContent(), true);
        $response->assertStatus(200);
        $this->assertEquals($representative->id, $responseBody['data']['id']);
    }
    /**
     * @test
     */
    public function findRepresentativesByClientId_while_being_authenticated_returnsOk(): void
    {
        // Arrange
        User::truncate();
        $user = User::factory()->createOne();
        $this->actingAs($user, 'jwt');
        $client = Client::factory()->createOne();
        RepresentativeClient::factory()->count($this->count)->create(['client_id' => $client->id]);
        // Act
        $response = $this->getJson('api/representatives/client/' . $client->id);
        $responseBody = json_decode($response->getContent(), true);
        // Assert
        $response->assertStatus(200);
    }
}
