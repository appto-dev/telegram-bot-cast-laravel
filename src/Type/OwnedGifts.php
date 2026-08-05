<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class OwnedGifts extends Data implements TelegramType
{
    public function __construct(
        /** @var  int  The total number of gifts owned by the user or the chat */
        public int $total_count,
        /** @var  OwnedGift[]  The list of gifts */
        public array $gifts,
        /** @var  string|null  Offset for the next request. If empty, then there are no more results. */
        public ?string $next_offset,
    ) {
    }
}
