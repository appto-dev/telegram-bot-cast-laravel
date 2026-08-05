<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class InputMediaVoiceNote extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Type of the media, must be voice_note */
        public string $type,
        /**
         * @var  InputFile|string  File to send. Pass a file_id to send a file that exists on the Telegram
         * servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass
         * "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name>
         * name. More information on Sending Files
         */
        public InputFile|string $media,
        /** @var  string|null  Caption of the voice message to be sent, 0-1024 characters after entities parsing */
        public ?string $caption,
        /**
         * @var  string|null  Mode for parsing entities in the voice message caption. See formatting options
         * for more details.
         */
        public ?string $parse_mode,
        /**
         * @var  MessageEntity[]|null  List of special entities that appear in the caption, which can be
         * specified instead of parse_mode
         */
        public ?array $caption_entities,
        /** @var  int|null  Duration of the voice message in seconds */
        public ?int $duration,
    ) {
    }
}
