<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Post;
use App\Models\User;

final readonly class CreateUserMutation
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        $user = new User();

        $user->name = $args['name'];
        $user->email = $args['email'];
        $user->password = bcrypt($args['email']);
        $user->save();

        return $user;
    }
}
