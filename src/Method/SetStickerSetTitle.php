<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to set the title of a created sticker set. Returns <em>True</em>
 * on success.
 *
 * @version Telegram Bot API 7.11
 */
final class SetStickerSetTitle extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Sticker set name
         * @var string
         */
        public string $name,
        /**
         * Sticker set title, 1-64 characters
         * @var string
         */
        public string $title,
    ) {
    }
}
