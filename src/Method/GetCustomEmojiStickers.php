<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to get information about custom emoji stickers by their
 * identifiers. Returns an Array of <a href="#sticker">Sticker</a> objects.
 */
final class GetCustomEmojiStickers extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * A JSON-serialized list of custom emoji identifiers. At most 200 custom emoji
         * identifiers can be specified.
         * @var string[]
         */
        public array $custom_emoji_ids,
    ) {
    }
}
