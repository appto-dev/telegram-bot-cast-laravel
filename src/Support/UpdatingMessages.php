<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Support;

use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InputChecklist;
use Appto\TelegramBot\Type\InputMedia;
use Appto\TelegramBot\Type\InputRichMessage;
use Appto\TelegramBot\Type\LinkPreviewOptions;
use Appto\TelegramBot\Type\Message;
use Appto\TelegramBot\Type\MessageEntity;
use Appto\TelegramBot\Type\Poll;

/**
 * The following methods allow you to change an existing message in the message history instead of
 * sending a new one with a result of an action. This is most useful for messages with
 * <a href="/bots/features#inline-keyboards">inline keyboards</a> using callback queries, but can also
 * help reduce clutter in conversations with regular chat bots.
 * Please note, that it is currently only possible to edit messages without <em>reply_markup</em> or
 * with <a href="/bots/features#inline-keyboards">inline keyboards</a>.
 */
interface UpdatingMessages
{
    /**
     * Use this method to edit text, rich and <a href="https://core.telegram.org/bots/api#games">game</a>
     * messages. On success, if the edited message is not an inline message, the edited
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned, otherwise
     * <em>True</em> is returned. Note that business messages that were not sent by the bot and do not
     * contain an inline keyboard can only be edited within 48 hours from the time they were sent.
     *
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message to be edited was sent
     * @param  int|string|null $chat_id Required if <em>inline_message_id</em> is not specified. Unique
     * identifier for the target chat or username of the target bot, supergroup or channel in the format
     * <code>@username</code>.
     * @param  int|null $message_id Required if <em>inline_message_id</em> is not specified. Identifier of
     * the message to edit.
     * @param  string|null $inline_message_id Required if <em>chat_id</em> and <em>message_id</em> are not
     * specified. Identifier of the inline message.
     * @param  string|null $text New text of the message, 1-4096 characters after entity parsing; required
     * if <em>rich_message</em> isn't specified
     * @param  string|null $parse_mode Mode for parsing entities in the message text. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $entities A JSON-serialized list of special entities that appear in
     * message text, which can be specified instead of <em>parse_mode</em>
     * @param  LinkPreviewOptions|null $link_preview_options Link preview generation options for the
     * message
     * @param  InputRichMessage|null $rich_message New rich content of the message; required if
     * <em>text</em> isn't specified. Direct upload of new files isn't supported when an inline message is
     * edited.
     * @param  InlineKeyboardMarkup|null $reply_markup A JSON-serialized object for an
     * <a href="/bots/features#inline-keyboards">inline keyboard</a>
     *
     * @return true|Message
     */
    public function editMessageText(
        ?string $business_connection_id,
        int|string|null $chat_id,
        ?int $message_id,
        ?string $inline_message_id,
        ?string $text,
        ?string $parse_mode,
        ?array $entities,
        ?LinkPreviewOptions $link_preview_options,
        ?InputRichMessage $rich_message,
        ?InlineKeyboardMarkup $reply_markup,
    ): true|Message;

    /**
     * Use this method to edit captions of messages. On success, if the edited message is not an inline
     * message, the edited <a href="https://core.telegram.org/bots/api#message">Message</a> is returned,
     * otherwise <em>True</em> is returned. Note that business messages that were not sent by the bot and
     * do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
     *
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message to be edited was sent
     * @param  int|string|null $chat_id Required if <em>inline_message_id</em> is not specified. Unique
     * identifier for the target chat or username of the target bot, supergroup or channel in the format
     * <code>@username</code>.
     * @param  int|null $message_id Required if <em>inline_message_id</em> is not specified. Identifier of
     * the message to edit.
     * @param  string|null $inline_message_id Required if <em>chat_id</em> and <em>message_id</em> are not
     * specified. Identifier of the inline message.
     * @param  string|null $caption New caption of the message, 0-1024 characters after entities parsing
     * @param  string|null $parse_mode Mode for parsing entities in the message caption. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $caption_entities A JSON-serialized list of special entities that
     * appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool|null $show_caption_above_media Pass <em>True</em> if the caption must be shown above
     * the message media. Supported only for animation, photo and video messages.
     * @param  InlineKeyboardMarkup|null $reply_markup A JSON-serialized object for an
     * <a href="/bots/features#inline-keyboards">inline keyboard</a>
     *
     * @return true|Message
     */
    public function editMessageCaption(
        ?string $business_connection_id,
        int|string|null $chat_id,
        ?int $message_id,
        ?string $inline_message_id,
        ?string $caption,
        ?string $parse_mode,
        ?array $caption_entities,
        ?bool $show_caption_above_media,
        ?InlineKeyboardMarkup $reply_markup,
    ): true|Message;

