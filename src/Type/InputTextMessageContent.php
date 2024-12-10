<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents the <a href="#inputmessagecontent">content</a> of a text message to
 * be sent as the result of an inline query.
 */
final class InputTextMessageContent extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Text of the message to be sent, 1-4096 characters
         * @var string
         */
        public string $message_text,
        /**
         * Mode for parsing entities in the message text. See formatting options for more
         * details.
         * @var string
         */
        public ?string $parse_mode,
        /**
         * List of special entities that appear in message text, which can be specified
         * instead of parse_mode
         * @var MessageEntity[]
         */
        public ?array $entities,
        /**
         * Link preview generation options for the message
         * @var LinkPreviewOptions
         */
        public ?LinkPreviewOptions $link_preview_options,
    ) {
    }
}
