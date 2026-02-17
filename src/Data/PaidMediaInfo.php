<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\PaidMedia;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes the paid media added to a message.
 */
final class PaidMediaInfo extends Data implements TelegramBotData
{
    public function __construct(
        /** The number of Telegram Stars that must be paid to buy access to the media */
        public int $star_count,
        /**
         * Information about the paid media
         * @var PaidMedia[]
         */
        public PaidMedia $paid_media,
    ) {
    }
}
