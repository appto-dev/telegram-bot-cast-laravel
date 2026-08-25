<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\RichTextCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class InputRichBlockExpandableBlockQuotation extends Data implements TelegramType, InputRichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "expandable_blockquote" */
        public string $type,
        /** @var  RichText  Content of the block */
        #[WithCast(RichTextCast::class)]
        public RichText $text,
        /** @var  RichText|null  Credit of the block */
        #[WithCast(RichTextCast::class)]
        public ?RichText $credit,
    ) {
    }
}
