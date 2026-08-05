<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\RichTextCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichBlockDetails extends Data implements TelegramType, RichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "details" */
        public string $type,
        /** @var  RichText  Always shown summary of the block */
        #[WithCast(RichTextCast::class)]
        public RichText $summary,
        /** @var  RichBlock[]  Content of the block */
        public array $blocks,
        /** @var  true|null  True, if the content of the block is visible by default */
        public ?true $is_open,
    ) {
    }
}
