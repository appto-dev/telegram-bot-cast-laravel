<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\MessageEntity;
use Spatie\LaravelData\Data;

/**
 * Gifts a Telegram Premium subscription to the given user. Returns <em>True</em>
 * on success.
 */
final class GiftPremiumSubscription extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the target user who will receive a Telegram Premium
         * subscription
         * @var int
         */
        public int $user_id,
        /**
         * Number of months the Telegram Premium subscription will be active for the user;
         * must be one of 3, 6, or 12
         * @var int
         */
        public int $month_count,
        /**
         * Number of Telegram Stars to pay for the Telegram Premium subscription; must be
         * 1000 for 3 months, 1500 for 6 months, and 2500 for 12 months
         * @var int
         */
        public int $star_count,
        /**
         * Text that will be shown along with the service message about the subscription;
         * 0-128 characters
         * @var string
         */
        public ?string $text,
        /**
         * Mode for parsing entities in the text. See <a
         * href="#formatting-options">formatting options</a> for more details. Entities
         * other than "bold", "italic", "underline", "strikethrough", "spoiler", and
         * "custom_emoji" are ignored.
         * @var string
         */
        public ?string $text_parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the gift text. It can
         * be specified instead of <em>text_parse_mode</em>. Entities other than "bold",
         * "italic", "underline", "strikethrough", "spoiler", and "custom_emoji" are
         * ignored.
         * @var MessageEntity[]
         */
        public ?array $text_entities,
    ) {
    }
}
