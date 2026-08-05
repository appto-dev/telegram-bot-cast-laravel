<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class UsersShared extends Data implements TelegramType
{
    public function __construct(
        /** @var  int  Identifier of the request */
        public int $request_id,
        /** @var  SharedUser[]  Information about users shared with the bot */
        public array $users,
    ) {
    }
}
