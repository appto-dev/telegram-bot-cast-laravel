<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichBlockSlideshow extends Data implements TelegramType, RichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "slideshow" */
        public string $type,
        /** @var  RichBlock[]  Elements of the slideshow */
        public array $blocks,
        /** @var  RichBlockCaption|null  Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
