<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to change search keywords assigned to a regular or custom emoji
 * sticker. The sticker must belong to a sticker set created by the bot. Returns
 * <em>True</em> on success.
 */
final class SetStickerKeywords extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * File identifier of the sticker
         * @var string
         */
        public string $sticker,
        /**
         * A JSON-serialized list of 0-20 search keywords for the sticker with total length
         * of up to 64 characters
         * @var string[]
         */
        public ?array $keywords,
    ) {
    }
}
