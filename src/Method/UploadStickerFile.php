<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\InputFile;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle stickers and sticker sets.
 */
class UploadStickerFile extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  int  User identifier of sticker file owner */
        public int $user_id,
        /**
         * @var  InputFile  A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See
         * <a href="/stickers"></a><a href="https://core.telegram.org/stickers">https://core.telegram.org/stickers</a>
         * for technical requirements. <a href="#sending-files">More information on Sending Files </a>
         */
        public InputFile $sticker,
        /** @var  string  Format of the sticker, must be one of "static", "animated", "video" */
        public string $sticker_format,
    ) {
    }
}
