<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichBlockPhoto extends Data implements TelegramType, RichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "photo" */
        public string $type,
        /** @var  PhotoSize[]  Available sizes of the photo */
        public array $photo,
        /** @var  true|null  True, if the media preview is covered by a spoiler animation */
        public ?true $has_spoiler,
        /** @var  RichBlockCaption|null  Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
