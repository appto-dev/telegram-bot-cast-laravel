<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to work in
 * <a href="/bots/inline">inline mode</a>.Please see our
 * <a href="/bots/inline">Introduction to Inline bots</a> for more details.
 * To enable this option, send the /setinline command to
 * <a href="https://t.me/botfather">@BotFather</a> and provide the placeholder text that the user will
 * see in the input field after typing your bot's name.
 */
class InputTextMessageContent extends Data implements TelegramType, InputMessageContent
{
    public function __construct(
        /** @var  string  Text of the message to be sent, 1-4096 characters */
        public string $message_text,
        /**
         * @var  string|null  Mode for parsing entities in the message text. See formatting options for more
         * details.
         */
        public ?string $parse_mode,
        /**
         * @var  MessageEntity[]|null  List of special entities that appear in message text, which can be
         * specified instead of parse_mode
         */
        public ?array $entities,
        /** @var  LinkPreviewOptions|null  Link preview generation options for the message */
        public ?LinkPreviewOptions $link_preview_options,
    ) {
    }
}
