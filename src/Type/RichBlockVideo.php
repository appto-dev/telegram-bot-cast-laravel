<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichBlockVideo extends Data implements TelegramType, RichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "video" */
        public string $type,
        /** @var  Video  The video */
        public Video $video,
        /** @var  true|null  True, if the media preview is covered by a spoiler animation */
        public ?true $has_spoiler,
        /** @var  RichBlockCaption|null  Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
