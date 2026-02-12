<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to get information about the connection of the bot with a
 * business account. Returns a <a
 * href="https://core.telegram.org/bots/api#businessconnection">BusinessConnection</a>
 * object on success.
 */
final class GetBusinessConnection extends Data implements TelegramBotData
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
    ) {
    }
}
