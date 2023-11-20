<?php
namespace App\Http\Service;
use App\Models\Post;
class PostService {
    public function all_posts(){
        $posts = Post::all();
        return $posts;
    }
}
