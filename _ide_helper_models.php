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
 * App\Models\Highlight
 *
 * @property int $id
 * @property string $uuid
 * @property int $video_id
 * @property int|null $user_id
 * @property int $seek_to
 * @property int $length
 * @property string|null $contents
 * @property string|null $published_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Highlight newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Highlight newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Highlight query()
 * @method static \Illuminate\Database\Eloquent\Builder|Highlight whereContents($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Highlight whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Highlight whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Highlight whereLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Highlight wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Highlight whereSeekTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Highlight whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Highlight whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Highlight whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Highlight whereVideoId($value)
 */
	class Highlight extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Video
 *
 * @property int $id
 * @property string $uuid
 * @property int $user_id
 * @property string|null $channel
 * @property string $title
 * @property string $url
 * @property string|null $description
 * @property string|null $published_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Video newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Video newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Video query()
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereChannel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereUuid($value)
 */
	class Video extends \Eloquent {}
}

