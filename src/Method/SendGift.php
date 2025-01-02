<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\MessageEntity;
use Spatie\LaravelData\Data;

/**
 * Sends a gift to the given user. The gift can't be converted to Telegram Stars by
 * the user. Returns <em>True</em> on success.
 */
final class SendGift extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the target user that will receive the gift
         * @var int
         */
        public int $user_id,
        /**
         * Identifier of the gift
         * @var string
         */
        public string $gift_id,
        /**
         * Pass <em>True</em> to pay for the gift upgrade from the bot's balance, thereby
         * making the upgrade free for the receiver
         * @var bool
         */
        public ?bool $pay_for_upgrade,
        /**
         * Text that will be shown along with the gift; 0-255 characters
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
