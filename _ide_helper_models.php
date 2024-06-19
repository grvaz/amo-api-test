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
 * App\Models\Account
 *
 * @property int $id
 * @property int $billing_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account query()
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereBillingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereUpdatedAt($value)
 */
	class Account extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Kvit
 *
 * @property int $id
 * @property int $account_id
 * @property int $num
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\KvitField[] $fields
 * @property-read int|null $fields_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\KvitField[] $fieldsSimple
 * @property-read int|null $fields_simple_count
 * @property-read mixed $date
 * @method static \Illuminate\Database\Eloquent\Builder|Kvit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kvit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kvit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kvit whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kvit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kvit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kvit whereNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kvit whereUpdatedAt($value)
 */
	class Kvit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KvitField
 *
 * @property int $id
 * @property int $account_id
 * @property int $kvit_field_type_id
 * @property int $kvit_id
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\KvitFieldType|null $kvitFieldType
 * @method static \Illuminate\Database\Eloquent\Builder|KvitField newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KvitField newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KvitField query()
 * @method static \Illuminate\Database\Eloquent\Builder|KvitField whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvitField whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvitField whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvitField whereKvitFieldTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvitField whereKvitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvitField whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvitField whereValue($value)
 */
	class KvitField extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KvitFieldType
 *
 * @property int $id
 * @property int $account_id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name_text
 * @property string $placeholder
 * @property mixed $data
 * @property-read mixed $value
 * @method static \Illuminate\Database\Eloquent\Builder|KvitFieldType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KvitFieldType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KvitFieldType query()
 * @method static \Illuminate\Database\Eloquent\Builder|KvitFieldType whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvitFieldType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvitFieldType whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvitFieldType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvitFieldType whereNameText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvitFieldType wherePlaceholder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvitFieldType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KvitFieldType whereUpdatedAt($value)
 */
	class KvitFieldType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tmp
 *
 * @property int $id
 * @property string $data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tmp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tmp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tmp query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tmp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tmp whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tmp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tmp whereUpdatedAt($value)
 */
	class Tmp extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property int $account_id
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
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAccountId($value)
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

