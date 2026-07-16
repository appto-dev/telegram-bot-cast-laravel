<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a media element embedded in an outgoing rich message.
 */
final class InputRichMessageMedia extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Unique identifier of the media used in a tg://photo?id=, tg://video?id=, or tg://audio?id= link. 1-64
         * characters, only A-Z, a-z, 0-9, _ and - are allowed.
         */
        public string $id,
        /** The media to be sent. Everything except the media itself and its properties is ignored. */
        public InputMediaAnimation|InputMediaAudio|InputMediaPhoto|InputMediaVideo|InputMediaVoiceNote $media,
    ) {
    }
}
