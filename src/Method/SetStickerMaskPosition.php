<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Appto\TelegramBot\Type\MaskPosition;
use Spatie\LaravelData\Data;

/**
 * Use this method to change the <a href="#maskposition">mask position</a> of a
 * mask sticker. The sticker must belong to a sticker set that was created by the
 * bot. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class SetStickerMaskPosition extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * File identifier of the sticker
         * @var string
         */
        public string $sticker,
        /**
         * A JSON-serialized object with the position where the mask should be placed on
         * faces. Omit the parameter to remove the mask position.
         * @var MaskPosition
         */
        public ?MaskPosition $mask_position,
    ) {
    }
}
