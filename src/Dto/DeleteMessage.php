<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to delete a message, including service messages, with the following limitations:- A message can only be
 * deleted if it was sent less than 48 hours ago.- Service messages about a supergroup, channel, or forum topic creation
 * can't be deleted.- A dice message in a private chat can only be deleted if it was sent more than 24 hours ago.- Bots can
 * delete outgoing messages in private chats, groups, and supergroups.- Bots can delete incoming messages in private
 * chats.- Bots granted <em>can_post_messages</em> permissions can delete outgoing messages in channels.- If the bot is an
 * administrator of a group, it can delete any message there.- If the bot has <em>can_delete_messages</em> administrator
 * right in a supergroup or a channel, it can delete any message there.- If the bot has <em>can_manage_direct_messages</em>
 * administrator right in a channel, it can delete any message in the corresponding direct messages chat.Returns
 * <em>True</em> on success.
 */
final class DeleteMessage extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier for the target chat or username of the target channel (in the format <code>@channelusername</code>) */
        public int|string $chat_id,
        /** Identifier of the message to delete */
        public int $message_id,
    ) {
    }
}
