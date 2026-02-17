<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about the completion of a giveaway without public winners.
 */
final class GiveawayCompleted extends Data implements TelegramBotData
{
    public function __construct(
        /** Number of winners in the giveaway */
        public int $winner_count,
        /** Number of undistributed prizes */
        public ?int $unclaimed_prize_count,
        /** Message with the giveaway that was completed, if it wasn't deleted */
        public ?Message $giveaway_message,
        /**
         * True, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium
         * giveaway.
         */
        public ?true $is_star_giveaway,
    ) {
    }
}
