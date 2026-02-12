<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents the audios displayed on a user's profile.
 */
final class UserProfileAudios extends Data implements TelegramBotData
{
    public function __construct(
        /** Total number of profile audios for the target user */
        public int $total_count,
        /** Requested profile audios */
        public Audio $audios,
    ) {
    }
}
