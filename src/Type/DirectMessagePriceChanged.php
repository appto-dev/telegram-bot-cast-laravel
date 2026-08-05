<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class DirectMessagePriceChanged extends Data implements TelegramType
{
    public function __construct(
        /** @var  bool  True, if direct messages are enabled for the channel chat; False otherwise */
        public bool $are_direct_messages_enabled,
        /**
         * @var  int|null  The new number of Telegram Stars that must be paid by users for each direct message
         * sent to the channel. Does not apply to users who have been exempted by administrators. Defaults to
         * 0.
         */
        public ?int $direct_message_star_count,
    ) {
    }
}
