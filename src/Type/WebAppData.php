<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Describes data sent from a <a href="/bots/webapps">Web App</a> to the bot.
 *
 * @version Telegram Bot API 7.10
 */
final class WebAppData extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * The data. Be aware that a bad client can send arbitrary data in this field.
         * @var string
         */
        public string $data,
        /**
         * Text of the web_app keyboard button from which the Web App was opened. Be aware
         * that a bad client can send arbitrary data in this field.
         * @var string
         */
        public string $button_text,
    ) {
    }
}
