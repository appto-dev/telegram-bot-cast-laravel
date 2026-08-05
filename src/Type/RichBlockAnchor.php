<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichBlockAnchor extends Data implements TelegramType, RichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "anchor" */
        public string $type,
        /** @var  string  The name of the anchor */
        public string $name,
    ) {
    }
}
