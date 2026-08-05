<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class InputRichMessageMedia extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  string  Unique identifier of the media used in a tg://photo?id=, tg://video?id=, or
         * tg://audio?id= link. 1-64 characters, only A-Z, a-z, 0-9, _ and - are allowed.
         */
        public string $id,
        /**
         * @var  InputMediaAnimation|InputMediaAudio|InputMediaPhoto|InputMediaVideo|InputMediaVoiceNote  The
         * media to be sent. Everything except the media itself and its properties is ignored.
         */
        public InputMediaAnimation|InputMediaAudio|InputMediaPhoto|InputMediaVideo|InputMediaVoiceNote $media,
    ) {
    }
}
