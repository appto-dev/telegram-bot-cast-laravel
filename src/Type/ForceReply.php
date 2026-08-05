<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ForceReply extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  true  Shows reply interface to the user, as if they manually selected the bot's message and
         * tapped 'Reply'
         */
        public true $force_reply,
        /**
         * @var  string|null  The placeholder to be shown in the input field when the reply is active; 1-64
         * characters
         */
        public ?string $input_field_placeholder,
        /**
         * @var  bool|null  Use this parameter if you want to force reply from specific users only. Targets: 1)
         * users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply to a
         * message in the same chat and forum topic, sender of the original message.
         */
        public ?bool $selective,
    ) {
    }
}
