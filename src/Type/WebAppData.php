<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * WebAppData
 *
 * Describes data sent from a Web App to the bot.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class WebAppData extends Dto implements TypeInterface
{
    public function __construct(
        /**
         * The data. Be aware that a bad client can send arbitrary data in this
         * field.
         */
        public string $data,
        /**
         * Text of the web_app keyboard button from which the Web App was opened.
         * Be aware that a bad client can send arbitrary data in this field.
         */
        public string $button_text,
    ) {
    }
}