    /**
     * Use this method to edit animation, audio, document, live photo, photo, or video messages, or to
     * replace a text or a rich message with a media. If a message is part of a message album, then it can
     * be edited only to an audio for audio albums, only to a document for document albums and to a photo,
     * a live photo, or a video otherwise. When an inline message is edited, a new file can't be uploaded;
     * use a previously uploaded file via its file_id or specify a URL. On success, if the edited message
     * is not an inline message, the edited
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned, otherwise
     * <em>True</em> is returned. Note that business messages that were not sent by the bot and do not
     * contain an inline keyboard can only be edited within 48 hours from the time they were sent.
     *
     * @param  InputMedia $media A JSON-serialized object for the new media content of the message
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message to be edited was sent
     * @param  int|string|null $chat_id Required if <em>inline_message_id</em> is not specified. Unique
     * identifier for the target chat or username of the target bot, supergroup or channel in the format
     * <code>@username</code>.
     * @param  int|null $message_id Required if <em>inline_message_id</em> is not specified. Identifier of
     * the message to edit.
     * @param  string|null $inline_message_id Required if <em>chat_id</em> and <em>message_id</em> are not
     * specified. Identifier of the inline message.
     * @param  InlineKeyboardMarkup|null $reply_markup A JSON-serialized object for a new
     * <a href="/bots/features#inline-keyboards">inline keyboard</a>
     *
     * @return true|Message
     */
    public function editMessageMedia(
        InputMedia $media,
        ?string $business_connection_id,
        int|string|null $chat_id,
        ?int $message_id,
        ?string $inline_message_id,
        ?InlineKeyboardMarkup $reply_markup,
    ): true|Message;

    /**
     * Use this method to edit live location messages. A location can be edited until its
     * <em>live_period</em> expires or editing is explicitly disabled by a call to
     * <a href="https://core.telegram.org/bots/api#stopmessagelivelocation">stopMessageLiveLocation</a>. On
     * success, if the edited message is not an inline message, the edited
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned, otherwise
     * <em>True</em> is returned.
     *
     * @param  float $latitude Latitude of new location
     * @param  float $longitude Longitude of new location
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message to be edited was sent
     * @param  int|string|null $chat_id Required if <em>inline_message_id</em> is not specified. Unique
     * identifier for the target chat or username of the target bot, supergroup or channel in the format
     * <code>@username</code>.
     * @param  int|null $message_id Required if <em>inline_message_id</em> is not specified. Identifier of
     * the message to edit.
     * @param  string|null $inline_message_id Required if <em>chat_id</em> and <em>message_id</em> are not
     * specified. Identifier of the inline message.
     * @param  int|null $live_period New period in seconds during which the location can be updated,
     * starting from the message send date. If 0x7FFFFFFF is specified, then the location can be updated
     * forever. Otherwise, the new value must not exceed the current <em>live_period</em> by more than a
     * day, and the live location expiration date must remain within the next 90 days. If not specified,
     * then <em>live_period</em> remains unchanged.
     * @param  float|null $horizontal_accuracy The radius of uncertainty for the location, measured in
     * meters; 0-1500
     * @param  int|null $heading Direction in which the user is moving, in degrees. Must be between 1 and
     * 360 if specified.
     * @param  int|null $proximity_alert_radius The maximum distance for proximity alerts about approaching
     * another chat member, in meters. Must be between 1 and 100000 if specified.
     * @param  InlineKeyboardMarkup|null $reply_markup A JSON-serialized object for a new
     * <a href="/bots/features#inline-keyboards">inline keyboard</a>
     *
     * @return true|Message
     */
    public function editMessageLiveLocation(
        float $latitude,
        float $longitude,
        ?string $business_connection_id,
        int|string|null $chat_id,
        ?int $message_id,
        ?string $inline_message_id,
        ?int $live_period,
        ?float $horizontal_accuracy,
        ?int $heading,
        ?int $proximity_alert_radius,
        ?InlineKeyboardMarkup $reply_markup,
    ): true|Message;

