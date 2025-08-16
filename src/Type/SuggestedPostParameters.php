<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Contains parameters of a post that is being suggested by the bot.
 */
final class SuggestedPostParameters extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Proposed price for the post. If the field is omitted, then the post is unpaid.
         * @var SuggestedPostPrice
         */
        public ?SuggestedPostPrice $price,
        /**
         * Proposed send date of the post. If specified, then the date must be between 300
         * second and 2678400 seconds (30 days) in the future. If the field is omitted,
         * then the post can be published at any time within 30 days at the sole discretion
         * of the user who approves it.
         * @var int
         */
        public ?int $send_date,
    ) {
    }
}
