<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class PaidMediaInfo extends Data implements TelegramType
{
    public function __construct(
        /** @var  int  The number of Telegram Stars that must be paid to buy access to the media */
        public int $star_count,
        /** @var  PaidMedia[]  Information about the paid media */
        public array $paid_media,
    ) {
    }
}
