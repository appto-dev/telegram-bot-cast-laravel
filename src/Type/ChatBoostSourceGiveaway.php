<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * The boost was obtained by the creation of a Telegram Premium or a Telegram Star
 * giveaway. This boosts the chat 4 times for the duration of the corresponding
 * Telegram Premium subscription for Telegram Premium giveaways and
 * <em>prize_star_count</em> / 500 times for one year for Telegram Star giveaways.
 *
 * @version Telegram Bot API 7.10
 */
final class ChatBoostSourceGiveaway extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Source of the boost, always "giveaway"
         * @var string
         */
        public string $source,
        /**
         * Identifier of a message in the chat with the giveaway; the message could have
         * been deleted already. May be 0 if the message isn't sent yet.
         * @var int
         */
        public int $giveaway_message_id,
        /**
         * User that won the prize in the giveaway if any; for Telegram Premium giveaways
         * only
         * @var User
         */
        public ?User $user,
        /**
         * The number of Telegram Stars to be split between giveaway winners; for Telegram
         * Star giveaways only
         * @var int
         */
        public ?int $prize_star_count,
        /**
         * True, if the giveaway was completed, but there was no user to win the prize
         * @var true
         */
        public ?true $is_unclaimed,
    ) {
    }
}
