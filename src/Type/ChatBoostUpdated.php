<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ChatBoostUpdated extends Data implements TelegramType
{
    public function __construct(
        /** @var  Chat  Chat which was boosted */
        public Chat $chat,
        /** @var  ChatBoost  Information about the chat boost */
        public ChatBoost $boost,
    ) {
    }
}
