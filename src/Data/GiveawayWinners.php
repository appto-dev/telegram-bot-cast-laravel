<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a message about the completion of a giveaway with public
 * winners.
 */
final class GiveawayWinners extends Data implements TelegramBotData
{
    public function __construct(
        /** The chat that created the giveaway */
        public Chat $chat,
        /** Identifier of the message with the giveaway in the chat */
        public int $giveaway_message_id,
        /** Point in time (Unix timestamp) when winners of the giveaway were selected */
        public int $winners_selection_date,
        /** Total number of winners in the giveaway */
        public int $winner_count,
        /** List of up to 100 winners of the giveaway */
        public User $winners,
        /**
         * The number of other chats the user had to join in order to be eligible for the
         * giveaway
         */
        public ?int $additional_chat_count,
        /**
         * The number of Telegram Stars that were split between giveaway winners; for
         * Telegram Star giveaways only
         */
        public ?int $prize_star_count,
        /**
         * The number of months the Telegram Premium subscription won from the giveaway
         * will be active for; for Telegram Premium giveaways only
         */
        public ?int $premium_subscription_month_count,
        /** Number of undistributed prizes */
        public ?int $unclaimed_prize_count,
        /**
         * True, if only users who had joined the chats after the giveaway started were
         * eligible to win
         */
        public ?true $only_new_members,
        /** True, if the giveaway was canceled because the payment for it was refunded */
        public ?true $was_refunded,
        /** Description of additional giveaway prize */
        public ?string $prize_description,
    ) {
    }
}
