<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\WidgetQueryTypeCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may not be returned when irrelevant.
 */
class SharedWidgetQuery extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Unique identifier for this query */
        public string $id,
        /** @var  User  Sender */
        public User $from,
        /** @var  WidgetQueryType  Type of the query */
        #[WithCast(WidgetQueryTypeCast::class)]
        public WidgetQueryType $type,
        /** @var  string  Data of the query, 1-64 bytes */
        public string $data,
        /** @var  string  Unique identifier of the shared widget, which sent the query */
        public string $widget_id,
    ) {
    }
}
