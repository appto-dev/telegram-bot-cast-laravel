<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a bot command.
 */
final class BotCommand extends Data implements TelegramBotData
{
    public function __construct(
        /** Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores. */
        public string $command,
        /** Description of the command; 1-256 characters */
        public string $description,
        /**
         * True, if the command sends an ephemeral message, which can be seen only by the sender of the message and the
         * bot
         */
        public ?bool $is_ephemeral,
    ) {
    }
}
