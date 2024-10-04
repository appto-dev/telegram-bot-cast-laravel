<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\StickerSet;
use Spatie\LaravelData\Data;

/**
 * GetStickerSet
 *
 * Use this method to get a sticker set. On success, a StickerSet object is
 * returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class GetStickerSet extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = StickerSet::class;

    public function __construct(
        /** Name of the sticker set */
        public string $name,
    ) {
    }
}
