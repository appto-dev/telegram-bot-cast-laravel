<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputMessageContent;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents the <a href="https://core.telegram.org/bots/api#inputmessagecontent">content</a> of a text message
 * to be sent as the result of an inline query.
 */
final class InputTextMessageContent extends Data implements TelegramBotData, InputMessageContent
{
    public function __construct(
        /** Text of the message to be sent, 1-4096 characters */
        public string $message_text,
        /** Mode for parsing entities in the message text. See formatting options for more details. */
        public ?string $parse_mode,
        /** List of special entities that appear in message text, which can be specified instead of parse_mode */
        public ?MessageEntity $entities,
        /** Link preview generation options for the message */
        public ?LinkPreviewOptions $link_preview_options,
    ) {
    }
}
