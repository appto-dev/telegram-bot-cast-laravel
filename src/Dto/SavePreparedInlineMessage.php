<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\InlineQueryResult;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Stores a message that can be sent by a user of a Mini App. Returns a <a
 * href="https://core.telegram.org/bots/api#preparedinlinemessage">PreparedInlineMessage</a> object.
 */
final class SavePreparedInlineMessage extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the target user that can use the prepared message */
        public int $user_id,
        /** A JSON-serialized object describing the message to be sent */
        public InlineQueryResult $result,
        /** Pass <em>True</em> if the message can be sent to private chats with users */
        public ?bool $allow_user_chats,
        /** Pass <em>True</em> if the message can be sent to private chats with bots */
        public ?bool $allow_bot_chats,
        /** Pass <em>True</em> if the message can be sent to group and supergroup chats */
        public ?bool $allow_group_chats,
        /** Pass <em>True</em> if the message can be sent to channel chats */
        public ?bool $allow_channel_chats,
    ) {
    }
}
