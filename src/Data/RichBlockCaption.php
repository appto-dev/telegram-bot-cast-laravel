<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Caption of a rich formatted block.
 */
final class RichBlockCaption extends Data implements TelegramBotData
{
    public function __construct(
        /** Block caption */
        public RichText $text,
        /** Block credit which corresponds to the HTML tag <cite> */
        public ?RichText $credit,
    ) {
    }
}
