<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to get a list of profile pictures for a user. Returns a <a
 * href="https://core.telegram.org/bots/api#userprofilephotos">UserProfilePhotos</a>
 * object.
 */
final class GetUserProfilePhotos extends Data implements TelegramBotData
{
    public function __construct(
        /** Unique identifier of the target user */
        public int $user_id,
        /**
         * Sequential number of the first photo to be returned. By default, all photos are
         * returned.
         */
        public ?int $offset,
        /**
         * Limits the number of photos to be retrieved. Values between 1-100 are accepted.
         * Defaults to 100.
         */
        public ?int $limit,
    ) {
    }
}
