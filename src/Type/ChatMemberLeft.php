<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ChatMemberLeft extends Data implements TelegramType, ChatMember
{
    public function __construct(
        /** @var  string  The member's status in the chat, always "left" */
        public string $status,
        /** @var  User  Information about the user */
        public User $user,
    ) {
    }
}
