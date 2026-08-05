<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\RichTextCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichBlockCaption extends Data implements TelegramType
{
    public function __construct(
        /** @var  RichText  Block caption */
        #[WithCast(RichTextCast::class)]
        public RichText $text,
        /** @var  RichText|null  Block credit which corresponds to the HTML tag <cite> */
        #[WithCast(RichTextCast::class)]
        public ?RichText $credit,
    ) {
    }
}
