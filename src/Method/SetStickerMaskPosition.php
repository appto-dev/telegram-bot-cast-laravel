<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\MaskPosition;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle stickers and sticker sets.
 */
class SetStickerMaskPosition extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  File identifier of the sticker */
        public string $sticker,
        /**
         * @var  MaskPosition|null  A JSON-serialized object with the position where the mask should be placed
         * on faces. Omit the parameter to remove the mask position.
         */
        public ?MaskPosition $mask_position,
    ) {
    }
}
