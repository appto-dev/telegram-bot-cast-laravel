<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represent a list of gifts.
 */
final class Gifts extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The list of gifts
         * @var Gift[]
         */
        public array $gifts,
    ) {
    }
}
