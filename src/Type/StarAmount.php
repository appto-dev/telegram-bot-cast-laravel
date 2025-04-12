<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes an amount of Telegram Stars.
 */
final class StarAmount extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Integer amount of Telegram Stars, rounded to 0; can be negative
         * @var int
         */
        public int $amount,
        /**
         * The number of 1/1000000000 shares of Telegram Stars; from -999999999 to
         * 999999999; can be negative if and only if amount is non-positive
         * @var int
         */
        public ?int $nanostar_amount,
    ) {
    }
}
