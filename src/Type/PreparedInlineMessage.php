<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class PreparedInlineMessage extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Unique identifier of the prepared message */
        public string $id,
        /**
         * @var  int  Expiration date of the prepared message, in Unix time. Expired prepared messages can no
         * longer be used.
         */
        public int $expiration_date,
    ) {
    }
}
