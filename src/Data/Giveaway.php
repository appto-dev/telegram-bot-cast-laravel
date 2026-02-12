<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a message about a scheduled giveaway.
 */
final class Giveaway extends Data implements TelegramBotData
{
    public function __construct(
        /** The list of chats which the user must join to participate in the giveaway */
        public Chat $chats,
        /** Point in time (Unix timestamp) when winners of the giveaway will be selected */
        public int $winners_selection_date,
        /** The number of users which are supposed to be selected as winners of the giveaway */
        public int $winner_count,
        /**
         * True, if only users who join the chats after the giveaway started should be
         * eligible to win
         */
        public ?true $only_new_members,
        /** True, if the list of giveaway winners will be visible to everyone */
        public ?true $has_public_winners,
        /** Description of additional giveaway prize */
        public ?string $prize_description,
        /**
         * A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries
         * from which eligible users for the giveaway must come. If empty, then all users
         * can participate in the giveaway. Users with a phone number that was bought on
         * Fragment can always participate in giveaways.
         */
        public ?array $country_codes,
        /**
         * The number of Telegram Stars to be split between giveaway winners; for Telegram
         * Star giveaways only
         */
        public ?int $prize_star_count,
        /**
         * The number of months the Telegram Premium subscription won from the giveaway
         * will be active for; for Telegram Premium giveaways only
         */
        public ?int $premium_subscription_month_count,
    ) {
    }
}
