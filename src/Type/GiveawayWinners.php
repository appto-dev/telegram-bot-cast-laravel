<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a message about the completion of a giveaway with public
 * winners.
 *
 * @version Telegram Bot API 7.10
 */
final class GiveawayWinners extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The chat that created the giveaway
         * @var Chat
         */
        public Chat $chat,
        /**
         * Identifier of the message with the giveaway in the chat
         * @var int
         */
        public int $giveaway_message_id,
        /**
         * Point in time (Unix timestamp) when winners of the giveaway were selected
         * @var int
         */
        public int $winners_selection_date,
        /**
         * Total number of winners in the giveaway
         * @var int
         */
        public int $winner_count,
        /**
         * List of up to 100 winners of the giveaway
         * @var User[]
         */
        public array $winners,
        /**
         * The number of other chats the user had to join in order to be eligible for the
         * giveaway
         * @var int
         */
        public ?int $additional_chat_count,
        /**
         * The number of Telegram Stars that were split between giveaway winners; for
         * Telegram Star giveaways only
         * @var int
         */
        public ?int $prize_star_count,
        /**
         * The number of months the Telegram Premium subscription won from the giveaway
         * will be active for; for Telegram Premium giveaways only
         * @var int
         */
        public ?int $premium_subscription_month_count,
        /**
         * Number of undistributed prizes
         * @var int
         */
        public ?int $unclaimed_prize_count,
        /**
         * True, if only users who had joined the chats after the giveaway started were
         * eligible to win
         * @var true
         */
        public ?true $only_new_members,
        /**
         * True, if the giveaway was canceled because the payment for it was refunded
         * @var true
         */
        public ?true $was_refunded,
        /**
         * Description of additional giveaway prize
         * @var string
         */
        public ?string $prize_description,
    ) {
    }
}
