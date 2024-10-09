<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Describes the birthdate of a user.
 *
 * @version Telegram Bot API 7.10
 */
final class Birthdate extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Day of the user's birth; 1-31
         * @var int
         */
        public int $day,
        /**
         * Month of the user's birth; 1-12
         * @var int
         */
        public int $month,
        /**
         * Year of the user's birth
         * @var int
         */
        public ?int $year,
    ) {
    }
}
