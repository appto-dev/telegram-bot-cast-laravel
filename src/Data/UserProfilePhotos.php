<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represent a user's profile pictures.
 */
final class UserProfilePhotos extends Data implements TelegramBotData
{
    public function __construct(
        /** Total number of profile pictures the target user has */
        public int $total_count,
        /**
         * Requested profile pictures (in up to 4 sizes each)
         * @var PhotoSize[][]
         */
        public array $photos,
    ) {
    }
}
