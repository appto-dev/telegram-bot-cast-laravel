<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputMedia;
use Appto\TelegramBot\Interfaces\InputPollMedia;
use Appto\TelegramBot\Interfaces\InputPollOptionMedia;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents a live photo to be sent.
 */
final class InputMediaLivePhoto extends Data implements TelegramBotData, InputPollMedia, InputPollOptionMedia, InputMedia
{
    public function __construct(
        /** Type of the result, must be live_photo */
        public string $type,
        /**
         * Video of the live photo to send. Pass a file_id to send a file that exists on the Telegram servers
         * (recommended) or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under
         * <file_attach_name> name. More information on Sending Files . Sending live photos by a URL is currently
         * unsupported.
         */
        public InputFile|string $media,
        /**
         * The static photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or
         * pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name>
         * name. More information on Sending Files . Sending live photos by a URL is currently unsupported.
         */
        public InputFile|string $photo,
        /** Caption of the live photo to be sent, 0-1024 characters after entities parsing */
        public ?string $caption,
        /** Mode for parsing entities in the live photo caption. See formatting options for more details. */
        public ?string $parse_mode,
        /**
         * List of special entities that appear in the caption, which can be specified instead of parse_mode
         * @var array<MessageEntity>
         */
        public ?array $caption_entities,
        /** Pass True, if the caption must be shown above the message media */
        public ?bool $show_caption_above_media,
        /** Pass True if the live photo needs to be covered with a spoiler animation */
        public ?bool $has_spoiler,
    ) {
    }
}
