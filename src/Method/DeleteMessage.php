<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to delete a message, including service messages, with the
 * following limitations:- A message can only be deleted if it was sent less than
 * 48 hours ago.- Service messages about a supergroup, channel, or forum topic
 * creation can't be deleted.- A dice message in a private chat can only be deleted
 * if it was sent more than 24 hours ago.- Bots can delete outgoing messages in
 * private chats, groups, and supergroups.- Bots can delete incoming messages in
 * private chats.- Bots granted <em>can_post_messages</em> permissions can delete
 * outgoing messages in channels.- If the bot is an administrator of a group, it
 * can delete any message there.- If the bot has <em>can_delete_messages</em>
 * permission in a supergroup or a channel, it can delete any message there.Returns
 * <em>True</em> on success.
 *
 * @version Telegram Bot API 7.11
 */
final class DeleteMessage extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Identifier of the message to delete
         * @var int
         */
        public int $message_id,
    ) {
    }
}
