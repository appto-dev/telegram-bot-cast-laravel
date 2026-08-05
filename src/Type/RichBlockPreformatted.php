<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\RichTextCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichBlockPreformatted extends Data implements TelegramType, RichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "pre" */
        public string $type,
        /** @var  RichText  Text of the block */
        #[WithCast(RichTextCast::class)]
        public RichText $text,
        /** @var  string|null  The programming language of the text */
        public ?string $language,
    ) {
    }
}
