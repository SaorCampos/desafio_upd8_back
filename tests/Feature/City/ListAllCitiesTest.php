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

    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function listingAllCities_without_being_authenticated_returnsUnauthorized(): void
    {
        // Arrange
        // Act
        $response = $this->postJson('api/cities');
        // Assert
        $response->assertStatus(401);
    }
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
        $data = [
            'page' => 1,
            'perPage' => 10
        ];
        // Act
        $response = $this->postJson('api/cities', $data);
        $responseBody = json_decode($response->getContent(), true);
        // Assert
        $response->assertStatus(200);
        $this->assertIsArray($responseBody);
    }
}
