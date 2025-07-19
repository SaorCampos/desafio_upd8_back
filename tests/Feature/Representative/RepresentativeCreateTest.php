<?php

namespace Tests\Feature\Representative;

use App\Models\Client;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RepresentativeCreateTest extends TestCase
{
    use DatabaseTransactions, WithFaker;

    /**
     * @test
     */
    public function createRepresentative_while_authenticated_returnsCreated(): void
    {
        // Arrange
        User::truncate();
        $user = User::factory()->createOne();
        $this->actingAs($user, 'jwt');
        $client1 = Client::factory()->createOne();
        $client2 = Client::factory()->createOne();
        $client3 = Client::factory()->createOne();
        $data = [
            'name' => $this->faker->company,
            'cnpj' => $this->faker->cnpj,
            'address' => $this->faker->address,
            'state' => 'CE',
            'city_name' => 'Fortaleza',
            'clients' => [
                $client1->id,
                $client2->id,
                $client3->id
            ],
        ];
        // Act
        $response = $this->postJson('api/representatives/create', $data);
        $responseBody = json_decode($response->getContent(), true);
        // Assert
        $response->assertStatus(201);
        $this->assertEquals($data['name'], $responseBody['data']['name']);
        $this->assertEquals($data['cnpj'], $responseBody['data']['cnpj']);
        $this->assertEquals($data['address'], $responseBody['data']['address']);
        $this->assertEquals($data['state'], $responseBody['data']['state']);
        $this->assertEquals($data['city_name'], $responseBody['data']['city']);
    }
}
