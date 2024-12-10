<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to get a sticker set. On success, a <a
 * href="#stickerset">StickerSet</a> object is returned.
 */
final class GetStickerSet extends Data implements TelegramMethodInterface
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
