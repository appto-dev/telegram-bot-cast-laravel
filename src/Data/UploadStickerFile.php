<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to upload a file with a sticker for later use in the <a
 * href="https://core.telegram.org/bots/api#createnewstickerset">createNewStickerSet</a>,
 * <a
 * href="https://core.telegram.org/bots/api#addstickertoset">addStickerToSet</a>,
 * or <a
 * href="https://core.telegram.org/bots/api#replacestickerinset">replaceStickerInSet</a>
 * methods (the file can be used multiple times). Returns the uploaded <a
 * href="https://core.telegram.org/bots/api#file">File</a> on success.
 */
final class UploadStickerFile extends Data implements TelegramBotData
{
    public function __construct(
        /** User identifier of sticker file owner */
        public int $user_id,
        /**
         * A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See <a
         * href="https://core.telegram.org/stickers"></a><a
         * href="https://core.telegram.org/stickers">https://core.telegram.org/stickers</a>
         * for technical requirements. <a
         * href="https://core.telegram.org/bots/api#sending-files">More information on
         * Sending Files </a>
         */
        public InputFile $sticker,
        /** Format of the sticker, must be one of "static", "animated", "video" */
        public string $sticker_format,
    ) {
    }
}
