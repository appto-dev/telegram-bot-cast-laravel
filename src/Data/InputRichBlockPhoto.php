<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A block with a photo, corresponding to the HTML tag <img>.
 */
final class InputRichBlockPhoto extends Data implements TelegramBotData, InputRichBlock
{
    public function __construct(
        /** Type of the block, always "photo" */
        public string $type,
        /** The photo. Caption is ignored. */
        public InputMediaPhoto $photo,
        /** Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
