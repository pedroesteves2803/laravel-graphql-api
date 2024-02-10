<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\GraphQL\Responses\DeleteUserResponse;
use App\Models\User;

final readonly class DeleteUserMutation
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        $user = User::find($args['id']);

        if (!$user) {
            return new DeleteUserResponse(false, 'User não encontrado!');
        }

        $user->posts()->delete();

        $user->delete();

        return new DeleteUserResponse(true, 'User deletado!');
    }
}