    /**
     * Use this method to stop updating a live location message before <em>live_period</em> expires. On
     * success, if the message is not an inline message, the edited
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned, otherwise
     * <em>True</em> is returned.
     *
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message to be edited was sent
     * @param  int|string|null $chat_id Required if <em>inline_message_id</em> is not specified. Unique
     * identifier for the target chat or username of the target bot, supergroup or channel in the format
     * <code>@username</code>.
     * @param  int|null $message_id Required if <em>inline_message_id</em> is not specified. Identifier of
     * the message with live location to stop.
     * @param  string|null $inline_message_id Required if <em>chat_id</em> and <em>message_id</em> are not
     * specified. Identifier of the inline message.
     * @param  InlineKeyboardMarkup|null $reply_markup A JSON-serialized object for a new
     * <a href="/bots/features#inline-keyboards">inline keyboard</a>
     *
     * @return true|Message
     */
    public function stopMessageLiveLocation(
        ?string $business_connection_id,
        int|string|null $chat_id,
        ?int $message_id,
        ?string $inline_message_id,
        ?InlineKeyboardMarkup $reply_markup,
    ): true|Message;

    /**
     * Use this method to edit a checklist on behalf of a connected business account. On success, the
     * edited <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  string $business_connection_id Unique identifier of the business connection on behalf of
     * which the message will be sent
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot in
     * the format <code>@username</code>
     * @param  int $message_id Unique identifier for the target message
     * @param  InputChecklist $checklist A JSON-serialized object for the new checklist
     * @param  InlineKeyboardMarkup|null $reply_markup A JSON-serialized object for the new
     * <a href="/bots/features#inline-keyboards">inline keyboard</a> for the message
     *
     * @return Message
     */
    public function editMessageChecklist(
        string $business_connection_id,
        int|string $chat_id,
        int $message_id,
        InputChecklist $checklist,
        ?InlineKeyboardMarkup $reply_markup,
    ): Message;

    /**
     * Use this method to edit only the reply markup of messages. On success, if the edited message is not
     * an inline message, the edited <a href="https://core.telegram.org/bots/api#message">Message</a> is
     * returned, otherwise <em>True</em> is returned. Note that business messages that were not sent by the
     * bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were
     * sent.
     *
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message to be edited was sent
     * @param  int|string|null $chat_id Required if <em>inline_message_id</em> is not specified. Unique
     * identifier for the target chat or username of the target bot, supergroup or channel in the format
     * <code>@username</code>.
     * @param  int|null $message_id Required if <em>inline_message_id</em> is not specified. Identifier of
     * the message to edit.
     * @param  string|null $inline_message_id Required if <em>chat_id</em> and <em>message_id</em> are not
     * specified. Identifier of the inline message.
     * @param  InlineKeyboardMarkup|null $reply_markup A JSON-serialized object for an
     * <a href="/bots/features#inline-keyboards">inline keyboard</a>
     *
     * @return true|Message
     */
    public function editMessageReplyMarkup(
        ?string $business_connection_id,
        int|string|null $chat_id,
        ?int $message_id,
        ?string $inline_message_id,
        ?InlineKeyboardMarkup $reply_markup,
    ): true|Message;

    /**
     * Use this method to stop a poll which was sent by the bot. On success, the stopped
     * <a href="https://core.telegram.org/bots/api#poll">Poll</a> is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  int $message_id Identifier of the original message with the poll
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message to be edited was sent
     * @param  InlineKeyboardMarkup|null $reply_markup A JSON-serialized object for a new message
     * <a href="/bots/features#inline-keyboards">inline keyboard</a>
     *
     * @return Poll
     */
    public function stopPoll(
        int|string $chat_id,
        int $message_id,
        ?string $business_connection_id,
        ?InlineKeyboardMarkup $reply_markup,
    ): Poll;

