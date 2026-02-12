<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes data sent from a <a href="https://core.telegram.org/bots/webapps">Web
 * App</a> to the bot.
 */
final class WebAppData extends Data implements TelegramBotData
{
    public function __construct(
        /** The data. Be aware that a bad client can send arbitrary data in this field. */
        public string $data,
        /**
         * Text of the web_app keyboard button from which the Web App was opened. Be aware
         * that a bad client can send arbitrary data in this field.
         */
        public string $button_text,
    ) {
    }
}
