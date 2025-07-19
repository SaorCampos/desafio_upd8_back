<?php

namespace Tests\Feature\Representative;

use App\Models\Client;
use App\Models\Representative;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RepresentativeUpdateTest extends TestCase
{
    use DatabaseTransactions, WithFaker;

    /**
     * @test
     */
    public function updateRepresentative_while_authenticated_returnsCreated(): void
    {
        // Arrange
        User::truncate();
        $user = User::factory()->createOne();
        $this->actingAs($user, 'jwt');
        $representative = Representative::factory()->createOne();
        $client1 = Client::factory()->createOne();
        $client2 = Client::factory()->createOne();
        $client3 = Client::factory()->createOne();
        $data = [
            'id' => $representative->id,
            'address' => $this->faker->address,
            'state' => 'CE',
            'city_name' => 'Fortaleza',
            'clients' => [
                $client1->id,
                $client2->id,
                $client3->id
            ]
        ];
        // Act
        $response = $this->putJson('api/representatives/update', $data);
        // Assert
        $response->assertStatus(200);
    }
}
