<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\InputSticker;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * ReplaceStickerInSet
 *
 * Use this method to replace an existing sticker in a sticker set with a new one.
 * The method is equivalent to calling deleteStickerFromSet, then addStickerToSet,
 * then setStickerPositionInSet. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ReplaceStickerInSet extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;

    public function __construct(
        /** User identifier of the sticker set owner */
        public int $user_id,
        /** Sticker set name */
        public string $name,
        /** File identifier of the replaced sticker */
        public string $old_sticker,
        /**
         * A JSON-serialized object with information about the added sticker. If
         * exactly the same sticker had already been added to the set, then the
         * set remains unchanged.
         */
        public InputSticker $sticker,
    ) {
    }
}