    /**
     * Use this method to edit an ephemeral text message. Note that it is not guaranteed that the user will
     * receive the message edit event, especially if they are offline. On success, <em>True</em> is
     * returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  int $receiver_user_id Identifier of the user who received the message
     * @param  int $ephemeral_message_id Identifier of the ephemeral message to edit
     * @param  string $text New text of the message, 1-4096 characters after entity parsing
     * @param  string|null $parse_mode Mode for parsing entities in the message text. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $entities A JSON-serialized list of special entities that appear in
     * message text, which can be specified instead of <em>parse_mode</em>
     * @param  LinkPreviewOptions|null $link_preview_options Link preview generation options for the
     * message
     * @param  InlineKeyboardMarkup|null $reply_markup A JSON-serialized object for an
     * <a href="/bots/features#inline-keyboards">inline keyboard</a>
     *
     * @return true
     */
    public function editEphemeralMessageText(
        int|string $chat_id,
        int $receiver_user_id,
        int $ephemeral_message_id,
        string $text,
        ?string $parse_mode,
        ?array $entities,
        ?LinkPreviewOptions $link_preview_options,
        ?InlineKeyboardMarkup $reply_markup,
    ): true;

    /**
     * Use this method to edit the media of an ephemeral message. Note that it is not guaranteed that the
     * user will receive the message edit event, especially if they are offline. On success, <em>True</em>
     * is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  int $receiver_user_id Identifier of the user who received the message
     * @param  int $ephemeral_message_id Identifier of the ephemeral message to edit
     * @param  InputMedia $media A JSON-serialized object for the new media content of the message. A new
     * file can't be uploaded; use a previously uploaded file via its file_id or specify a URL.
     * @param  InlineKeyboardMarkup|null $reply_markup A JSON-serialized object for an
     * <a href="/bots/features#inline-keyboards">inline keyboard</a>
     *
     * @return true
     */
    public function editEphemeralMessageMedia(
        int|string $chat_id,
        int $receiver_user_id,
        int $ephemeral_message_id,
        InputMedia $media,
        ?InlineKeyboardMarkup $reply_markup,
    ): true;

    /**
     * Use this method to edit the caption of an ephemeral message. Note that it is not guaranteed that the
     * user will receive the message edit event, especially if they are offline. On success, <em>True</em>
     * is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  int $receiver_user_id Identifier of the user who received the message
     * @param  int $ephemeral_message_id Identifier of the ephemeral message to edit
     * @param  string|null $caption New caption of the message, 0-1024 characters after entities parsing
     * @param  string|null $parse_mode Mode for parsing entities in the message caption. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $caption_entities A JSON-serialized list of special entities that
     * appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  InlineKeyboardMarkup|null $reply_markup A JSON-serialized object for an
     * <a href="/bots/features#inline-keyboards">inline keyboard</a>
     *
     * @return true
     */
    public function editEphemeralMessageCaption(
        int|string $chat_id,
        int $receiver_user_id,
        int $ephemeral_message_id,
        ?string $caption,
        ?string $parse_mode,
        ?array $caption_entities,
        ?InlineKeyboardMarkup $reply_markup,
    ): true;

    /**
     * Use this method to edit only the reply markup of an ephemeral message. Note that it is not
     * guaranteed that the user will receive the message edit event, especially if they are offline. On
     * success, <em>True</em> is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  int $receiver_user_id Identifier of the user who received the message
     * @param  int $ephemeral_message_id Identifier of the ephemeral message to edit
     * @param  InlineKeyboardMarkup|null $reply_markup A JSON-serialized object for an
     * <a href="/bots/features#inline-keyboards">inline keyboard</a>
     *
     * @return true
     */
    public function editEphemeralMessageReplyMarkup(
        int|string $chat_id,
        int $receiver_user_id,
        int $ephemeral_message_id,
        ?InlineKeyboardMarkup $reply_markup,
    ): true;

