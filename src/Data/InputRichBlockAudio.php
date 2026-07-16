<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A block with a music file, corresponding to the HTML tag <audio>.
 */
final class InputRichBlockAudio extends Data implements TelegramBotData, InputRichBlock
{
    public function __construct(
        /** Type of the block, always "audio" */
        public string $type,
        /** The audio. Caption is ignored. */
        public InputMediaAudio $audio,
        /** Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
