<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class UserChatBoosts extends Data implements TelegramType
{
    public function __construct(
        /** @var  ChatBoost[]  The list of boosts added to the chat by the user */
        public array $boosts,
    ) {
    }
}