    /**
     * Use this method to approve a suggested post in a direct messages chat. The bot must have the
     * 'can_post_messages' administrator right in the corresponding channel chat. Returns <em>True</em> on
     * success.
     *
     * @param  int $chat_id Unique identifier for the target direct messages chat
     * @param  int $message_id Identifier of a suggested post message to approve
     * @param  int|null $send_date Point in time (Unix timestamp) when the post is expected to be
     * published; omit if the date has already been specified when the suggested post was created. If
     * specified, then the date must be not more than 2678400 seconds (30 days) in the future.
     *
     * @return true
     */
    public function approveSuggestedPost(int $chat_id, int $message_id, ?int $send_date): true;

    /**
     * Use this method to decline a suggested post in a direct messages chat. The bot must have the
     * 'can_manage_direct_messages' administrator right in the corresponding channel chat. Returns
     * <em>True</em> on success.
     *
     * @param  int $chat_id Unique identifier for the target direct messages chat
     * @param  int $message_id Identifier of a suggested post message to decline
     * @param  string|null $comment Comment for the creator of the suggested post; 0-128 characters
     *
     * @return true
     */
    public function declineSuggestedPost(int $chat_id, int $message_id, ?string $comment): true;

    /**
     * Use this method to delete a message, including service messages, with the following limitations:- A
     * message can only be deleted if it was sent less than 48 hours ago.- Service messages about a
     * supergroup, channel, or forum topic creation can't be deleted.- A dice message in a private chat can
     * only be deleted if it was sent more than 24 hours ago.- Bots can delete outgoing messages in private
     * chats, groups, and supergroups.- Bots can delete incoming messages in private chats.- Bots granted
     * <em>can_post_messages</em> permissions can delete outgoing messages in channels.- If the bot is an
     * administrator of a group, it can delete any message there.- If the bot has
     * <em>can_delete_messages</em> administrator right in a supergroup or a channel, it can delete any
     * message there.- If the bot has <em>can_manage_direct_messages</em> administrator right in a channel,
     * it can delete any message in the corresponding direct messages chat.Returns <em>True</em> on
     * success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  int $message_id Identifier of the message to delete
     *
     * @return true
     */
    public function deleteMessage(int|string $chat_id, int $message_id): true;

    /**
     * Use this method to delete multiple messages simultaneously. If some of the specified messages can't
     * be found, they are skipped. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  int[] $message_ids A JSON-serialized list of 1-100 identifiers of messages to delete. See
     * <a href="#deletemessage">deleteMessage</a> for limitations on which messages can be deleted.
     *
     * @return true
     */
    public function deleteMessages(int|string $chat_id, array $message_ids): true;

    /**
     * Use this method to delete an ephemeral message. Note that it is not guaranteed that the user will
     * receive the message deletion event, especially if they are offline. Returns <em>True</em> on
     * success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  int $receiver_user_id Identifier of the user who received the message
     * @param  int $ephemeral_message_id Identifier of the ephemeral message to delete
     *
     * @return true
     */
    public function deleteEphemeralMessage(
        int|string $chat_id,
        int $receiver_user_id,
        int $ephemeral_message_id,
    ): true;

    /**
     * Use this method to remove a reaction from a message in a group or a supergroup chat. The bot must
     * have the 'can_delete_messages' administrator right in the chat. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  int $message_id Identifier of the target message
     * @param  int|null $user_id Identifier of the user whose reaction will be removed, if the reaction was
     * added by a user
     * @param  int|null $actor_chat_id Identifier of the chat whose reaction will be removed, if the
     * reaction was added by a chat
     *
     * @return true
     */
    public function deleteMessageReaction(
        int|string $chat_id,
        int $message_id,
        ?int $user_id,
        ?int $actor_chat_id,
    ): true;

    /**
     * Use this method to remove up to 10000 recent reactions in a group or a supergroup chat added by a
     * given user or chat. The bot must have the 'can_delete_messages' administrator right in the chat.
     * Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  int|null $user_id Identifier of the user whose reactions will be removed, if the reactions
     * were added by a user
     * @param  int|null $actor_chat_id Identifier of the chat whose reactions will be removed, if the
     * reactions were added by a chat
     *
     * @return true
     */
    public function deleteAllMessageReactions(
        int|string $chat_id,
        ?int $user_id,
        ?int $actor_chat_id,
    ): true;
}
