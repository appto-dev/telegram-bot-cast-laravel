<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Appto\TelegramBot\Type\InputFile;
use Spatie\LaravelData\Data;

/**
 * Use this method to upload a file with a sticker for later use in the <a
 * href="#createnewstickerset">createNewStickerSet</a>, <a
 * href="#addstickertoset">addStickerToSet</a>, or <a
 * href="#replacestickerinset">replaceStickerInSet</a> methods (the file can be
 * used multiple times). Returns the uploaded <a href="#file">File</a> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class UploadStickerFile extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * User identifier of sticker file owner
         * @var int
         */
        public int $user_id,
        /**
         * A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See <a
         * href="/stickers"></a><a
         * href="https://core.telegram.org/stickers">https://core.telegram.org/stickers</a>
         * for technical requirements. <a href="#sending-files">More information on Sending
         * Files </a>
         * @var InputFile
         */
        public InputFile $sticker,
        /**
         * Format of the sticker, must be one of "static", "animated", "video"
         * @var string
         */
        public string $sticker_format,
    ) {
    }
}
