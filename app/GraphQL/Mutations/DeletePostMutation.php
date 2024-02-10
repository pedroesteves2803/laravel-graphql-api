<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\GraphQL\Responses\DeletePostResponse;
use App\Models\Post;
use Illuminate\Support\Facades\Log;

final readonly class DeletePostMutation
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        $post = Post::find($args['id']);

        if (!$post) {
            return new DeletePostResponse(false, 'Post não encontrado!');
        }

        $post->delete();

        return new DeletePostResponse(true, 'Post deletado!');
    }
}
