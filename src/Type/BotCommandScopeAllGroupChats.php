<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class BotCommandScopeAllGroupChats extends Data implements TelegramType, BotCommandScope
{
    public function __construct(
        /** @var  string  Scope type, must be all_group_chats */
        public string $type,
    ) {
    }
}
