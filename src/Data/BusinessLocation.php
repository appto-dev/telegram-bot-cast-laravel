<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Contains information about the location of a Telegram Business account.
 */
final class BusinessLocation extends Data implements TelegramBotData
{
    public function __construct(
        /** Address of the business */
        public string $address,
        /** Location of the business */
        public ?Location $location,
    ) {
    }
}
