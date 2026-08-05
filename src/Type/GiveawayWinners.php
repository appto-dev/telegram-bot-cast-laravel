<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class GiveawayWinners extends Data implements TelegramType
{
    public function __construct(
        /** @var  Chat  The chat that created the giveaway */
        public Chat $chat,
        /** @var  int  Identifier of the message with the giveaway in the chat */
        public int $giveaway_message_id,
        /** @var  int  Point in time (Unix timestamp) when winners of the giveaway were selected */
        public int $winners_selection_date,
        /** @var  int  Total number of winners in the giveaway */
        public int $winner_count,
        /** @var  User[]  List of up to 100 winners of the giveaway */
        public array $winners,
        /**
         * @var  int|null  The number of other chats the user had to join in order to be eligible for the
         * giveaway
         */
        public ?int $additional_chat_count,
        /**
         * @var  int|null  The number of Telegram Stars that were split between giveaway winners; for Telegram
         * Star giveaways only
         */
        public ?int $prize_star_count,
        /**
         * @var  int|null  The number of months the Telegram Premium subscription won from the giveaway will be
         * active for; for Telegram Premium giveaways only
         */
        public ?int $premium_subscription_month_count,
        /** @var  int|null  Number of undistributed prizes */
        public ?int $unclaimed_prize_count,
        /**
         * @var  true|null  True, if only users who had joined the chats after the giveaway started were
         * eligible to win
         */
        public ?true $only_new_members,
        /** @var  true|null  True, if the giveaway was canceled because the payment for it was refunded */
        public ?true $was_refunded,
        /** @var  string|null  Description of additional giveaway prize */
        public ?string $prize_description,
    ) {
    }
}
