<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Post;
use Illuminate\Support\Facades\Log;

final readonly class CreatePostMutation
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        $post = new Post();

        $post->title = $args['title'];
        $post->content = $args['content'];
        $post->user_id = $args['user_id'];
        $post->save();

        return $post;
    }
}
