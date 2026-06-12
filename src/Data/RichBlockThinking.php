<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A block with a "Thinking…" placeholder, corresponding to the custom HTML tag <tg-thinking>. The block may be
 * used only in <a href="https://core.telegram.org/bots/api#sendrichmessagedraft">sendRichMessageDraft</a>,
 * therefore it can't be received in messages. See <a href="https://t.me/addemoji/AIActions"></a><a
 * href="https://t.me/addemoji/AIActions">https://t.me/addemoji/AIActions</a> for examples of custom emoji, which
 * are recommended for usage in the block.
 */
final class RichBlockThinking extends Data implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "thinking" */
        public string $type,
        /**
         * Text of the block. See https://t.me/addemoji/AIActions for examples of custom emoji, which are recommended for
         * usage in the block.
         */
        public RichText $text,
    ) {
    }
}
