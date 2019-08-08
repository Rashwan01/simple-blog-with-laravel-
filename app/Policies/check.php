<?php

namespace App\Policies;

use App\User;
use App\post;
use Illuminate\Auth\Access\HandlesAuthorization;

class check
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\User  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function update(User $user, post $post)
    {

        return $post->owner_id == $user->id;

    }


}
