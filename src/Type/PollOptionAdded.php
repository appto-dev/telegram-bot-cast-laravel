<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\MaybeInaccessibleMessageCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class PollOptionAdded extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  MaybeInaccessibleMessage|null  Message containing the poll to which the option was added, if
         * known. Note that the Message object in this field will not contain the reply_to_message field even
         * if it itself is a reply.
         */
        #[WithCast(MaybeInaccessibleMessageCast::class)]
        public ?MaybeInaccessibleMessage $poll_message,
        /** @var  string  Unique identifier of the added option */
        public string $option_persistent_id,
        /** @var  string  Option text */
        public string $option_text,
        /** @var  MessageEntity[]|null  Special entities that appear in the option_text */
        public ?array $option_text_entities,
    ) {
    }
}
