<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A bot command.
 */
final class RichTextBotCommand extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "bot_command" */
        public string $type,
        /** The text */
        public RichText $text,
        /** The bot command */
        public string $bot_command,
    ) {
    }
}
