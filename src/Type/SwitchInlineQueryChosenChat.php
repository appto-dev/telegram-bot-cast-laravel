<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class SwitchInlineQueryChosenChat extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  string|null  The default inline query to be inserted in the input field. If left empty, only
         * the bot's username will be inserted.
         */
        public ?string $query,
        /** @var  bool|null  True, if private chats with users can be chosen */
        public ?bool $allow_user_chats,
        /** @var  bool|null  True, if private chats with bots can be chosen */
        public ?bool $allow_bot_chats,
        /** @var  bool|null  True, if group and supergroup chats can be chosen */
        public ?bool $allow_group_chats,
        /** @var  bool|null  True, if channel chats can be chosen */
        public ?bool $allow_channel_chats,
    ) {
    }
}
