<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes the birthdate of a user.
 */
final class Birthdate extends Data implements TelegramBotData
{
    public function __construct(
        /** Day of the user's birth; 1-31 */
        public int $day,
        /** Month of the user's birth; 1-12 */
        public int $month,
        /** Year of the user's birth */
        public ?int $year,
    ) {
    }
}
