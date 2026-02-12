<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to get a list of profile audios for a user. Returns a <a
 * href="https://core.telegram.org/bots/api#userprofileaudios">UserProfileAudios</a>
 * object.
 */
final class GetUserProfileAudios extends Data implements TelegramBotData
{
    public function __construct(
        /** Unique identifier of the target user */
        public int $user_id,
        /**
         * Sequential number of the first audio to be returned. By default, all audios are
         * returned.
         */
        public ?int $offset,
        /**
         * Limits the number of audios to be retrieved. Values between 1-100 are accepted.
         * Defaults to 100.
         */
        public ?int $limit,
    ) {
    }
}
