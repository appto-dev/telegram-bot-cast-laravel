<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A block with a map, corresponding to the custom HTML tag <tg-map>. The map's width and height must not exceed
 * 10000 in total. The width and height ratio must be at most 20.
 */
final class InputRichBlockMap extends Data implements TelegramBotData, InputRichBlock
{
    public function __construct(
        /** Type of the block, always "map" */
        public string $type,
        /** Location of the center of the map */
        public Location $location,
        /** Map zoom level; 0-24 */
        public int $zoom,
        /** Map width; 0-10000 */
        public int $width,
        /** Map height; 0-10000 */
        public int $height,
        /** Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
