<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Contains information about a suggested post.
 */
final class SuggestedPostInfo extends Data implements TelegramBotData
{
    public function __construct(
        /** State of the suggested post. Currently, it can be one of "pending", "approved", "declined". */
        public string $state,
        /** Proposed price of the post. If the field is omitted, then the post is unpaid. */
        public ?SuggestedPostPrice $price,
        /**
         * Proposed send date of the post. If the field is omitted, then the post can be published at any time within 30
         * days at the sole discretion of the user or administrator who approves it.
         */
        public ?int $send_date,
    ) {
    }
}
