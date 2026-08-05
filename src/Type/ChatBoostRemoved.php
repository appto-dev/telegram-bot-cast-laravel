<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\ChatBoostSourceCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ChatBoostRemoved extends Data implements TelegramType
{
    public function __construct(
        /** @var  Chat  Chat which was boosted */
        public Chat $chat,
        /** @var  string  Unique identifier of the boost */
        public string $boost_id,
        /** @var  int  Point in time (Unix timestamp) when the boost was removed */
        public int $remove_date,
        /** @var  ChatBoostSource  Source of the removed boost */
        #[WithCast(ChatBoostSourceCast::class)]
        public ChatBoostSource $source,
    ) {
    }
}
