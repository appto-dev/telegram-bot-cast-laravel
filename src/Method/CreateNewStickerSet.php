<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\InputSticker;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle stickers and sticker sets.
 */
class CreateNewStickerSet extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  int  User identifier of created sticker set owner */
        public int $user_id,
        /**
         * @var  string  Short name of sticker set, to be used in <code>t.me/addstickers/</code> URLs (e.g.,
         * <em>animals</em>). Can contain only English letters, digits and underscores. Must begin with a
         * letter, can't contain consecutive underscores and must end in <code>"_by_<bot_username>"</code>.
         * <code><bot_username></code> is case insensitive. 1-64 characters.
         */
        public string $name,
        /** @var  string  Sticker set title, 1-64 characters */
        public string $title,
        /** @var  InputSticker[]  A JSON-serialized list of 1-50 initial stickers to be added to the sticker set */
        public array $stickers,
        /**
         * @var  string|null  Type of stickers in the set, pass "regular", "mask", or "custom_emoji". By
         * default, a regular sticker set is created.
         */
        public ?string $sticker_type,
        /**
         * @var  bool|null  Pass <em>True</em> if stickers in the sticker set must be repainted to the color of
         * text when used in messages, the accent color if used as emoji status, white on chat photos, or
         * another appropriate color based on context; for custom emoji sticker sets only
         */
        public ?bool $needs_repainting,
    ) {
    }
}
