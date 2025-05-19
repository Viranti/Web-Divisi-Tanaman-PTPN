<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_register_with_valid_data()
    {
        $response = $this->post('/daftar-store', [
            'name' => 'Contoh Pengguna',
            'email' => 'contoh@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        // karena setelah register diarahkan ke dashboard (pastikan ini sesuai)
        $response->assertRedirect('/dashboard');

        $this->assertDatabaseHas('users', [
            'email' => 'contoh@example.com',
        ]);
    }

    /** @test */
    public function user_cannot_register_with_invalid_data()
    {
        $response = $this->post('/daftar-store', [
            'name' => '',
            'email' => 'salah-format',
            'password' => '123',
        ]);

        // Laravel redirect kembali jika gagal validasi
        $response->assertStatus(302);
        $response->assertSessionHas('error_message'); // karena kamu menyimpan pesan error gabungan di sini

    }

    /** @test */
    public function user_can_login_with_correct_credentials()
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password123'),
        ]);

        $response = $this->post('/login-store', [
            'email' => 'test@example.com',
            'password' => 'password123',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function user_cannot_login_with_invalid_credentials()
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password123'),
        ]);

        $response = $this->post('/login-store', [
            'email' => 'test@example.com',
            'password' => 'salahpassword',
        ]);

        $response->assertStatus(302);
        $response->assertSessionHas('error'); // ini tergantung implementasi kamu
        $this->assertGuest();
    }

    /** @test */
    public function user_can_logout_successfully()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/logout'); // karena kamu pakai GET untuk logout

        $response->assertRedirect('/'); // diasumsikan redirect ke halaman beranda
        $this->assertGuest();
    }
}
