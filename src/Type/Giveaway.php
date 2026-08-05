<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class Giveaway extends Data implements TelegramType
{
    public function __construct(
        /** @var  Chat[]  The list of chats which the user must join to participate in the giveaway */
        public array $chats,
        /** @var  int  Point in time (Unix timestamp) when winners of the giveaway will be selected */
        public int $winners_selection_date,
        /** @var  int  The number of users which are supposed to be selected as winners of the giveaway */
        public int $winner_count,
        /**
         * @var  true|null  True, if only users who join the chats after the giveaway started should be
         * eligible to win
         */
        public ?true $only_new_members,
        /** @var  true|null  True, if the list of giveaway winners will be visible to everyone */
        public ?true $has_public_winners,
        /** @var  string|null  Description of additional giveaway prize */
        public ?string $prize_description,
        /**
         * @var  string[]|null  A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries
         * from which eligible users for the giveaway must come. If empty, then all users can participate in
         * the giveaway. Users with a phone number that was bought on Fragment can always participate in
         * giveaways.
         */
        public ?array $country_codes,
        /**
         * @var  int|null  The number of Telegram Stars to be split between giveaway winners; for Telegram Star
         * giveaways only
         */
        public ?int $prize_star_count,
        /**
         * @var  int|null  The number of months the Telegram Premium subscription won from the giveaway will be
         * active for; for Telegram Premium giveaways only
         */
        public ?int $premium_subscription_month_count,
    ) {
    }
}
