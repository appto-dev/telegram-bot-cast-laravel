<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class UserRating extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  int  Current level of the user, indicating their reliability when purchasing digital goods and
         * services. A higher level suggests a more trustworthy customer; a negative level is likely reason for
         * concern.
         */
        public int $level,
        /** @var  int  Numerical value of the user's rating; the higher the rating, the better */
        public int $rating,
        /** @var  int  The rating value required to get the current level */
        public int $current_level_rating,
        /**
         * @var  int|null  The rating value required to get to the next level; omitted if the maximum level was
         * reached
         */
        public ?int $next_level_rating,
    ) {
    }
}
