<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\RichTextCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichTextDateTime extends Data implements TelegramType, RichText
{
    public function __construct(
        /** @var  string  Type of the rich text, always "date_time" */
        public string $type,
        /** @var  RichText  The text */
        #[WithCast(RichTextCast::class)]
        public RichText $text,
        /** @var  int  The Unix time associated with the entity */
        public int $unix_time,
        /**
         * @var  string  The string that defines the formatting of the date and time. See date-time entity
         * formatting for more details.
         */
        public string $date_time_format,
    ) {
    }
}
