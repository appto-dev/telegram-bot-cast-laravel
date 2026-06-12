<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A collage, corresponding to the custom HTML tag <tg-collage>.
 */
final class RichBlockCollage extends Data implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "collage" */
        public string $type,
        /**
         * Elements of the collage
         * @var array<RichBlock>
         */
        public array $blocks,
        /** Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
