<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a rich message to be sent. Exactly one of the fields <em>html</em>, <em>markdown</em>, or
 * <em>blocks</em> must be used.
 */
final class InputRichMessage extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Content of the rich message to send described as a list of blocks
         * @var array<InputRichBlock>
         */
        public ?array $blocks,
        /**
         * Content of the rich message to send described using HTML formatting. See rich message formatting options for
         * more details. Use media field to specify the media used in the message.
         */
        public ?string $html,
        /**
         * Content of the rich message to send described using Markdown formatting. See rich message formatting options
         * for more details. Use media field to specify the media used in the message.
         */
        public ?string $markdown,
        /**
         * List of media that are specified in the markdown or html fields using tg://photo?id=, tg://video?id=, and
         * tg://audio?id= links
         * @var array<InputRichMessageMedia>
         */
        public ?array $media,
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
