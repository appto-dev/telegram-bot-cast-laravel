<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may not be returned when irrelevant.
 */
class WidgetQueryTypeSignData extends Data implements TelegramType, WidgetQueryType
{
    public function __construct(
        /** @var  string  Type of the query, always "sign_data" */
        public string $type,
        /** @var  WidgetQueryWallet  The wallet that signed the data */
        public WidgetQueryWallet $wallet,
        /** @var  string  JSON-serialized signed data */
        public string $sign_data,
    ) {
    }
}
