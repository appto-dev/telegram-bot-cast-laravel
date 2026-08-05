<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class AcceptedGiftTypes extends Data implements TelegramType
{
    public function __construct(
        /** @var  bool  True, if unlimited regular gifts are accepted */
        public bool $unlimited_gifts,
        /** @var  bool  True, if limited regular gifts are accepted */
        public bool $limited_gifts,
        /** @var  bool  True, if unique gifts or gifts that can be upgraded to unique for free are accepted */
        public bool $unique_gifts,
        /** @var  bool  True, if a Telegram Premium subscription is accepted */
        public bool $premium_subscription,
        /** @var  bool  True, if transfers of unique gifts from channels are accepted */
        public bool $gifts_from_channels,
    ) {
    }
}
