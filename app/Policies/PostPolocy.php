<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Post;

class PostPolocy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function updatePost(User $user, Post $post)
    {
        return $user->id == $post->user_id;
    }

    public function before(User $user)
    {
        return $this->name == "Ezequiel DHonatan";
    }
}
