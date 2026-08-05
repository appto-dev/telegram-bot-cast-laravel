<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class PaidMediaPreview extends Data implements TelegramType, PaidMedia
{
    public function __construct(
        /** @var  string  Type of the paid media, always "preview" */
        public string $type,
        /** @var  int|null  Media width as defined by the sender */
        public ?int $width,
        /** @var  int|null  Media height as defined by the sender */
        public ?int $height,
        /** @var  int|null  Duration of the media in seconds as defined by the sender */
        public ?int $duration,
    ) {
    }
}
