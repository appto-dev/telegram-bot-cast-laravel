<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to get information about custom emoji stickers by their
 * identifiers. Returns an Array of <a href="#sticker">Sticker</a> objects.
 *
 * @version Telegram Bot API 7.10
 */
final class GetCustomEmojiStickers extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * A JSON-serialized list of custom emoji identifiers. At most 200 custom emoji
         * identifiers can be specified.
         * @var array<string>
         */
        public string $custom_emoji_ids,
    ) {
    }
}
