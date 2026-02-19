<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\MessageEntity;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Sends a gift to the given user or channel chat. The gift can't be converted to Telegram Stars by the receiver. Returns
 * <em>True</em> on success.
 */
final class SendGift extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Required if <em>chat_id</em> is not specified. Unique identifier of the target user who will receive the gift. */
        public ?int $user_id,
        /**
         * Required if <em>user_id</em> is not specified. Unique identifier for the chat or username of the channel (in the format
         * <code>@channelusername</code>) that will receive the gift.
         */
        public int|string|null $chat_id,
        /** Identifier of the gift; limited gifts can't be sent to channel chats */
        public string $gift_id,
        /** Pass <em>True</em> to pay for the gift upgrade from the bot's balance, thereby making the upgrade free for the receiver */
        public ?bool $pay_for_upgrade,
        /** Text that will be shown along with the gift; 0-128 characters */
        public ?string $text,
        /**
         * Mode for parsing entities in the text. See <a href="#formatting-options">formatting options</a> for more details.
         * Entities other than "bold", "italic", "underline", "strikethrough", "spoiler", and "custom_emoji" are ignored.
         */
        public ?string $text_parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of
         * <em>text_parse_mode</em>. Entities other than "bold", "italic", "underline", "strikethrough", "spoiler", and
         * "custom_emoji" are ignored.
         * @var array<MessageEntity>
         */
        public ?array $text_entities,
    ) {
    }
}
