<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A collage, corresponding to the custom HTML tag <tg-collage>.
 */
final class InputRichBlockCollage extends Data implements TelegramBotData, InputRichBlock
{
    public function __construct(
        /** Type of the block, always "collage" */
        public string $type,
        /**
         * Elements of the collage
         * @var array<InputRichBlock>
         */
        public array $blocks,
        /** Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
