<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\Sticker;
use Spatie\LaravelData\Data;

/**
 * GetCustomEmojiStickers
 *
 * Use this method to get information about custom emoji stickers by their
 * identifiers. Returns an Array of Sticker objects.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class GetCustomEmojiStickers extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = [Sticker::class];

    public function __construct(
        /**
         * A JSON-serialized list of custom emoji identifiers. At most 200 custom
         * emoji identifiers can be specified.
         * @var array<string>
         */
        public array $custom_emoji_ids,
    ) {
    }
}
