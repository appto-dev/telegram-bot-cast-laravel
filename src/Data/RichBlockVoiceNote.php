<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A block with a voice note, corresponding to the HTML tag <audio>.
 */
final class RichBlockVoiceNote extends Data implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "voice_note" */
        public string $type,
        /** The voice note */
        public Voice $voice_note,
        /** Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
