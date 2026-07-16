<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A block with an animation, corresponding to the HTML tag <video>.
 */
final class InputRichBlockAnimation extends Data implements TelegramBotData, InputRichBlock
{
    public function __construct(
        /** Type of the block, always "animation" */
        public string $type,
        /** The animation. Caption is ignored. */
        public InputMediaAnimation $animation,
        /** Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
