<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Contains information about a suggested post.
 */
final class SuggestedPostInfo extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * State of the suggested post. Currently, it can be one of "pending", "approved",
         * "declined".
         * @var string
         */
        public string $state,
        /**
         * Proposed price of the post. If the field is omitted, then the post is unpaid.
         * @var SuggestedPostPrice
         */
        public ?SuggestedPostPrice $price,
        /**
         * Proposed send date of the post. If the field is omitted, then the post can be
         * published at any time within 30 days at the sole discretion of the user or
         * administrator who approves it.
         * @var int
         */
        public ?int $send_date,
    ) {
    }
}
