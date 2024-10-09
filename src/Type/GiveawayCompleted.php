<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about the completion of a giveaway
 * without public winners.
 *
 * @version Telegram Bot API 7.10
 */
final class GiveawayCompleted extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Number of winners in the giveaway
         * @var int
         */
        public int $winner_count,
        /**
         * Number of undistributed prizes
         * @var int|null
         */
        public ?int $unclaimed_prize_count,
        /**
         * Message with the giveaway that was completed, if it wasn't deleted
         * @var Message|null
         */
        public ?Message $giveaway_message,
        /**
         * True, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the
         * giveaway is a Telegram Premium giveaway.
         * @var true|null
         */
        public ?true $is_star_giveaway,
    ) {
    }
}
