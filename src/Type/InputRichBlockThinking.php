<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\RichTextCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class InputRichBlockThinking extends Data implements TelegramType, InputRichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "thinking" */
        public string $type,
        /**
         * @var  RichText  Text of the block. See https://t.me/addemoji/AIActions for examples of custom emoji
         * that are recommended for usage in the block.
         */
        #[WithCast(RichTextCast::class)]
        public RichText $text,
    ) {
    }
}
