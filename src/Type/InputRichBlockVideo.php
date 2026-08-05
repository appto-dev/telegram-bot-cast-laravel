<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class InputRichBlockVideo extends Data implements TelegramType, InputRichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "video" */
        public string $type,
        /** @var  InputMediaVideo  The video. Caption is ignored. */
        public InputMediaVideo $video,
        /** @var  RichBlockCaption|null  Caption of the block */
        public ?RichBlockCaption $caption,
    ) {
    }
}
