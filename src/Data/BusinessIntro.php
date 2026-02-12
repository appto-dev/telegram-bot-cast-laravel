<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Contains information about the start page settings of a Telegram Business
 * account.
 */
final class BusinessIntro extends Data implements TelegramBotData
{
    public function __construct(
        /** Title text of the business intro */
        public ?string $title,
        /** Message text of the business intro */
        public ?string $message,
        /** Sticker of the business intro */
        public ?Sticker $sticker,
    ) {
    }
}
