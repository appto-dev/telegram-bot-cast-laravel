<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\RichTextCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichBlockBlockQuotation extends Data implements TelegramType, RichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "blockquote" */
        public string $type,
        /** @var  RichBlock[]  Content of the block */
        public array $blocks,
        /** @var  RichText|null  Credit of the block */
        #[WithCast(RichTextCast::class)]
        public ?RichText $credit,
    ) {
    }
}
