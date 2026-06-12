<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A block with a video, corresponding to the HTML tag <video>.
 */
final class RichBlockVideo extends Data implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "video" */
        public string $type,
        /** The video */
        public Video $video,
        /** True, if the media preview is covered by a spoiler animation */
        public ?true $has_spoiler,
        /** Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
