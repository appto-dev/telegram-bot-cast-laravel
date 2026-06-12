<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A block with a photo, corresponding to the HTML tag <photo>.
 */
final class RichBlockPhoto extends Data implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "photo" */
        public string $type,
        /**
         * Available sizes of the photo
         * @var array<PhotoSize>
         */
        public array $photo,
        /** True, if the media preview is covered by a spoiler animation */
        public ?true $has_spoiler,
        /** Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
