<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class KeyboardButtonRequestUsers extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  int  Signed 32-bit identifier of the request that will be received back in the UsersShared
         * object. Must be unique within the message.
         */
        public int $request_id,
        /**
         * @var  bool|null  Pass True to request bots, pass False to request regular users. If not specified,
         * no additional restrictions are applied.
         */
        public ?bool $user_is_bot,
        /**
         * @var  bool|null  Pass True to request premium users, pass False to request non-premium users. If not
         * specified, no additional restrictions are applied.
         */
        public ?bool $user_is_premium,
        /** @var  int|null  The maximum number of users to be selected; 1-10. Defaults to 1. */
        public ?int $max_quantity,
        /** @var  bool|null  Pass True to request the users' first and last names */
        public ?bool $request_name,
        /** @var  bool|null  Pass True to request the users' usernames */
        public ?bool $request_username,
        /** @var  bool|null  Pass True to request the users' photos */
        public ?bool $request_photo,
    ) {
    }
}
