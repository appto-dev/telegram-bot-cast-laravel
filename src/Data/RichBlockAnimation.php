<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A block with an animation, corresponding to the HTML tag <video>.
 */
final class RichBlockAnimation extends Data implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "animation" */
        public string $type,
        /** The animation */
        public Animation $animation,
        /** True, if the media preview is covered by a spoiler animation */
        public ?true $has_spoiler,
        /** Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
