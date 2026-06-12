<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\PaidMedia;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The paid media is a <a href="https://core.telegram.org/bots/api#livephoto">live photo</a>.
 */
final class PaidMediaLivePhoto extends Data implements TelegramBotData, PaidMedia
{
    public function __construct(
        /** Type of the paid media, always "live_photo" */
        public string $type,
        /** The photo */
        public LivePhoto $live_photo,
    ) {
    }
}
