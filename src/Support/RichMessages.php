<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Support;

use Appto\TelegramBot\Type\ForceReply;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InputRichMessage;
use Appto\TelegramBot\Type\Message;
use Appto\TelegramBot\Type\ReplyKeyboardMarkup;
use Appto\TelegramBot\Type\ReplyKeyboardRemove;
use Appto\TelegramBot\Type\ReplyParameters;
use Appto\TelegramBot\Type\SuggestedPostParameters;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
interface RichMessages
{
    /**
     * Use this method to send rich messages. If the message contains a block with a media element, then
     * the bot must have the right to send the media to the chat. On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  InputRichMessage $rich_message The message to be sent
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent. Bot can send rich messages on behalf of a business account only
     * if the corresponding user can send rich messages.
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  bool|null $disable_notification Sends the message
     * <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a
     * notification with no sound.
     * @param  bool|null $protect_content Protects the contents of the sent message from forwarding and
     * saving
     * @param  bool|null $allow_paid_broadcast Pass <em>True</em> to allow up to 1000 messages per second,
     * ignoring
     * <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a>
     * for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's
     * balance.
     * @param  string|null $message_effect_id Unique identifier of the message effect to be added to the
     * message; for private chats only
     * @param  SuggestedPostParameters|null $suggested_post_parameters A JSON-serialized object containing
     * the parameters of the suggested post to send; for direct messages chats only. If the message is sent
     * as a reply to another suggested post, then that suggested post is automatically declined.
     * @param  ReplyParameters|null $reply_parameters Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     * Additional interface options. A JSON-serialized object for an
     * <a href="/bots/features#inline-keyboards">inline keyboard</a>,
     * <a href="/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply
     * keyboard or to force a reply from the user.
     *
     * @return Message
     */
    public function sendRichMessage(
        int|string $chat_id,
        InputRichMessage $rich_message,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message;

    /**
     * Use this method to stream a partial rich message to a user while the message is being generated.
     * Note that the streamed draft is ephemeral and acts as a temporary 30-second preview - once the
     * output is finalized, you must call
     * <a href="https://core.telegram.org/bots/api#sendrichmessage">sendRichMessage</a> with the complete
     * message to persist it in the user's chat. Returns <em>True</em> on success.
     *
     * @param  int $chat_id Unique identifier for the target private chat
     * @param  int $draft_id Unique identifier of the message draft; must be non-zero. Changes to drafts
     * with the same identifier are animated.
     * @param  InputRichMessage $rich_message The partial message to be streamed. Direct upload of new
     * files isn't supported.
     * @param  int|null $message_thread_id Unique identifier for the target message thread
     *
     * @return true
     */
    public function sendRichMessageDraft(
        int $chat_id,
        int $draft_id,
        InputRichMessage $rich_message,
        ?int $message_thread_id = null,
    ): true;
}
