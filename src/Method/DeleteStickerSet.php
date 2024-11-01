<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to delete a sticker set that was created by the bot. Returns
 * <em>True</em> on success.
 *
 * @version Telegram Bot API 7.11
 */
final class DeleteStickerSet extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Sticker set name
         * @var string
         */
        public string $name,
    ) {
    }
}
