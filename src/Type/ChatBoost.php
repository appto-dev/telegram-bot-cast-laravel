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
class ChatBoost extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Unique identifier of the boost */
        public string $boost_id,
        /** @var  int  Point in time (Unix timestamp) when the chat was boosted */
        public int $add_date,
        /**
         * @var  int  Point in time (Unix timestamp) when the boost will automatically expire, unless the
         * booster's Telegram Premium subscription is prolonged
         */
        public int $expiration_date,
        /** @var  ChatBoostSource  Source of the added boost */
        #[WithCast(ChatBoostSourceCast::class)]
        public ChatBoostSource $source,
    ) {
    }
}
