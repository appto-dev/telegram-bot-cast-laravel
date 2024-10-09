<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to get a sticker set. On success, a <a
 * href="#stickerset">StickerSet</a> object is returned.
 *
 * @version Telegram Bot API 7.10
 */
final class GetStickerSet extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Name of the sticker set
         * @var string
         */
        public string $name,
    ) {
    }
}
