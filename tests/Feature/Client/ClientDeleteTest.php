<?php

namespace Tests\Feature\Client;

use App\Models\Client;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ClientDeleteTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @test
    */
    public function deleteClient_while_authenticated__returnsOk(): void
    {
        // Arrange
        User::truncate();
        $user = User::factory()->createOne();
        $this->actingAs($user, 'jwt');
        $client = Client::factory()->createOne();
        // Act
        $response = $this->delete('/api/clients/delete/' . $client->id);
        // Assert
        $response->assertStatus(200);
        $this->assertDatabaseMissing('client', ['id' => $client->id]);
    }
}
