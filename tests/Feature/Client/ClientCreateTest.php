<?php

namespace Tests\Feature\Client;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientCreateTest extends TestCase
{
    use DatabaseTransactions, WithFaker;

    /**
     * @test
     */
    public function createClient_while_authenticated_returnsCreated(): void
    {
        // Arrange
        $date = $this->faker->date;
        $date = Carbon::parse($date)->format('Y-m-d');
        $data = [
            'name' => $this->faker->name,
            'cpf' => $this->faker->cpf,
            'address' => $this->faker->address,
            'date_birth' => $date,
            'sex' => $this->faker->randomElement(['M', 'F']),
            'state' => 'CE',
            'city_name' => 'Fortaleza',
        ];
        User::truncate();
        $user = User::factory()->createOne();
        $this->actingAs($user, 'jwt');
        // Act
        $response = $this->postJson('/api/clients/create', $data);
        $responseBody = json_decode($response->getContent(), true);
        // Assert
        $response->assertStatus(201);
        $this->assertEquals($data['name'], $responseBody['data']['name']);
        $this->assertEquals($data['cpf'], $responseBody['data']['cpf']);
        $this->assertEquals($data['address'], $responseBody['data']['address']);
        $this->assertEquals($data['date_birth'], $responseBody['data']['dateBirth']);
        $this->assertEquals($data['sex'], $responseBody['data']['sex']);
        $this->assertEquals($data['state'], $responseBody['data']['state']);
        $this->assertEquals($data['city_name'], $responseBody['data']['city']);
    }
}
