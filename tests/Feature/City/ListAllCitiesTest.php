<?php

namespace Tests\Feature\City;

use App\Models\City;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ListAllCitiesTest extends TestCase
{
    use DatabaseTransactions;

    private int $count = 10;

    /**
     * @test
     */
    public function listingAllCities_with_being_authenticated_returnsOk(): void
    {
        // Arrange
        User::truncate();
        $user = User::factory()->createOne();
        $this->actingAs($user, 'jwt');
        City::factory()->count($this->count)->create();
        // Act
        $response = $this->get('api/cities');
        $responseBody = json_decode($response->getContent(), true);
        // Assert
        $response->assertStatus(200);
        $this->assertIsArray($responseBody);
    }
}
