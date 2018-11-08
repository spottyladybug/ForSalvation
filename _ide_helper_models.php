<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Donor
 *
 */
	class Donor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Hospital
 *
 */
	class Hospital extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Prompt
 *
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Prompt onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Prompt withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Prompt withoutTrashed()
 */
	class Prompt extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Schedule
 *
 */
	class Schedule extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Trial
 *
 */
	class Trial extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 */
	class User extends \Eloquent {}
}

