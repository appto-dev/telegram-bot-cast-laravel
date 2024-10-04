<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * SetStickerSetTitle
 *
 * Use this method to set the title of a created sticker set. Returns True on
 * success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class SetStickerSetTitle extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;

    public function __construct(
        /** Sticker set name */
        public string $name,
        /** Sticker set title, 1-64 characters */
        public string $title,
    ) {
    }
}
