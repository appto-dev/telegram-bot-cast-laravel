<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * KeyboardButtonPollType
 *
 * This object represents type of a poll, which is allowed to be created and sent
 * when the corresponding button is pressed.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class KeyboardButtonPollType extends Data implements TypeInterface
{
    public function __construct(
        /**
         * If quiz is passed, the user will be allowed to create only polls in
         * the quiz mode. If regular is passed, only regular polls will be
         * allowed. Otherwise, the user will be allowed to create a poll of any
         * type.
         */
        public ?string $type,
    ) {
    }
}
