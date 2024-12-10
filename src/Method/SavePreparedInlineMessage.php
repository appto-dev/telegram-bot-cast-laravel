<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\InlineQueryResult;
use Spatie\LaravelData\Data;

/**
 * Stores a message that can be sent by a user of a Mini App. Returns a <a
 * href="#preparedinlinemessage">PreparedInlineMessage</a> object.
 */
final class SavePreparedInlineMessage extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the target user that can use the prepared message
         * @var int
         */
        public int $user_id,
        /**
         * A JSON-serialized object describing the message to be sent
         * @var InlineQueryResult
         */
        public InlineQueryResult $result,
        /**
         * Pass <em>True</em> if the message can be sent to private chats with users
         * @var bool
         */
        public ?bool $allow_user_chats,
        /**
         * Pass <em>True</em> if the message can be sent to private chats with bots
         * @var bool
         */
        public ?bool $allow_bot_chats,
        /**
         * Pass <em>True</em> if the message can be sent to group and supergroup chats
         * @var bool
         */
        public ?bool $allow_group_chats,
        /**
         * Pass <em>True</em> if the message can be sent to channel chats
         * @var bool
         */
        public ?bool $allow_channel_chats,
    ) {
    }
}
