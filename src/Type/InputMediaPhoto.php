<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents a photo to be sent.
 *
 * @version Telegram Bot API 7.10
 */
final class InputMediaPhoto extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * File to send. Pass a file_id to send a file that exists on the Telegram servers
         * (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or
         * pass "attach://&lt;file_attach_name&gt;" to upload a new one using
         * multipart/form-data under &lt;file_attach_name&gt; name. More information on
         * Sending Files
         * @var InputFile|string
         */
        public InputFile|string $media,
        /**
         * Caption of the photo to be sent, 0-1024 characters after entities parsing
         * @var string
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the photo caption. See formatting options for more
         * details.
         * @var string
         */
        public ?string $parse_mode,
        /**
         * List of special entities that appear in the caption, which can be specified
         * instead of parse_mode
         * @var MessageEntity[]
         */
        public ?array $caption_entities,
        /**
         * Pass True, if the caption must be shown above the message media
         * @var bool
         */
        public ?bool $show_caption_above_media,
        /**
         * Pass True if the photo needs to be covered with a spoiler animation
         * @var bool
         */
        public ?bool $has_spoiler,
        /**
         * Type of the result, must be photo
         * @var string
         */
        public string $type = 'photo',
    ) {
    }
}
