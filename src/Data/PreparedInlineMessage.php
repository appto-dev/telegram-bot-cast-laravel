<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes an inline message to be sent by a user of a Mini App.
 */
final class PreparedInlineMessage extends Data implements TelegramBotData
{
    public function __construct(
        /** Unique identifier of the prepared message */
        public string $id,
        /**
         * Expiration date of the prepared message, in Unix time. Expired prepared messages
         * can no longer be used
         */
        public int $expiration_date,
    ) {
    }
}
