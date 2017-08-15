<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Reply
 *
 * @property-read \App\User $owner
 */
	class Reply extends \Eloquent {}
}

namespace App{
/**
 * App\Thread
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Reply[] $replies
 */
	class Thread extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 */
	class User extends \Eloquent {}
}

