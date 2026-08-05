<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class SuggestedPostInfo extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  string  State of the suggested post. Currently, it can be one of "pending", "approved",
         * "declined".
         */
        public string $state,
        /**
         * @var  SuggestedPostPrice|null  Proposed price of the post. If the field is omitted, then the post is
         * unpaid.
         */
        public ?SuggestedPostPrice $price,
        /**
         * @var  int|null  Proposed send date of the post. If the field is omitted, then the post can be
         * published at any time within 30 days at the sole discretion of the user or administrator who
         * approves it.
         */
        public ?int $send_date,
    ) {
    }
}
