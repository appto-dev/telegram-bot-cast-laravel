<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents a voice message file to be sent.
 */
final class InputMediaVoiceNote extends Data implements TelegramBotData
{
    public function __construct(
        /** Type of the media, must be voice_note */
        public string $type,
        /**
         * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP
         * URL for Telegram to get a file from the Internet, or pass "attach://<file_attach_name>" to upload a new one
         * using multipart/form-data under <file_attach_name> name. More information on Sending Files
         */
        public InputFile|string $media,
        /** Caption of the voice message to be sent, 0-1024 characters after entities parsing */
        public ?string $caption,
        /** Mode for parsing entities in the voice message caption. See formatting options for more details. */
        public ?string $parse_mode,
        /**
         * List of special entities that appear in the caption, which can be specified instead of parse_mode
         * @var array<MessageEntity>
         */
        public ?array $caption_entities,
        /** Duration of the voice message in seconds */
        public ?int $duration,
    ) {
    }
}
