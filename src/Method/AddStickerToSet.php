<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\InputSticker;
use Spatie\LaravelData\Data;

/**
 * Use this method to add a new sticker to a set created by the bot. Emoji sticker
 * sets can have up to 200 stickers. Other sticker sets can have up to 120
 * stickers. Returns <em>True</em> on success.
 */
final class AddStickerToSet extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * User identifier of sticker set owner
         * @var int
         */
        public int $user_id,
        /**
         * Sticker set name
         * @var string
         */
        public string $name,
        /**
         * A JSON-serialized object with information about the added sticker. If exactly
         * the same sticker had already been added to the set, then the set isn't changed.
         * @var InputSticker
         */
        public InputSticker $sticker,
    ) {
    }
}
