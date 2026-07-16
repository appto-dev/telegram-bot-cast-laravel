<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A block with a video, corresponding to the HTML tag <video>.
 */
final class InputRichBlockVideo extends Data implements TelegramBotData, InputRichBlock
{
    public function __construct(
        /** Type of the block, always "video" */
        public string $type,
        /** The video. Caption is ignored. */
        public InputMediaVideo $video,
        /** Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
