<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to move a sticker in a set created by the bot to a specific
 * position. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class SetStickerPositionInSet extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * File identifier of the sticker
         * @var string
         */
        public string $sticker,
        /**
         * New sticker position in the set, zero-based
         * @var int
         */
        public int $position,
    ) {
    }
}
