<?php

namespace Tests\Feature\Client;

use App\Models\Client;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientUpdateTest extends TestCase
{
    use DatabaseTransactions, WithFaker;

    /**
     * @test
     */
    public function updateCLient_while_authenticated__returnsOk(): void
    {
        // Arrange
        User::truncate();
        $user = User::factory()->createOne();
        $this->actingAs($user, 'jwt');
        $client = Client::factory()->createOne();
        $data = [
            'client_id' => $client->id,
            'address' => $this->faker->address,
            'state' => 'CE',
            'city_name' => 'Fortaleza',
        ];
        // Act
        $response = $this->putJson('api/clients/update', $data);
        $responseBody = json_decode($response->getContent(), true);
        // Assert
        $response->assertStatus(200);
        $this->assertEquals($data['address'], $responseBody['data']['address']);
        $this->assertEquals($data['state'], $responseBody['data']['state']);
        $this->assertEquals($data['city_name'], $responseBody['data']['city']);
        $this->assertEquals($data['client_id'], $responseBody['data']['id']);
    }
}
