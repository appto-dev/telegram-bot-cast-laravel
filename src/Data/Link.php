<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents an HTTP link.
 */
final class Link extends Data implements TelegramBotData
{
    public function __construct(
        /** URL of the link */
        public string $url,
    ) {
    }
}
