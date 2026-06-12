<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A block with a map, corresponding to the custom HTML tag <tg-map>.
 */
final class RichBlockMap extends Data implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "map" */
        public string $type,
        /** Location of the center of the map */
        public Location $location,
        /** Map zoom level; 13-20 */
        public int $zoom,
        /** Expected width of the map */
        public int $width,
        /** Expected height of the map */
        public int $height,
        /** Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
