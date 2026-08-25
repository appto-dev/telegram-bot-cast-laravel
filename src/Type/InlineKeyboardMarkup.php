<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class InlineKeyboardMarkup extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  array<InlineKeyboardButton[]>  Array of button rows, each represented by an Array of
         * InlineKeyboardButton objects
         */
        public array $inline_keyboard,
        /**
         * @var  bool|null  Pass True if the reply interface must be shown to the user, as if they had manually
         * selected the bot's message and tapped 'Reply'. The value of the field can't be changed when the
         * inline keyboard is edited.
         */
        public ?bool $force_reply,
    ) {
    }
}
