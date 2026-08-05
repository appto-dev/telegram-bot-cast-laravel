<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class BusinessIntro extends Data implements TelegramType
{
    public function __construct(
        /** @var  string|null  Title text of the business intro */
        public ?string $title,
        /** @var  string|null  Message text of the business intro */
        public ?string $message,
        /** @var  Sticker|null  Sticker of the business intro */
        public ?Sticker $sticker,
    ) {
    }
}
