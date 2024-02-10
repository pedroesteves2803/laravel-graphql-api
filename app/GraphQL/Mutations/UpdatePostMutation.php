<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Post;
use Illuminate\Support\Facades\Log;

final readonly class UpdatePostMutation
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        $post = Post::find($args['id']);

        if (!$post) {
            return null;
        }

        $post->title = $args['title'];
        $post->content = $args['content'];
        $post->update();
        return $post;
    }
}
