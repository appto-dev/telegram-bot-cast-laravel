<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * Dice
 *
 * This object represents an animated emoji that displays a random value.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class Dice extends Dto implements TypeInterface
{
    public function __construct(
        /** Emoji on which the dice throw animation is based */
        public string $emoji,
        /**
         * Value of the dice, 1-6 for "", "" and "" base emoji, 1-5 for "" and ""
         * base emoji, 1-64 for "" base emoji
         */
        public int $value,
    ) {
    }
}
