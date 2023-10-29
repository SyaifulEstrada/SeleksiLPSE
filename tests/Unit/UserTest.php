<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;

use App\Models\Jurusan;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     */

     public function test_login_form()  {
        $response = $this->get('/login');

        $response->assertStatus(200);
     }

     public function test_user_duplicate () {

        $user1 = User::make([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
        ]);

        $user2 = User::make([
            'name' => 'Erik',
            'email' => 'erik@gmail.com',
        ]);

        $this->assertTrue($user1->name != $user2->name);
     }

     public function test_user_login ()  {

        $response = $this->post('/login', [
            'email' => 'kuvalis.kelton@example.org',
            'password' => 'password',
        ]);

        $response->assertRedirectToRoute('admin.dashboard');

     }

     public function test_model_factories()  {
        $jurusan = Jurusan::factory()->create();

        $this->assertModelExists($jurusan);
     }

     public function test_database()  {
        $this->assertDatabaseHas('jurusan', [
            'nama_jurusan' => 'omnis'
        ]);
     }

     public function test_api_request(): void  {
        $response = $this->postJson('/api/jurusan', ['id_jurusan' => 1]);

         $response->assertStatus(405);
     }


}
