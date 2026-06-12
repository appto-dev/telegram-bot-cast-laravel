<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a rich message to be sent. Exactly one of the fields <em>html</em> or <em>markdown</em> must be
 * used.
 */
final class InputRichMessage extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Content of the rich message to send described using HTML formatting. See rich message formatting options for
         * more details.
         */
        public ?string $html,
        /**
         * Content of the rich message to send described using Markdown formatting. See rich message formatting options
         * for more details.
         */
        public ?string $markdown,
        /** Pass True if the rich message must be shown right-to-left */
        public ?bool $is_rtl,
        /**
         * Pass True to skip automatic detection of entities (e.g., URLs, email addresses, username mentions, hashtags,
         * cashtags, bot commands, or phone numbers) in the text
         */
        public ?bool $skip_entity_detection,
    ) {
    }
}
