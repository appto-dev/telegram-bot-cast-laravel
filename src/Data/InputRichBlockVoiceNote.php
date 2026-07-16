<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A block with a voice note, corresponding to the HTML tag <audio>.
 */
final class InputRichBlockVoiceNote extends Data implements TelegramBotData, InputRichBlock
{
    public function __construct(
        /** Type of the block, always "voice_note" */
        public string $type,
        /** The voice note. Caption is ignored. */
        public InputMediaVoiceNote $voice_note,
        /** Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
