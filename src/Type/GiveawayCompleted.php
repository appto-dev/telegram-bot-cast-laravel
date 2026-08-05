<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class GiveawayCompleted extends Data implements TelegramType
{
    public function __construct(
        /** @var  int  Number of winners in the giveaway */
        public int $winner_count,
        /** @var  int|null  Number of undistributed prizes */
        public ?int $unclaimed_prize_count,
        /** @var  Message|null  Message with the giveaway that was completed, if it wasn't deleted */
        public ?Message $giveaway_message,
        /**
         * @var  true|null  True, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the
         * giveaway is a Telegram Premium giveaway.
         */
        public ?true $is_star_giveaway,
    ) {
    }
}
