<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a message about a scheduled giveaway.
 */
final class Giveaway extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The list of chats which the user must join to participate in the giveaway
         * @var Chat[]
         */
        public array $chats,
        /**
         * Point in time (Unix timestamp) when winners of the giveaway will be selected
         * @var int
         */
        public int $winners_selection_date,
        /**
         * The number of users which are supposed to be selected as winners of the giveaway
         * @var int
         */
        public int $winner_count,
        /**
         * True, if only users who join the chats after the giveaway started should be
         * eligible to win
         * @var true
         */
        public ?true $only_new_members,
        /**
         * True, if the list of giveaway winners will be visible to everyone
         * @var true
         */
        public ?true $has_public_winners,
        /**
         * Description of additional giveaway prize
         * @var string
         */
        public ?string $prize_description,
        /**
         * A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries
         * from which eligible users for the giveaway must come. If empty, then all users
         * can participate in the giveaway. Users with a phone number that was bought on
         * Fragment can always participate in giveaways.
         * @var string[]
         */
        public ?array $country_codes,
        /**
         * The number of Telegram Stars to be split between giveaway winners; for Telegram
         * Star giveaways only
         * @var int
         */
        public ?int $prize_star_count,
        /**
         * The number of months the Telegram Premium subscription won from the giveaway
         * will be active for; for Telegram Premium giveaways only
         * @var int
         */
        public ?int $premium_subscription_month_count,
    ) {
    }
}
