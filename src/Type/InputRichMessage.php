<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class InputRichMessage extends Data implements TelegramType
{
    public function __construct(
        /** @var  InputRichBlock[]|null  Content of the rich message to send described as a list of blocks */
        public ?array $blocks,
        /**
         * @var  string|null  Content of the rich message to send described using HTML formatting. See rich
         * message formatting options for more details. Use media field to specify the media used in the
         * message.
         */
        public ?string $html,
        /**
         * @var  string|null  Content of the rich message to send described using Markdown formatting. See rich
         * message formatting options for more details. Use media field to specify the media used in the
         * message.
         */
        public ?string $markdown,
        /**
         * @var  InputRichMessageMedia[]|null  List of media that are specified in the markdown or html fields
         * using tg://photo?id=, tg://video?id=, tg://document?id=, and tg://audio?id= links
         */
        public ?array $media,
        /** @var  bool|null  Pass True if the rich message must be shown right-to-left */
        public ?bool $is_rtl,
        /**
         * @var  bool|null  Pass True to skip automatic detection of entities (e.g., URLs, email addresses,
         * username mentions, hashtags, cashtags, bot commands, or phone numbers) in the text
         */
        public ?bool $skip_entity_detection,
    ) {
    }
}
