<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\InputSticker;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * AddStickerToSet
 *
 * Use this method to add a new sticker to a set created by the bot. Emoji sticker
 * sets can have up to 200 stickers. Other sticker sets can have up to 120
 * stickers. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class AddStickerToSet extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;

    public function __construct(
        /** User identifier of sticker set owner */
        public int $user_id,
        /** Sticker set name */
        public string $name,
        /**
         * A JSON-serialized object with information about the added sticker. If
         * exactly the same sticker had already been added to the set, then the
         * set isn't changed.
         */
        public InputSticker $sticker,
    ) {
    }
}
