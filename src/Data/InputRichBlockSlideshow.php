<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A slideshow, corresponding to the custom HTML tag <tg-slideshow>.
 */
final class InputRichBlockSlideshow extends Data implements TelegramBotData, InputRichBlock
{
    public function __construct(
        /** Type of the block, always "slideshow" */
        public string $type,
        /**
         * Elements of the slideshow
         * @var array<InputRichBlock>
         */
        public array $blocks,
        /** Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
