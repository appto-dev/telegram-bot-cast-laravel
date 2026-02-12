<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\PaidMedia;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The paid media isn't available before the payment.
 */
final class PaidMediaPreview extends Data implements TelegramBotData, PaidMedia
{
    public function __construct(
        /** Type of the paid media, always "preview" */
        public string $type,
        /** Media width as defined by the sender */
        public ?int $width,
        /** Media height as defined by the sender */
        public ?int $height,
        /** Duration of the media in seconds as defined by the sender */
        public ?int $duration,
    ) {
    }
}
