<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class BotCommand extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  string  Text of the command; 1-32 characters. Can contain only lowercase English letters,
         * digits and underscores.
         */
        public string $command,
        /** @var  string  Description of the command; 1-256 characters */
        public string $description,
        /**
         * @var  bool|null  True, if the command sends an ephemeral message, which can be seen only by the
         * sender of the message and the bot
         */
        public ?bool $is_ephemeral,
    ) {
    }
}
