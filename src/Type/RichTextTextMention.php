<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\RichTextCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichTextTextMention extends Data implements TelegramType, RichText
{
    public function __construct(
        /** @var  string  Type of the rich text, always "text_mention" */
        public string $type,
        /** @var  RichText  The text */
        #[WithCast(RichTextCast::class)]
        public RichText $text,
        /** @var  User  The mentioned user */
        public User $user,
    ) {
    }
}
