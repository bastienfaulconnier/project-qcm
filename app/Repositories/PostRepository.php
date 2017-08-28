<?php

namespace App\Repositories;

use App\Post;

class PostRepository
{
	protected $post;

	public function __construct(Post $post)
	{
		$this->post = $post;
	}

	public function getPostSortByStatusAndDateWithPaginate($paginate) {
		$posts = Post::where('status', '=', 'published')->orderBy('created_at', 'desc')->limit($paginate)->get();
        
        return $posts;
	}
}