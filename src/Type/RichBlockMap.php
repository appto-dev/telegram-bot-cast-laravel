<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichBlockMap extends Data implements TelegramType, RichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "map" */
        public string $type,
        /** @var  Location  Location of the center of the map */
        public Location $location,
        /** @var  int  Map zoom level */
        public int $zoom,
        /** @var  int  Expected width of the map */
        public int $width,
        /** @var  int  Expected height of the map */
        public int $height,
        /** @var  RichBlockCaption|null  Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
