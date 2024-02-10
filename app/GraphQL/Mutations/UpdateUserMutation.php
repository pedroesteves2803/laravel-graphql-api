<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\User;

final readonly class UpdateUserMutation
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        $user = User::find($args['id']);

        if (!$user) {
            return null;
        }

        $user->name = $args['name'];
        $user->update();
        return $user;
    }
}
