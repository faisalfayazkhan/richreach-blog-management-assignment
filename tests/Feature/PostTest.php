<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_post_can_be_created_by_authenticated_user()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/posts', [
            'title' => 'Test Post',
            'content' => 'Test post content',
        ]);
        $response->assertRedirect('/posts');
        $this->assertDatabaseHas('posts', [
            'title' => 'Test Post',
            'content' => 'Test post content',
            'user_id' => $user->id,
        ]);
    }

    /** @test */
    public function an_authenticated_user_can_edit_their_post()
    {
        $user = User::factory()->create();
        $post = Post::factory()->create(['user_id' => $user->id]);
        $response = $this->actingAs($user)->put("/posts/{$post->id}", [
            'title' => 'Updated Post',
            'content' => 'Updated content.',
        ]);
        $response->assertRedirect('/posts');
        $this->assertDatabaseHas('posts', [
            'id' => $post->id,
            'title' => 'Updated Post',
            'content' => 'Updated content.',
        ]);
    }

    /** @test */
    public function an_authenticated_user_can_delete_their_post()
    {
        $user = User::factory()->create();
        $post = Post::factory()->create(['user_id' => $user->id]);
        $response = $this->actingAs($user)->delete("/posts/{$post->id}");
        $response->assertRedirect('/posts');
        $this->assertDatabaseMissing('posts', [
            'id' => $post->id,
        ]);
    }
}
