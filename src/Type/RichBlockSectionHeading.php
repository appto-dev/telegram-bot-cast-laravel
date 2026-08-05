<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\RichTextCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichBlockSectionHeading extends Data implements TelegramType, RichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "heading" */
        public string $type,
        /** @var  RichText  Text of the block */
        #[WithCast(RichTextCast::class)]
        public RichText $text,
        /** @var  int  Relative size of the text font; 1-6, 1 is the largest, 6 is the smallest */
        public int $size,
    ) {
    }
}
