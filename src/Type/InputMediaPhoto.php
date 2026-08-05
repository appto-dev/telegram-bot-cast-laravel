<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class InputMediaPhoto extends Data implements TelegramType, InputPollMedia, InputPollOptionMedia, InputMedia
{
    public function __construct(
        /** @var  string  Type of the media, must be photo */
        public string $type,
        /**
         * @var  InputFile|string  File to send. Pass a file_id to send a file that exists on the Telegram
         * servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass
         * "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name>
         * name. More information on Sending Files
         */
        public InputFile|string $media,
        /** @var  string|null  Caption of the photo to be sent, 0-1024 characters after entities parsing */
        public ?string $caption,
        /**
         * @var  string|null  Mode for parsing entities in the photo caption. See formatting options for more
         * details.
         */
        public ?string $parse_mode,
        /**
         * @var  MessageEntity[]|null  List of special entities that appear in the caption, which can be
         * specified instead of parse_mode
         */
        public ?array $caption_entities,
        /** @var  bool|null  Pass True if the caption must be shown above the message media */
        public ?bool $show_caption_above_media,
        /** @var  bool|null  Pass True if the photo needs to be covered with a spoiler animation */
        public ?bool $has_spoiler,
    ) {
    }
}
