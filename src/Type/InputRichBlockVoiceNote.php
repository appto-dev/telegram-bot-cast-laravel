<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class InputRichBlockVoiceNote extends Data implements TelegramType, InputRichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "voice_note" */
        public string $type,
        /** @var  InputMediaVoiceNote  The voice note. Caption is ignored. */
        public InputMediaVoiceNote $voice_note,
        /** @var  RichBlockCaption|null  Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
