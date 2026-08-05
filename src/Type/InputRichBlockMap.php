<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class InputRichBlockMap extends Data implements TelegramType, InputRichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "map" */
        public string $type,
        /** @var  Location  Location of the center of the map */
        public Location $location,
        /** @var  int  Map zoom level; 0-24 */
        public int $zoom,
        /** @var  int  Map width; 0-10000 */
        public int $width,
        /** @var  int  Map height; 0-10000 */
        public int $height,
        /** @var  RichBlockCaption|null  Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
