<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * SetStickerKeywords
 *
 * Use this method to change search keywords assigned to a regular or custom emoji
 * sticker. The sticker must belong to a sticker set created by the bot. Returns
 * True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class SetStickerKeywords extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;

    public function __construct(
        /** File identifier of the sticker */
        public string $sticker,
        /**
         * A JSON-serialized list of 0-20 search keywords for the sticker with
         * total length of up to 64 characters
         * @var array<string>
         */
        public ?array $keywords,
    ) {
    }
}
