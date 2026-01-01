<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes the rating of a user based on their Telegram Star
 * spendings.
 */
final class UserRating extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Current level of the user, indicating their reliability when purchasing digital
         * goods and services. A higher level suggests a more trustworthy customer; a
         * negative level is likely reason for concern.
         * @var int
         */
        public int $level,
        /**
         * Numerical value of the user's rating; the higher the rating, the better
         * @var int
         */
        public int $rating,
        /**
         * The rating value required to get the current level
         * @var int
         */
        public int $current_level_rating,
        /**
         * The rating value required to get to the next level; omitted if the maximum level
         * was reached
         * @var int
         */
        public ?int $next_level_rating,
    ) {
    }
}
