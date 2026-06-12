<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Rich formatted message.
 */
final class RichMessage extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Content of the message
         * @var array<RichBlock>
         */
        public array $blocks,
        /** True, if the rich message must be shown right-to-left */
        public ?bool $is_rtl,
    ) {
    }
}
