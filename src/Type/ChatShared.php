<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ChatShared extends Data implements TelegramType
{
    public function __construct(
        /** @var  int  Identifier of the request */
        public int $request_id,
        /**
         * @var  int  Identifier of the shared chat. This number may have more than 32 significant bits and
         * some programming languages may have difficulty/silent defects in interpreting it. But it has at most
         * 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this
         * identifier. The bot may not have access to the chat and could be unable to use this identifier,
         * unless the chat is already known to the bot by some other means.
         */
        public int $chat_id,
        /** @var  string|null  Title of the chat, if the title was requested by the bot */
        public ?string $title,
        /** @var  string|null  Username of the chat, if the username was requested by the bot and available */
        public ?string $username,
        /** @var  PhotoSize[]|null  Available sizes of the chat photo, if the photo was requested by the bot */
        public ?array $photo,
    ) {
    }
}
