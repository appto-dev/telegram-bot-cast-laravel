<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Appto\TelegramBot\Type\InputSticker;
use Spatie\LaravelData\Data;

/**
 * Use this method to create a new sticker set owned by a user. The bot will be
 * able to edit the sticker set thus created. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class CreateNewStickerSet extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * User identifier of created sticker set owner
         * @var int
         */
        public int $user_id,
        /**
         * Short name of sticker set, to be used in t.me/addstickers/ URLs (e.g., animals).
         * Can contain only English letters, digits and underscores. Must begin with a
         * letter, can't contain consecutive underscores and must end in
         * "_by_<bot_username>". <bot_username> is case insensitive. 1-64 characters.
         * @var string
         */
        public string $name,
        /**
         * Sticker set title, 1-64 characters
         * @var string
         */
        public string $title,
        /**
         * A JSON-serialized list of 1-50 initial stickers to be added to the sticker set
         * @var InputSticker
         */
        public InputSticker $stickers,
        /**
         * Type of stickers in the set, pass "regular", "mask", or "custom_emoji". By
         * default, a regular sticker set is created.
         * @var string|null
         */
        public ?string $sticker_type,
        /**
         * Pass True if stickers in the sticker set must be repainted to the color of text
         * when used in messages, the accent color if used as emoji status, white on chat
         * photos, or another appropriate color based on context; for custom emoji sticker
         * sets only
         * @var bool|null
         */
        public ?bool $needs_repainting,
    ) {
    }
}
