<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Support;

use Appto\TelegramBot\Type\AcceptedGiftTypes;
use Appto\TelegramBot\Type\BotAccessSettings;
use Appto\TelegramBot\Type\BotCommand;
use Appto\TelegramBot\Type\BotCommandScope;
use Appto\TelegramBot\Type\BotDescription;
use Appto\TelegramBot\Type\BotName;
use Appto\TelegramBot\Type\BotShortDescription;
use Appto\TelegramBot\Type\BusinessConnection;
use Appto\TelegramBot\Type\ChatAdministratorRights;
use Appto\TelegramBot\Type\ChatFullInfo;
use Appto\TelegramBot\Type\ChatInviteLink;
use Appto\TelegramBot\Type\ChatMember;
use Appto\TelegramBot\Type\ChatPermissions;
use Appto\TelegramBot\Type\EphemeralMessageParameters;
use Appto\TelegramBot\Type\File;
use Appto\TelegramBot\Type\ForceReply;
use Appto\TelegramBot\Type\ForumTopic;
use Appto\TelegramBot\Type\Gifts;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InlineQueryResult;
use Appto\TelegramBot\Type\InputChecklist;
use Appto\TelegramBot\Type\InputFile;
use Appto\TelegramBot\Type\InputMediaAudio;
use Appto\TelegramBot\Type\InputMediaDocument;
use Appto\TelegramBot\Type\InputMediaLivePhoto;
use Appto\TelegramBot\Type\InputMediaPhoto;
use Appto\TelegramBot\Type\InputMediaVideo;
use Appto\TelegramBot\Type\InputPaidMedia;
use Appto\TelegramBot\Type\InputPollMedia;
use Appto\TelegramBot\Type\InputPollOption;
use Appto\TelegramBot\Type\InputProfilePhoto;
use Appto\TelegramBot\Type\InputStoryContent;
use Appto\TelegramBot\Type\KeyboardButton;
use Appto\TelegramBot\Type\LinkPreviewOptions;
use Appto\TelegramBot\Type\MenuButton;
use Appto\TelegramBot\Type\Message;
use Appto\TelegramBot\Type\MessageEntity;
use Appto\TelegramBot\Type\MessageId;
use Appto\TelegramBot\Type\OwnedGifts;
use Appto\TelegramBot\Type\PreparedInlineMessage;
use Appto\TelegramBot\Type\PreparedKeyboardButton;
use Appto\TelegramBot\Type\ReactionType;
use Appto\TelegramBot\Type\ReplyKeyboardMarkup;
use Appto\TelegramBot\Type\ReplyKeyboardRemove;
use Appto\TelegramBot\Type\ReplyParameters;
use Appto\TelegramBot\Type\SentGuestMessage;
use Appto\TelegramBot\Type\SentWebAppMessage;
use Appto\TelegramBot\Type\StarAmount;
use Appto\TelegramBot\Type\Sticker;
use Appto\TelegramBot\Type\Story;
use Appto\TelegramBot\Type\StoryArea;
use Appto\TelegramBot\Type\SuggestedPostParameters;
use Appto\TelegramBot\Type\User;
use Appto\TelegramBot\Type\UserChatBoosts;
use Appto\TelegramBot\Type\UserProfileAudios;
use Appto\TelegramBot\Type\UserProfilePhotos;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
interface AvailableMethods
{
    /**
     * A simple method for testing your bot's authentication token. Requires no parameters. Returns basic
     * information about the bot in form of a <a href="https://core.telegram.org/bots/api#user">User</a>
     * object.
     *
     *
     * @return User
     */
    public function getMe(): User;

    /**
     * Use this method to log out from the cloud Bot API server before launching the bot locally. You must
     * log out the bot before running it locally, otherwise there is no guarantee that the bot will receive
     * updates. After a successful call, you can immediately log in on a local server, but will not be able
     * to log in back to the cloud Bot API server for 10 minutes. Returns <em>True</em> on success.
     * Requires no parameters.
     *
     *
     * @return true
     */
    public function logOut(): true;

    /**
     * Use this method to close the bot instance before moving it from one local server to another. You
     * need to delete the webhook before calling this method to ensure that the bot isn't launched again
     * after server restart. The method will return error 429 in the first 10 minutes after the bot is
     * launched. Returns <em>True</em> on success. Requires no parameters.
     *
     *
     * @return true
     */
    public function close(): true;

    /**
     * Use this method to send text messages. On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  string $text Text of the message to be sent, 1-4096 characters after entities parsing
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  EphemeralMessageParameters|null $ephemeral_message_parameters A JSON-serialized object
     * containing the parameters of the ephemeral message to send
     * @param  string|null $parse_mode Mode for parsing entities in the message text. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $entities A JSON-serialized list of special entities that appear in
     * message text, which can be specified instead of <em>parse_mode</em>
     * @param  LinkPreviewOptions|null $link_preview_options Link preview generation options for the
     * message
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
    public function sendMessage(
        int|string $chat_id,
        string $text,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?EphemeralMessageParameters $ephemeral_message_parameters = null,
        ?string $parse_mode = null,
        ?array $entities = null,
        ?LinkPreviewOptions $link_preview_options = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message;

    /**
     * Use this method to forward messages of any kind. Service messages and messages with protected
     * content can't be forwarded. On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  int|string $from_chat_id Unique identifier for the chat where the original message was sent
     * (or username of the target bot, supergroup or channel in the format <code>@username</code>)
     * @param  int $message_id Message identifier in the chat specified in <em>from_chat_id</em>
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be forwarded; required if the message is forwarded to a direct messages chat
     * @param  int|null $video_start_timestamp New start timestamp for the forwarded video in the message
     * @param  bool|null $disable_notification Sends the message
     * <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a
     * notification with no sound.
     * @param  bool|null $protect_content Protects the contents of the forwarded message from forwarding
     * and saving
     * @param  string|null $message_effect_id Unique identifier of the message effect to be added to the
     * message; only available when forwarding to private chats
     * @param  SuggestedPostParameters|null $suggested_post_parameters A JSON-serialized object containing
     * the parameters of the suggested post to send; for direct messages chats only
     *
     * @return Message
     */
    public function forwardMessage(
        int|string $chat_id,
        int|string $from_chat_id,
        int $message_id,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?int $video_start_timestamp = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
    ): Message;

    /**
     * Use this method to forward multiple messages of any kind. If some of the specified messages can't be
     * found or forwarded, they are skipped. Service messages and messages with protected content can't be
     * forwarded. Album grouping is kept for forwarded messages. On success, an Array of
     * <a href="https://core.telegram.org/bots/api#messageid">MessageId</a> of the sent messages is
     * returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  int|string $from_chat_id Unique identifier for the chat where the original messages were
     * sent (or username of the target bot, supergroup or channel in the format <code>@username</code>)
     * @param  int[] $message_ids A JSON-serialized list of 1-100 identifiers of messages in the chat
     * <em>from_chat_id</em> to forward. The identifiers must be specified in a strictly increasing order.
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * messages will be forwarded; required if the messages are forwarded to a direct messages chat
     * @param  bool|null $disable_notification Sends the messages
     * <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a
     * notification with no sound.
     * @param  bool|null $protect_content Protects the contents of the forwarded messages from forwarding
     * and saving
     *
     * @return MessageId[]
     */
    public function forwardMessages(
        int|string $chat_id,
        int|string $from_chat_id,
        array $message_ids,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
    ): array;

    /**
     * Use this method to copy messages of any kind. Service messages, paid media messages, giveaway
     * messages, giveaway winners messages, and invoice messages can't be copied. A quiz
     * <a href="https://core.telegram.org/bots/api#poll">poll</a> can be copied only if the value of the
     * field <em>correct_option_ids</em> is known to the bot. The method is analogous to the method
     * <a href="https://core.telegram.org/bots/api#forwardmessage">forwardMessage</a>, but the copied
     * message doesn't have a link to the original message. Returns the
     * <a href="https://core.telegram.org/bots/api#messageid">MessageId</a> of the sent message on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  int|string $from_chat_id Unique identifier for the chat where the original message was sent
     * (or username of the target bot, supergroup or channel in the format <code>@username</code>)
     * @param  int $message_id Message identifier in the chat specified in <em>from_chat_id</em>
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  int|null $video_start_timestamp New start timestamp for the copied video in the message
     * @param  string|null $caption New caption for media, 0-1024 characters after entities parsing. If not
     * specified, the original caption is kept.
     * @param  string|null $parse_mode Mode for parsing entities in the new caption. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $caption_entities A JSON-serialized list of special entities that
     * appear in the new caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool|null $show_caption_above_media Pass <em>True</em> if the caption must be shown above
     * the message media. Ignored if a new caption isn't specified.
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
     * message; only available when copying to private chats
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
     * @return MessageId
     */
    public function copyMessage(
        int|string $chat_id,
        int|string $from_chat_id,
        int $message_id,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?int $video_start_timestamp = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $show_caption_above_media = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): MessageId;

    /**
     * Use this method to copy messages of any kind. If some of the specified messages can't be found or
     * copied, they are skipped. Service messages, paid media messages, giveaway messages, giveaway winners
     * messages, and invoice messages can't be copied. A quiz
     * <a href="https://core.telegram.org/bots/api#poll">poll</a> can be copied only if the value of the
     * field <em>correct_option_ids</em> is known to the bot. The method is analogous to the method
     * <a href="https://core.telegram.org/bots/api#forwardmessages">forwardMessages</a>, but the copied
     * messages don't have a link to the original message. Album grouping is kept for copied messages. On
     * success, an Array of <a href="https://core.telegram.org/bots/api#messageid">MessageId</a> of the
     * sent messages is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  int|string $from_chat_id Unique identifier for the chat where the original messages were
     * sent (or username of the target bot, supergroup or channel in the format <code>@username</code>)
     * @param  int[] $message_ids A JSON-serialized list of 1-100 identifiers of messages in the chat
     * <em>from_chat_id</em> to copy. The identifiers must be specified in a strictly increasing order.
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * messages will be sent; required if the messages are sent to a direct messages chat
     * @param  bool|null $disable_notification Sends the messages
     * <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a
     * notification with no sound.
     * @param  bool|null $protect_content Protects the contents of the sent messages from forwarding and
     * saving
     * @param  bool|null $remove_caption Pass <em>True</em> to copy the messages without their captions
     *
     * @return MessageId[]
     */
    public function copyMessages(
        int|string $chat_id,
        int|string $from_chat_id,
        array $message_ids,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $remove_caption = null,
    ): array;

    /**
     * Use this method to send photos. On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  InputFile|string $photo Photo to send. Pass a file_id as String to send a photo that exists
     * on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a photo from
     * the Internet, or upload a new photo using multipart/form-data. The photo must be at most 10 MB in
     * size. The photo's width and height must not exceed 10000 in total. Width and height ratio must be at
     * most 20. <a href="#sending-files">More information on Sending Files </a>
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  EphemeralMessageParameters|null $ephemeral_message_parameters A JSON-serialized object
     * containing the parameters of the ephemeral message to send
     * @param  string|null $caption Photo caption (may also be used when resending photos by
     * <em>file_id</em>), 0-1024 characters after entities parsing
     * @param  string|null $parse_mode Mode for parsing entities in the photo caption. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $caption_entities A JSON-serialized list of special entities that
     * appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool|null $show_caption_above_media Pass <em>True</em> if the caption must be shown above
     * the message media
     * @param  bool|null $has_spoiler Pass <em>True</em> if the photo needs to be covered with a spoiler
     * animation
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
    public function sendPhoto(
        int|string $chat_id,
        InputFile|string $photo,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?EphemeralMessageParameters $ephemeral_message_parameters = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $show_caption_above_media = null,
        ?bool $has_spoiler = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message;

    /**
     * Use this method to send live photos. On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * (in the format <code>@channelusername</code>)
     * @param  InputFile|string $live_photo Live photo video to send. The video must be no longer than 10
     * seconds and must not exceed 10 MB in size. Pass a file_id as String to send a video that exists on
     * the Telegram servers (recommended) or upload a new video using multipart/form-data.
     * <a href="#sending-files">More information on Sending Files </a>. Sending live photos by a URL is
     * currently unsupported.
     * @param  InputFile|string $photo The static photo to send. Pass a file_id as String to send a photo
     * that exists on the Telegram servers (recommended) or upload a new video using multipart/form-data.
     * <a href="#sending-files">More information on Sending Files </a>. Sending live photos by a URL is
     * currently unsupported.
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  EphemeralMessageParameters|null $ephemeral_message_parameters A JSON-serialized object
     * containing the parameters of the ephemeral message to send
     * @param  string|null $caption Video caption (may also be used when resending videos by
     * <em>file_id</em>), 0-1024 characters after entities parsing
     * @param  string|null $parse_mode Mode for parsing entities in the video caption. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $caption_entities A JSON-serialized list of special entities that
     * appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool|null $show_caption_above_media Pass <em>True</em> if the caption must be shown above
     * the message media
     * @param  bool|null $has_spoiler Pass <em>True</em> if the video needs to be covered with a spoiler
     * animation
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
    public function sendLivePhoto(
        int|string $chat_id,
        InputFile|string $live_photo,
        InputFile|string $photo,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?EphemeralMessageParameters $ephemeral_message_parameters = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $show_caption_above_media = null,
        ?bool $has_spoiler = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message;

    /**
     * Use this method to send audio files, if you want Telegram clients to display them in the music
     * player. Your audio must be in the .MP3 or .M4A format. On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned. Bots can currently
     * send audio files of up to 50 MB in size, this limit may be changed in the future.
     * For sending voice messages, use the
     * <a href="https://core.telegram.org/bots/api#sendvoice">sendVoice</a> method instead.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  InputFile|string $audio Audio file to send. Pass a file_id as String to send an audio file
     * that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get
     * an audio file from the Internet, or upload a new one using multipart/form-data.
     * <a href="#sending-files">More information on Sending Files </a>
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  EphemeralMessageParameters|null $ephemeral_message_parameters A JSON-serialized object
     * containing the parameters of the ephemeral message to send
     * @param  string|null $caption Audio caption, 0-1024 characters after entities parsing
     * @param  string|null $parse_mode Mode for parsing entities in the audio caption. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $caption_entities A JSON-serialized list of special entities that
     * appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  int|null $duration Duration of the audio in seconds
     * @param  string|null $performer Performer
     * @param  string|null $title Track name
     * @param  InputFile|string|null $thumbnail Thumbnail of the file sent; can be ignored if thumbnail
     * generation for the file is supported server-side. The thumbnail should be in JPEG format and less
     * than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is
     * not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new
     * file, so you can pass "attach://<file_attach_name>" if the thumbnail was uploaded using
     * multipart/form-data under <file_attach_name>.
     * <a href="#sending-files">More information on Sending Files </a>
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
    public function sendAudio(
        int|string $chat_id,
        InputFile|string $audio,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?EphemeralMessageParameters $ephemeral_message_parameters = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?int $duration = null,
        ?string $performer = null,
        ?string $title = null,
        InputFile|string|null $thumbnail = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message;

    /**
     * Use this method to send general files. On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned. Bots can currently
     * send files of any type of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  InputFile|string $document File to send. Pass a file_id as String to send a file that exists
     * on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a file from
     * the Internet, or upload a new one using multipart/form-data.
     * <a href="#sending-files">More information on Sending Files </a>
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  EphemeralMessageParameters|null $ephemeral_message_parameters A JSON-serialized object
     * containing the parameters of the ephemeral message to send
     * @param  InputFile|string|null $thumbnail Thumbnail of the file sent; can be ignored if thumbnail
     * generation for the file is supported server-side. The thumbnail should be in JPEG format and less
     * than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is
     * not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new
     * file, so you can pass "attach://<file_attach_name>" if the thumbnail was uploaded using
     * multipart/form-data under <file_attach_name>.
     * <a href="#sending-files">More information on Sending Files </a>
     * @param  string|null $caption Document caption (may also be used when resending documents by
     * <em>file_id</em>), 0-1024 characters after entities parsing
     * @param  string|null $parse_mode Mode for parsing entities in the document caption. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $caption_entities A JSON-serialized list of special entities that
     * appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool|null $disable_content_type_detection Disables automatic server-side content type
     * detection for files uploaded using multipart/form-data
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
    public function sendDocument(
        int|string $chat_id,
        InputFile|string $document,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?EphemeralMessageParameters $ephemeral_message_parameters = null,
        InputFile|string|null $thumbnail = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $disable_content_type_detection = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message;

    /**
     * Use this method to send video files, Telegram clients support MPEG4 videos (other formats may be
     * sent as <a href="https://core.telegram.org/bots/api#document">Document</a>). On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned. Bots can currently
     * send video files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  InputFile|string $video Video to send. Pass a file_id as String to send a video that exists
     * on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a video from
     * the Internet, or upload a new video using multipart/form-data.
     * <a href="#sending-files">More information on Sending Files </a>
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  EphemeralMessageParameters|null $ephemeral_message_parameters A JSON-serialized object
     * containing the parameters of the ephemeral message to send
     * @param  int|null $duration Duration of sent video in seconds
     * @param  int|null $width Video width
     * @param  int|null $height Video height
     * @param  InputFile|string|null $thumbnail Thumbnail of the file sent; can be ignored if thumbnail
     * generation for the file is supported server-side. The thumbnail should be in JPEG format and less
     * than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is
     * not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new
     * file, so you can pass "attach://<file_attach_name>" if the thumbnail was uploaded using
     * multipart/form-data under <file_attach_name>.
     * <a href="#sending-files">More information on Sending Files </a>
     * @param  InputFile|string|null $cover Cover for the video in the message. Pass a file_id to send a
     * file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file
     * from the Internet, or pass "attach://<file_attach_name>" to upload a new one using
     * multipart/form-data under <file_attach_name> name.
     * <a href="#sending-files">More information on Sending Files </a>
     * @param  int|null $start_timestamp Start timestamp for the video in the message
     * @param  string|null $caption Video caption (may also be used when resending videos by
     * <em>file_id</em>), 0-1024 characters after entities parsing
     * @param  string|null $parse_mode Mode for parsing entities in the video caption. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $caption_entities A JSON-serialized list of special entities that
     * appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool|null $show_caption_above_media Pass <em>True</em> if the caption must be shown above
     * the message media
     * @param  bool|null $has_spoiler Pass <em>True</em> if the video needs to be covered with a spoiler
     * animation
     * @param  bool|null $supports_streaming Pass <em>True</em> if the uploaded video is suitable for
     * streaming
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
    public function sendVideo(
        int|string $chat_id,
        InputFile|string $video,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?EphemeralMessageParameters $ephemeral_message_parameters = null,
        ?int $duration = null,
        ?int $width = null,
        ?int $height = null,
        InputFile|string|null $thumbnail = null,
        InputFile|string|null $cover = null,
        ?int $start_timestamp = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $show_caption_above_media = null,
        ?bool $has_spoiler = null,
        ?bool $supports_streaming = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message;

    /**
     * Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound). On success,
     * the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is returned. Bots can
     * currently send animation files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  InputFile|string $animation Animation to send. Pass a file_id as String to send an animation
     * that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get
     * an animation from the Internet, or upload a new animation using multipart/form-data.
     * <a href="#sending-files">More information on Sending Files </a>
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  EphemeralMessageParameters|null $ephemeral_message_parameters A JSON-serialized object
     * containing the parameters of the ephemeral message to send
     * @param  int|null $duration Duration of sent animation in seconds
     * @param  int|null $width Animation width
     * @param  int|null $height Animation height
     * @param  InputFile|string|null $thumbnail Thumbnail of the file sent; can be ignored if thumbnail
     * generation for the file is supported server-side. The thumbnail should be in JPEG format and less
     * than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is
     * not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new
     * file, so you can pass "attach://<file_attach_name>" if the thumbnail was uploaded using
     * multipart/form-data under <file_attach_name>.
     * <a href="#sending-files">More information on Sending Files </a>
     * @param  string|null $caption Animation caption (may also be used when resending animation by
     * <em>file_id</em>), 0-1024 characters after entities parsing
     * @param  string|null $parse_mode Mode for parsing entities in the animation caption. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $caption_entities A JSON-serialized list of special entities that
     * appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool|null $show_caption_above_media Pass <em>True</em> if the caption must be shown above
     * the message media
     * @param  bool|null $has_spoiler Pass <em>True</em> if the animation needs to be covered with a
     * spoiler animation
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
    public function sendAnimation(
        int|string $chat_id,
        InputFile|string $animation,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?EphemeralMessageParameters $ephemeral_message_parameters = null,
        ?int $duration = null,
        ?int $width = null,
        ?int $height = null,
        InputFile|string|null $thumbnail = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $show_caption_above_media = null,
        ?bool $has_spoiler = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message;

    /**
     * Use this method to send audio files, if you want Telegram clients to display the file as a playable
     * voice message. For this to work, your audio must be in an .OGG file encoded with OPUS, or in .MP3
     * format, or in .M4A format (other formats may be sent as
     * <a href="https://core.telegram.org/bots/api#audio">Audio</a> or
     * <a href="https://core.telegram.org/bots/api#document">Document</a>). On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned. Bots can currently
     * send voice messages of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  InputFile|string $voice Audio file to send. Pass a file_id as String to send a file that
     * exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a
     * file from the Internet, or upload a new one using multipart/form-data.
     * <a href="#sending-files">More information on Sending Files </a>
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  EphemeralMessageParameters|null $ephemeral_message_parameters A JSON-serialized object
     * containing the parameters of the ephemeral message to send
     * @param  string|null $caption Voice message caption, 0-1024 characters after entities parsing
     * @param  string|null $parse_mode Mode for parsing entities in the voice message caption. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $caption_entities A JSON-serialized list of special entities that
     * appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  int|null $duration Duration of the voice message in seconds
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
    public function sendVoice(
        int|string $chat_id,
        InputFile|string $voice,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?EphemeralMessageParameters $ephemeral_message_parameters = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?int $duration = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message;

    /**
     * Use this method to send a rounded square MPEG4 video of up to 1 minute long. On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  InputFile|string $video_note Video note to send. Pass a file_id as String to send a video
     * note that exists on the Telegram servers (recommended) or upload a new video using
     * multipart/form-data. <a href="#sending-files">More information on Sending Files </a>. Sending video
     * notes by a URL is currently unsupported.
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  EphemeralMessageParameters|null $ephemeral_message_parameters A JSON-serialized object
     * containing the parameters of the ephemeral message to send
     * @param  int|null $duration Duration of sent video in seconds
     * @param  int|null $length Video width and height, i.e. diameter of the video message
     * @param  InputFile|string|null $thumbnail Thumbnail of the file sent; can be ignored if thumbnail
     * generation for the file is supported server-side. The thumbnail should be in JPEG format and less
     * than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is
     * not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new
     * file, so you can pass "attach://<file_attach_name>" if the thumbnail was uploaded using
     * multipart/form-data under <file_attach_name>.
     * <a href="#sending-files">More information on Sending Files </a>
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
    public function sendVideoNote(
        int|string $chat_id,
        InputFile|string $video_note,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?EphemeralMessageParameters $ephemeral_message_parameters = null,
        ?int $duration = null,
        ?int $length = null,
        InputFile|string|null $thumbnail = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message;

    /**
     * Use this method to send paid media. On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>. If the chat is a channel, all Telegram
     * Star proceeds from this media will be credited to the chat's balance. Otherwise, they will be
     * credited to the bot's balance.
     * @param  int $star_count The number of Telegram Stars that must be paid to buy access to the media;
     * 1-25000
     * @param  InputPaidMedia[] $media A JSON-serialized Array describing the media to be sent; up to 10
     * items
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  string|null $payload Bot-defined paid media payload, 0-128 bytes. This will not be displayed
     * to the user, use it for your internal processes.
     * @param  string|null $caption Media caption, 0-1024 characters after entities parsing
     * @param  string|null $parse_mode Mode for parsing entities in the media caption. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $caption_entities A JSON-serialized list of special entities that
     * appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool|null $show_caption_above_media Pass <em>True</em> if the caption must be shown above
     * the message media
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
    public function sendPaidMedia(
        int|string $chat_id,
        int $star_count,
        array $media,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?string $payload = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $show_caption_above_media = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message;

    /**
     * Use this method to send a group of photos, live photos, videos, documents or audios as an album.
     * Documents and audio files can be only grouped in an album with messages of the same type. On
     * success, an Array of <a href="https://core.telegram.org/bots/api#message">Message</a> objects that
     * were sent is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  (InputMediaAudio|InputMediaDocument|InputMediaLivePhoto|InputMediaPhoto|InputMediaVideo)[]
     * $media A JSON-serialized Array describing messages to be sent, must include 2-10 items
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * messages will be sent; required if the messages are sent to a direct messages chat
     * @param  bool|null $disable_notification Sends messages
     * <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a
     * notification with no sound.
     * @param  bool|null $protect_content Protects the contents of the sent messages from forwarding and
     * saving
     * @param  bool|null $allow_paid_broadcast Pass <em>True</em> to allow up to 1000 messages per second,
     * ignoring
     * <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a>
     * for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's
     * balance.
     * @param  string|null $message_effect_id Unique identifier of the message effect to be added to the
     * message; for private chats only
     * @param  ReplyParameters|null $reply_parameters Description of the message to reply to
     *
     * @return Message[]
     */
    public function sendMediaGroup(
        int|string $chat_id,
        array $media,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
    ): array;

    /**
     * Use this method to send point on the map. On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  float $latitude Latitude of the location
     * @param  float $longitude Longitude of the location
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  EphemeralMessageParameters|null $ephemeral_message_parameters A JSON-serialized object
     * containing the parameters of the ephemeral message to send
     * @param  float|null $horizontal_accuracy The radius of uncertainty for the location, measured in
     * meters; 0-1500
     * @param  int|null $live_period Period in seconds during which the location will be updated (see
     * <a href="https://telegram.org/blog/live-locations">Live Locations</a>), must be between 60 and
     * 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely. Must be 0 for ephemeral
     * messages.
     * @param  int|null $heading For live locations, a direction in which the user is moving, in degrees.
     * Must be between 1 and 360 if specified.
     * @param  int|null $proximity_alert_radius For live locations, a maximum distance for proximity alerts
     * about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
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
    public function sendLocation(
        int|string $chat_id,
        float $latitude,
        float $longitude,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?EphemeralMessageParameters $ephemeral_message_parameters = null,
        ?float $horizontal_accuracy = null,
        ?int $live_period = null,
        ?int $heading = null,
        ?int $proximity_alert_radius = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message;

    /**
     * Use this method to send information about a venue. On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  float $latitude Latitude of the venue
     * @param  float $longitude Longitude of the venue
     * @param  string $title Name of the venue
     * @param  string $address Address of the venue
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  EphemeralMessageParameters|null $ephemeral_message_parameters A JSON-serialized object
     * containing the parameters of the ephemeral message to send
     * @param  string|null $foursquare_id Foursquare identifier of the venue
     * @param  string|null $foursquare_type Foursquare type of the venue, if known. (For example,
     * "arts_entertainment/default", "arts_entertainment/aquarium" or "food/icecream".)
     * @param  string|null $google_place_id Google Places identifier of the venue
     * @param  string|null $google_place_type Google Places type of the venue. (See
     * <a href="https://developers.google.com/places/web-service/supported_types">supported types</a>.)
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
    public function sendVenue(
        int|string $chat_id,
        float $latitude,
        float $longitude,
        string $title,
        string $address,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?EphemeralMessageParameters $ephemeral_message_parameters = null,
        ?string $foursquare_id = null,
        ?string $foursquare_type = null,
        ?string $google_place_id = null,
        ?string $google_place_type = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message;

    /**
     * Use this method to send phone contacts. On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  string $phone_number Contact's phone number
     * @param  string $first_name Contact's first name
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  EphemeralMessageParameters|null $ephemeral_message_parameters A JSON-serialized object
     * containing the parameters of the ephemeral message to send
     * @param  string|null $last_name Contact's last name
     * @param  string|null $vcard Additional data about the contact in the form of a
     * <a href="https://en.wikipedia.org/wiki/VCard">vCard</a>, 0-2048 bytes
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
    public function sendContact(
        int|string $chat_id,
        string $phone_number,
        string $first_name,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?EphemeralMessageParameters $ephemeral_message_parameters = null,
        ?string $last_name = null,
        ?string $vcard = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message;

    /**
     * Use this method to send a native poll. On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>. Polls can't be sent to channel direct
     * messages chats.
     * @param  string $question Poll question, 1-300 characters
     * @param  InputPollOption[] $options A JSON-serialized list of 1-12 answer options
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  string|null $question_parse_mode Mode for parsing entities in the question. See
     * <a href="#formatting-options">formatting options</a> for more details. Currently, only custom emoji
     * entities are allowed.
     * @param  MessageEntity[]|null $question_entities A JSON-serialized list of special entities that
     * appear in the poll question. It can be specified instead of <em>question_parse_mode</em>.
     * @param  bool|null $is_anonymous <em>True</em>, if the poll needs to be anonymous, defaults to
     * <em>True</em>
     * @param  string|null $type Poll type, "quiz" or "regular", defaults to "regular"
     * @param  bool|null $allows_multiple_answers Pass <em>True</em> if the poll allows multiple answers,
     * defaults to <em>False</em>
     * @param  bool|null $allows_revoting Pass <em>True</em> if the poll allows to change chosen answer
     * options, defaults to <em>False</em> for quizzes and to <em>True</em> for regular polls
     * @param  bool|null $shuffle_options Pass <em>True</em> if the poll options must be shown in random
     * order
     * @param  bool|null $allow_adding_options Pass <em>True</em> if answer options can be added to the
     * poll after creation; not supported for anonymous polls and quizzes
     * @param  bool|null $hide_results_until_closes Pass <em>True</em> if poll results must be shown only
     * after the poll closes
     * @param  bool|null $members_only Pass <em>True</em> if voting is limited to users who have been
     * members of the chat where the poll is being sent for more than 24 hours; for channel chats only
     * @param  string[]|null $country_codes A JSON-serialized list of 0-12 two-letter
     * <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a> country codes
     * indicating the countries from which users can vote in the poll; for channel chats only. Use "FT" as
     * a country code to allow users with anonymous numbers to vote. If omitted or empty, then users from
     * any country can participate in the poll.
     * @param  int[]|null $correct_option_ids A JSON-serialized list of monotonically increasing 0-based
     * identifiers of the correct answer options, required for polls in quiz mode
     * @param  string|null $explanation Text that is shown when a user chooses an incorrect answer or taps
     * on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities
     * parsing
     * @param  string|null $explanation_parse_mode Mode for parsing entities in the explanation. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $explanation_entities A JSON-serialized list of special entities that
     * appear in the poll explanation. It can be specified instead of <em>explanation_parse_mode</em>.
     * @param  InputPollMedia|null $explanation_media Media added to the quiz explanation
     * @param  int|null $open_period Amount of time in seconds the poll will be active after creation,
     * 5-2628000. Can't be used together with <em>close_date</em>.
     * @param  int|null $close_date Point in time (Unix timestamp) when the poll will be automatically
     * closed. Must be at least 5 and no more than 2628000 seconds in the future. Can't be used together
     * with <em>open_period</em>.
     * @param  bool|null $is_closed Pass <em>True</em> if the poll needs to be immediately closed. This can
     * be useful for poll preview.
     * @param  string|null $description Description of the poll to be sent, 0-1024 characters after
     * entities parsing
     * @param  string|null $description_parse_mode Mode for parsing entities in the poll description. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $description_entities A JSON-serialized list of special entities that
     * appear in the poll description, which can be specified instead of <em>description_parse_mode</em>
     * @param  InputPollMedia|null $media Media added to the poll description
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
     * @param  ReplyParameters|null $reply_parameters Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     * Additional interface options. A JSON-serialized object for an
     * <a href="/bots/features#inline-keyboards">inline keyboard</a>,
     * <a href="/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply
     * keyboard or to force a reply from the user.
     *
     * @return Message
     */
    public function sendPoll(
        int|string $chat_id,
        string $question,
        array $options,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?string $question_parse_mode = null,
        ?array $question_entities = null,
        ?bool $is_anonymous = null,
        ?string $type = null,
        ?bool $allows_multiple_answers = null,
        ?bool $allows_revoting = null,
        ?bool $shuffle_options = null,
        ?bool $allow_adding_options = null,
        ?bool $hide_results_until_closes = null,
        ?bool $members_only = null,
        ?array $country_codes = null,
        ?array $correct_option_ids = null,
        ?string $explanation = null,
        ?string $explanation_parse_mode = null,
        ?array $explanation_entities = null,
        ?InputPollMedia $explanation_media = null,
        ?int $open_period = null,
        ?int $close_date = null,
        ?bool $is_closed = null,
        ?string $description = null,
        ?string $description_parse_mode = null,
        ?array $description_entities = null,
        ?InputPollMedia $media = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message;

    /**
     * Use this method to send a checklist on behalf of a connected business account. On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  string $business_connection_id Unique identifier of the business connection on behalf of
     * which the message will be sent
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot in
     * the format <code>@username</code>
     * @param  InputChecklist $checklist A JSON-serialized object for the checklist to send
     * @param  bool|null $disable_notification Sends the message silently. Users will receive a
     * notification with no sound.
     * @param  bool|null $protect_content Protects the contents of the sent message from forwarding and
     * saving
     * @param  string|null $message_effect_id Unique identifier of the message effect to be added to the
     * message
     * @param  ReplyParameters|null $reply_parameters A JSON-serialized object for description of the
     * message to reply to
     * @param  InlineKeyboardMarkup|null $reply_markup A JSON-serialized object for an
     * <a href="/bots/features#inline-keyboards">inline keyboard</a>
     *
     * @return Message
     */
    public function sendChecklist(
        string $business_connection_id,
        int|string $chat_id,
        InputChecklist $checklist,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): Message;

    /**
     * Use this method to send an animated emoji that will display a random value. On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int|null $direct_messages_topic_id Identifier of the direct messages topic to which the
     * message will be sent; required if the message is sent to a direct messages chat
     * @param  string|null $emoji Emoji on which the dice throw animation is based. Currently, must be one
     * of "🎲", "🎯", "🏀", "⚽", "🎳", or "🎰". Dice can have values 1-6 for "🎲", "🎯" and
     * "🎳", values 1-5 for "🏀" and "⚽", and values 1-64 for "🎰". Defaults to "🎲".
     * @param  bool|null $disable_notification Sends the message
     * <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a
     * notification with no sound.
     * @param  bool|null $protect_content Protects the contents of the sent message from forwarding
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
    public function sendDice(
        int|string $chat_id,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?int $direct_messages_topic_id = null,
        ?string $emoji = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): Message;

    /**
     * Use this method to stream a partial message to a user while the message is being generated. Note
     * that the streamed draft is ephemeral and acts as a temporary 30-second preview - once the output is
     * finalized, you must call <a href="https://core.telegram.org/bots/api#sendmessage">sendMessage</a>
     * with the complete message to persist it in the user's chat. Returns <em>True</em> on success.
     *
     * @param  int $chat_id Unique identifier for the target private chat
     * @param  int $draft_id Unique identifier of the message draft; must be non-zero. Changes to drafts
     * with the same identifier are animated. Otherwise, the draft is replaced without animation.
     * @param  int|null $message_thread_id Unique identifier for the target message thread
     * @param  string|null $text Text of the message to be sent, 0-4096 characters after entities parsing.
     * Pass an empty text to show a "Thinking…" placeholder.
     * @param  string|null $parse_mode Mode for parsing entities in the message text. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $entities A JSON-serialized list of special entities that appear in
     * message text, which can be specified instead of <em>parse_mode</em>
     * @param  bool|null $can_stop Pass <em>True</em> to show the user a button to stop further drafts. The
     * bot will receive an <a href="#update">Update</a> "stopped_message_generation" if the user presses
     * the button.
     * @param  bool|null $keep_on_stop Pass <em>True</em> to keep the draft in the chat when the button is
     * pressed. The draft will still disappear after a short time or if the bot sends a message. To fully
     * preserve the partial draft, the bot should send it as a new message.
     *
     * @return true
     */
    public function sendMessageDraft(
        int $chat_id,
        int $draft_id,
        ?int $message_thread_id = null,
        ?string $text = null,
        ?string $parse_mode = null,
        ?array $entities = null,
        ?bool $can_stop = null,
        ?bool $keep_on_stop = null,
    ): true;

    /**
     * Use this method when you need to tell the user that something is happening on the bot's side. The
     * status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients clear
     * its typing status). Returns <em>True</em> on success.
     * Example: The <a href="https://t.me/imagebot">ImageBot</a> needs some time to process a request and
     * upload the image. Instead of sending a text message along the lines of "Retrieving image, please
     * wait…", the bot may use
     * <a href="https://core.telegram.org/bots/api#sendchataction">sendChatAction</a> with <em>action</em>
     * = <em>upload_photo</em>. The user will see a "sending photo" status for the bot.
     * We only recommend using this method when a response from the bot will take a noticeable amount of
     * time to arrive.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot or
     * supergroup in the format <code>@username</code>. Channel chats and channel direct messages chats
     * aren't supported.
     * @param  string $action Type of action to broadcast. Choose one, depending on what the user is about
     * to receive: <em>typing</em> for <a href="#sendmessage">text messages</a>, <em>upload_photo</em> for
     * <a href="#sendphoto">photos</a>, <em>record_video</em> or <em>upload_video</em> for
     * <a href="#sendvideo">videos</a>, <em>record_voice</em> or <em>upload_voice</em> for
     * <a href="#sendvoice">voice notes</a>, <em>upload_document</em> for
     * <a href="#senddocument">general files</a>, <em>choose_sticker</em> for
     * <a href="#sendsticker">stickers</a>, <em>find_location</em> for
     * <a href="#sendlocation">location data</a>, <em>record_video_note</em> or <em>upload_video_note</em>
     * for <a href="#sendvideonote">video notes</a>.
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the action will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread or topic of a
     * forum; for supergroups and private chats of bots with forum topic mode enabled only
     *
     * @return true
     */
    public function sendChatAction(
        int|string $chat_id,
        string $action,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
    ): true;

    /**
     * Use this method to change the chosen reactions on a message. Service messages of some types can't be
     * reacted to. Automatically forwarded messages from a channel to its discussion group have the same
     * available reactions as messages in the channel. Bots can't use paid reactions. Returns <em>True</em>
     * on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>
     * @param  int $message_id Identifier of the target message. If the message belongs to a media group,
     * the reaction is set to the first non-deleted message in the group instead.
     * @param  ReactionType[]|null $reaction A JSON-serialized list of reaction types to set on the
     * message. Currently, as non-premium users, bots can set up to one reaction per message. A custom
     * emoji reaction can be used if it is either already present on the message or explicitly allowed by
     * chat administrators. Paid reactions can't be used by bots.
     * @param  bool|null $is_big Pass <em>True</em> to set the reaction with a big animation
     *
     * @return true
     */
    public function setMessageReaction(
        int|string $chat_id,
        int $message_id,
        ?array $reaction = null,
        ?bool $is_big = null,
    ): true;

    /**
     * Use this method to get a list of profile pictures for a user. Returns a
     * <a href="https://core.telegram.org/bots/api#userprofilephotos">UserProfilePhotos</a> object.
     *
     * @param  int $user_id Unique identifier of the target user
     * @param  int|null $offset Sequential number of the first photo to be returned. By default, all photos
     * are returned.
     * @param  int|null $limit Limits the number of photos to be retrieved. Values between 1-100 are
     * accepted. Defaults to 100.
     *
     * @return UserProfilePhotos
     */
    public function getUserProfilePhotos(
        int $user_id,
        ?int $offset = null,
        ?int $limit = null,
    ): UserProfilePhotos;

    /**
     * Use this method to get a list of profile audios for a user. Returns a
     * <a href="https://core.telegram.org/bots/api#userprofileaudios">UserProfileAudios</a> object.
     *
     * @param  int $user_id Unique identifier of the target user
     * @param  int|null $offset Sequential number of the first audio to be returned. By default, all audios
     * are returned.
     * @param  int|null $limit Limits the number of audios to be retrieved. Values between 1-100 are
     * accepted. Defaults to 100.
     *
     * @return UserProfileAudios
     */
    public function getUserProfileAudios(
        int $user_id,
        ?int $offset = null,
        ?int $limit = null,
    ): UserProfileAudios;

    /**
     * Changes the emoji status for a given user that previously allowed the bot to manage their emoji
     * status via the Mini App method
     * <a href="https://core.telegram.org/bots/webapps#initializing-mini-apps">requestEmojiStatusAccess</a>.
     * Returns <em>True</em> on success.
     *
     * @param  int $user_id Unique identifier of the target user
     * @param  string|null $emoji_status_custom_emoji_id Custom emoji identifier of the emoji status to
     * set. Pass an empty string to remove the status.
     * @param  int|null $emoji_status_expiration_date Expiration date of the emoji status, if any
     *
     * @return true
     */
    public function setUserEmojiStatus(
        int $user_id,
        ?string $emoji_status_custom_emoji_id = null,
        ?int $emoji_status_expiration_date = null,
    ): true;

    /**
     * Use this method to get basic information about a file and prepare it for downloading. For the
     * moment, bots can download files of up to 20MB in size. On success, a
     * <a href="https://core.telegram.org/bots/api#file">File</a> object is returned. The file can then be
     * downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>, where <file_path> is
     * taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the
     * link expires, a new one can be requested by calling
     * <a href="https://core.telegram.org/bots/api#getfile">getFile</a> again.
     *
     * @param  string $file_id File identifier to get information about
     *
     * @return File
     */
    public function getFile(string $file_id): File;

    /**
     * Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups and
     * channels, the user will not be able to return to the chat on their own using invite links, etc.,
     * unless <a href="https://core.telegram.org/bots/api#unbanchatmember">unbanned</a> first. The bot must
     * be an administrator in the chat for this to work and must have the appropriate administrator rights.
     * Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target group or username of the target
     * supergroup or channel in the format <code>@username</code>
     * @param  int $user_id Unique identifier of the target user
     * @param  int|null $until_date Date when the user will be unbanned; Unix time. If user is banned for
     * more than 366 days or less than 30 seconds from the current time they are considered to be banned
     * forever. Applied for supergroups and channels only.
     * @param  bool|null $revoke_messages Pass <em>True</em> to delete all messages from the chat for the
     * user that is being removed. If <em>False</em>, the user will be able to see messages in the group
     * that were sent before the user was removed. Always <em>True</em> for supergroups and channels.
     *
     * @return true
     */
    public function banChatMember(
        int|string $chat_id,
        int $user_id,
        ?int $until_date = null,
        ?bool $revoke_messages = null,
    ): true;

    /**
     * Use this method to unban a previously banned user in a supergroup or channel. The user will not
     * return to the group or channel automatically, but will be able to join via link, etc. The bot must
     * be an administrator for this to work. By default, this method guarantees that after the call the
     * user is not a member of the chat, but will be able to join it. So if the user is a member of the
     * chat they will also be removed from the chat. If you don't want this, use the parameter
     * <em>only_if_banned</em>. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target group or username of the target
     * supergroup or channel in the format <code>@username</code>
     * @param  int $user_id Unique identifier of the target user
     * @param  bool|null $only_if_banned Do nothing if the user is not banned
     *
     * @return true
     */
    public function unbanChatMember(
        int|string $chat_id,
        int $user_id,
        ?bool $only_if_banned = null,
    ): true;

    /**
     * Use this method to restrict a user in a supergroup. The bot must be an administrator in the
     * supergroup for this to work and must have the appropriate administrator rights. Pass <em>True</em>
     * for all permissions to lift restrictions from a user. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  int $user_id Unique identifier of the target user
     * @param  ChatPermissions $permissions A JSON-serialized object for new user permissions
     * @param  bool|null $use_independent_chat_permissions Pass <em>True</em> if chat permissions are set
     * independently. Otherwise, the <em>can_send_other_messages</em> and
     * <em>can_add_web_page_previews</em> permissions will imply the <em>can_send_messages</em>,
     * <em>can_send_audios</em>, <em>can_send_documents</em>, <em>can_send_photos</em>,
     * <em>can_send_videos</em>, <em>can_send_video_notes</em>, and <em>can_send_voice_notes</em>
     * permissions; the <em>can_send_polls</em> permission will imply the <em>can_send_messages</em>
     * permission.
     * @param  int|null $until_date Date when restrictions will be lifted for the user; Unix time. If user
     * is restricted for more than 366 days or less than 30 seconds from the current time, they are
     * considered to be restricted forever.
     *
     * @return true
     */
    public function restrictChatMember(
        int|string $chat_id,
        int $user_id,
        ChatPermissions $permissions,
        ?bool $use_independent_chat_permissions = null,
        ?int $until_date = null,
    ): true;

    /**
     * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an
     * administrator in the chat for this to work and must have the appropriate administrator rights. Pass
     * <em>False</em> for all boolean parameters to demote a user. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * in the format <code>@username</code>
     * @param  int $user_id Unique identifier of the target user
     * @param  bool|null $is_anonymous Pass <em>True</em> if the administrator's presence in the chat is
     * hidden
     * @param  bool|null $can_manage_chat Pass <em>True</em> if the administrator can access the chat event
     * log, get boost list, see hidden supergroup and channel members, report spam messages, ignore slow
     * mode, and send messages to the chat without paying Telegram Stars. Implied by any other
     * administrator privilege.
     * @param  bool|null $can_delete_messages Pass <em>True</em> if the administrator can delete messages
     * of other users
     * @param  bool|null $can_manage_video_chats Pass <em>True</em> if the administrator can manage video
     * chats
     * @param  bool|null $can_restrict_members Pass <em>True</em> if the administrator can restrict, ban or
     * unban chat members, or access supergroup statistics. For backward compatibility, defaults to
     * <em>True</em> for promotions of channel administrators.
     * @param  bool|null $can_promote_members Pass <em>True</em> if the administrator can add new
     * administrators with a subset of their own privileges or demote administrators that they have
     * promoted, directly or indirectly (promoted by administrators that were appointed by him)
     * @param  bool|null $can_change_info Pass <em>True</em> if the administrator can change chat title,
     * photo and other settings
     * @param  bool|null $can_invite_users Pass <em>True</em> if the administrator can invite new users to
     * the chat
     * @param  bool|null $can_post_stories Pass <em>True</em> if the administrator can post stories to the
     * chat
     * @param  bool|null $can_edit_stories Pass <em>True</em> if the administrator can edit stories posted
     * by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
     * @param  bool|null $can_delete_stories Pass <em>True</em> if the administrator can delete stories
     * posted by other users
     * @param  bool|null $can_post_messages Pass <em>True</em> if the administrator can post messages in
     * the channel, approve suggested posts, or access channel statistics; for channels only
     * @param  bool|null $can_edit_messages Pass <em>True</em> if the administrator can edit messages of
     * other users and can pin messages; for channels only
     * @param  bool|null $can_pin_messages Pass <em>True</em> if the administrator can pin messages; for
     * supergroups only
     * @param  bool|null $can_manage_topics Pass <em>True</em> if the user is allowed to create, rename,
     * close, and reopen forum topics; for supergroups only
     * @param  bool|null $can_manage_direct_messages Pass <em>True</em> if the administrator can manage
     * direct messages within the channel and decline suggested posts; for channels only
     * @param  bool|null $can_manage_tags Pass <em>True</em> if the administrator can edit the tags of
     * regular members; for groups and supergroups only
     * @param  bool|null $can_send_welcome_messages Pass <em>True</em> if the administrator can manage chat
     * welcome messages or directly send them in the case of bots
     *
     * @return true
     */
    public function promoteChatMember(
        int|string $chat_id,
        int $user_id,
        ?bool $is_anonymous = null,
        ?bool $can_manage_chat = null,
        ?bool $can_delete_messages = null,
        ?bool $can_manage_video_chats = null,
        ?bool $can_restrict_members = null,
        ?bool $can_promote_members = null,
        ?bool $can_change_info = null,
        ?bool $can_invite_users = null,
        ?bool $can_post_stories = null,
        ?bool $can_edit_stories = null,
        ?bool $can_delete_stories = null,
        ?bool $can_post_messages = null,
        ?bool $can_edit_messages = null,
        ?bool $can_pin_messages = null,
        ?bool $can_manage_topics = null,
        ?bool $can_manage_direct_messages = null,
        ?bool $can_manage_tags = null,
        ?bool $can_send_welcome_messages = null,
    ): true;

    /**
     * Use this method to set a custom title for an administrator in a supergroup promoted by the bot.
     * Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  int $user_id Unique identifier of the target user
     * @param  string $custom_title New custom title for the administrator; 0-16 characters, emoji are not
     * allowed
     *
     * @return true
     */
    public function setChatAdministratorCustomTitle(
        int|string $chat_id,
        int $user_id,
        string $custom_title,
    ): true;

    /**
     * Use this method to set a tag for a regular member in a group or a supergroup. The bot must be an
     * administrator in the chat for this to work and must have the <em>can_manage_tags</em> administrator
     * right. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  int $user_id Unique identifier of the target user
     * @param  string|null $tag New tag for the member; 0-16 characters, emoji are not allowed
     *
     * @return true
     */
    public function setChatMemberTag(int|string $chat_id, int $user_id, ?string $tag = null): true;

    /**
     * Use this method to ban a channel chat in a supergroup or a channel. Until the chat is
     * <a href="https://core.telegram.org/bots/api#unbanchatsenderchat">unbanned</a>, the owner of the
     * banned chat won't be able to send messages on behalf of any of their channels. The bot must be an
     * administrator in the supergroup or channel for this to work and must have the appropriate
     * administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * in the format <code>@username</code>
     * @param  int $sender_chat_id Unique identifier of the target sender chat
     *
     * @return true
     */
    public function banChatSenderChat(int|string $chat_id, int $sender_chat_id): true;

    /**
     * Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must
     * be an administrator for this to work and must have the appropriate administrator rights. Returns
     * <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * in the format <code>@username</code>
     * @param  int $sender_chat_id Unique identifier of the target sender chat
     *
     * @return true
     */
    public function unbanChatSenderChat(int|string $chat_id, int $sender_chat_id): true;

    /**
     * Use this method to set default chat permissions for all members. The bot must be an administrator in
     * the group or a supergroup for this to work and must have the <em>can_restrict_members</em>
     * administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  ChatPermissions $permissions A JSON-serialized object for new default chat permissions
     * @param  bool|null $use_independent_chat_permissions Pass <em>True</em> if chat permissions are set
     * independently. Otherwise, the <em>can_send_other_messages</em> and
     * <em>can_add_web_page_previews</em> permissions will imply the <em>can_send_messages</em>,
     * <em>can_send_audios</em>, <em>can_send_documents</em>, <em>can_send_photos</em>,
     * <em>can_send_videos</em>, <em>can_send_video_notes</em>, and <em>can_send_voice_notes</em>
     * permissions; the <em>can_send_polls</em> permission will imply the <em>can_send_messages</em>
     * permission.
     *
     * @return true
     */
    public function setChatPermissions(
        int|string $chat_id,
        ChatPermissions $permissions,
        ?bool $use_independent_chat_permissions = null,
    ): true;

    /**
     * Use this method to generate a new primary invite link for a chat; any previously generated primary
     * link is revoked. The bot must be an administrator in the chat for this to work and must have the
     * appropriate administrator rights. Returns the new invite link as <em>String</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * in the format <code>@username</code>
     *
     * @return string
     */
    public function exportChatInviteLink(int|string $chat_id): string;

    /**
     * Use this method to create an additional invite link for a chat. The bot must be an administrator in
     * the chat for this to work and must have the appropriate administrator rights. The link can be
     * revoked using the method
     * <a href="https://core.telegram.org/bots/api#revokechatinvitelink">revokeChatInviteLink</a>. Returns
     * the new invite link as
     * <a href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a> object.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * in the format <code>@username</code>
     * @param  string|null $name Invite link name; 0-32 characters
     * @param  int|null $expire_date Point in time (Unix timestamp) when the link will expire
     * @param  int|null $member_limit The maximum number of users that can be members of the chat
     * simultaneously after joining the chat via this invite link; 1-99999
     * @param  bool|null $creates_join_request <em>True</em>, if users joining the chat via the link need
     * to be approved by chat administrators. If <em>True</em>, <em>member_limit</em> can't be specified.
     *
     * @return ChatInviteLink
     */
    public function createChatInviteLink(
        int|string $chat_id,
        ?string $name = null,
        ?int $expire_date = null,
        ?int $member_limit = null,
        ?bool $creates_join_request = null,
    ): ChatInviteLink;

    /**
     * Use this method to edit a non-primary invite link created by the bot. The bot must be an
     * administrator in the chat for this to work and must have the appropriate administrator rights.
     * Returns the edited invite link as a
     * <a href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a> object.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * in the format <code>@username</code>
     * @param  string $invite_link The invite link to edit
     * @param  string|null $name Invite link name; 0-32 characters
     * @param  int|null $expire_date Point in time (Unix timestamp) when the link will expire
     * @param  int|null $member_limit The maximum number of users that can be members of the chat
     * simultaneously after joining the chat via this invite link; 1-99999
     * @param  bool|null $creates_join_request <em>True</em>, if users joining the chat via the link need
     * to be approved by chat administrators. If <em>True</em>, <em>member_limit</em> can't be specified.
     *
     * @return ChatInviteLink
     */
    public function editChatInviteLink(
        int|string $chat_id,
        string $invite_link,
        ?string $name = null,
        ?int $expire_date = null,
        ?int $member_limit = null,
        ?bool $creates_join_request = null,
    ): ChatInviteLink;

    /**
     * Use this method to create a
     * <a href="https://telegram.org/blog/superchannels-star-reactions-subscriptions#star-subscriptions">subscription invite link</a>
     * for a channel chat. The bot must have the <em>can_invite_users</em> administrator rights. The link
     * can be edited using the method
     * <a href="https://core.telegram.org/bots/api#editchatsubscriptioninvitelink">editChatSubscriptionInviteLink</a>
     * or revoked using the method
     * <a href="https://core.telegram.org/bots/api#revokechatinvitelink">revokeChatInviteLink</a>. Returns
     * the new invite link as a
     * <a href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a> object.
     *
     * @param  int|string $chat_id Unique identifier for the target channel chat or username of the target
     * channel in the format <code>@username</code>
     * @param  int $subscription_period The number of seconds the subscription will be active for before
     * the next payment. Currently, it must always be 2592000 (30 days).
     * @param  int $subscription_price The amount of Telegram Stars a user must pay initially and after
     * each subsequent subscription period to be a member of the chat; 1-10000
     * @param  string|null $name Invite link name; 0-32 characters
     *
     * @return ChatInviteLink
     */
    public function createChatSubscriptionInviteLink(
        int|string $chat_id,
        int $subscription_period,
        int $subscription_price,
        ?string $name = null,
    ): ChatInviteLink;

    /**
     * Use this method to edit a subscription invite link created by the bot. The bot must have the
     * <em>can_invite_users</em> administrator rights. Returns the edited invite link as a
     * <a href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a> object.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * in the format <code>@username</code>
     * @param  string $invite_link The invite link to edit
     * @param  string|null $name Invite link name; 0-32 characters
     *
     * @return ChatInviteLink
     */
    public function editChatSubscriptionInviteLink(
        int|string $chat_id,
        string $invite_link,
        ?string $name = null,
    ): ChatInviteLink;

    /**
     * Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new
     * link is automatically generated. The bot must be an administrator in the chat for this to work and
     * must have the appropriate administrator rights. Returns the revoked invite link as
     * <a href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a> object.
     *
     * @param  int|string $chat_id Unique identifier of the target chat or username of the target channel
     * in the format <code>@username</code>
     * @param  string $invite_link The invite link to revoke
     *
     * @return ChatInviteLink
     */
    public function revokeChatInviteLink(int|string $chat_id, string $invite_link): ChatInviteLink;

    /**
     * Use this method to approve a chat join request. The bot must be an administrator in the chat for
     * this to work and must have the <em>can_invite_users</em> administrator right. Returns <em>True</em>
     * on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * in the format <code>@username</code>
     * @param  int $user_id Unique identifier of the target user
     *
     * @return true
     */
    public function approveChatJoinRequest(int|string $chat_id, int $user_id): true;

    /**
     * Use this method to decline a chat join request. The bot must be an administrator in the chat for
     * this to work and must have the <em>can_invite_users</em> administrator right. Returns <em>True</em>
     * on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * in the format <code>@username</code>
     * @param  int $user_id Unique identifier of the target user
     *
     * @return true
     */
    public function declineChatJoinRequest(int|string $chat_id, int $user_id): true;

    /**
     * Use this method to process a received chat join request query. Returns <em>True</em> on success.
     *
     * @param  string $chat_join_request_query_id Unique identifier of the join request query
     * @param  string $result Result of the query. Must be either "approve" to allow the user to join the
     * chat, "decline" to disallow the user to join the chat, or "queue" to leave the decision to other
     * administrators.
     *
     * @return true
     */
    public function answerChatJoinRequestQuery(string $chat_join_request_query_id, string $result): true;

    /**
     * Use this method to process a received chat join request query by showing a Mini App to the user
     * before deciding the outcome. Call
     * <a href="https://core.telegram.org/bots/api#answerchatjoinrequestquery">answerChatJoinRequestQuery</a>
     * to resolve the join request query based on the user interaction with the Mini App. Returns
     * <em>True</em> on success.
     *
     * @param  string $chat_join_request_query_id Unique identifier of the join request query
     * @param  string $web_app_url An HTTPS URL of a Web App to be opened with additional data as specified
     * in <a href="/bots/webapps#initializing-mini-apps">Initializing Web Apps</a>
     *
     * @return true
     */
    public function sendChatJoinRequestWebApp(
        string $chat_join_request_query_id,
        string $web_app_url,
    ): true;

    /**
     * Use this method to set a new profile photo for the chat. Photos can't be changed for private chats.
     * The bot must be an administrator in the chat for this to work and must have the appropriate
     * administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * in the format <code>@username</code>
     * @param  InputFile $photo New chat photo, uploaded using multipart/form-data
     *
     * @return true
     */
    public function setChatPhoto(int|string $chat_id, InputFile $photo): true;

    /**
     * Use this method to delete a chat photo. Photos can't be changed for private chats. The bot must be
     * an administrator in the chat for this to work and must have the appropriate administrator rights.
     * Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * in the format <code>@username</code>
     *
     * @return true
     */
    public function deleteChatPhoto(int|string $chat_id): true;

    /**
     * Use this method to change the title of a chat. Titles can't be changed for private chats. The bot
     * must be an administrator in the chat for this to work and must have the appropriate administrator
     * rights. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * in the format <code>@username</code>
     * @param  string $title New chat title, 1-128 characters
     *
     * @return true
     */
    public function setChatTitle(int|string $chat_id, string $title): true;

    /**
     * Use this method to change the description of a group, a supergroup or a channel. The bot must be an
     * administrator in the chat for this to work and must have the appropriate administrator rights.
     * Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * in the format <code>@username</code>
     * @param  string|null $description New chat description, 0-255 characters
     *
     * @return true
     */
    public function setChatDescription(int|string $chat_id, ?string $description = null): true;

    /**
     * Use this method to add a message to the list of pinned messages in a chat. In private chats and
     * channel direct messages chats, all non-service messages can be pinned. Conversely, the bot must be
     * an administrator with the 'can_pin_messages' right or the 'can_edit_messages' right to pin messages
     * in groups and channels respectively. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * in the format <code>@username</code>
     * @param  int $message_id Identifier of a message to pin
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be pinned
     * @param  bool|null $disable_notification Pass <em>True</em> if it is not necessary to send a
     * notification to all chat members about the new pinned message. Notifications are always disabled in
     * channels and private chats.
     *
     * @return true
     */
    public function pinChatMessage(
        int|string $chat_id,
        int $message_id,
        ?string $business_connection_id = null,
        ?bool $disable_notification = null,
    ): true;

    /**
     * Use this method to remove a message from the list of pinned messages in a chat. In private chats and
     * channel direct messages chats, all messages can be unpinned. Conversely, the bot must be an
     * administrator with the 'can_pin_messages' right or the 'can_edit_messages' right to unpin messages
     * in groups and channels respectively. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * in the format <code>@username</code>
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be unpinned
     * @param  int|null $message_id Identifier of the message to unpin. Required if
     * <em>business_connection_id</em> is specified. If not specified, the most recent pinned message (by
     * sending date) will be unpinned.
     *
     * @return true
     */
    public function unpinChatMessage(
        int|string $chat_id,
        ?string $business_connection_id = null,
        ?int $message_id = null,
    ): true;

    /**
     * Use this method to clear the list of pinned messages in a chat. In private chats and channel direct
     * messages chats, no additional rights are required to unpin all pinned messages. Conversely, the bot
     * must be an administrator with the 'can_pin_messages' right or the 'can_edit_messages' right to unpin
     * all pinned messages in groups and channels respectively. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * in the format <code>@username</code>
     *
     * @return true
     */
    public function unpinAllChatMessages(int|string $chat_id): true;

    /**
     * Use this method for your bot to leave a group, supergroup or channel. Returns <em>True</em> on
     * success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup or channel in the format <code>@username</code>. Channel direct messages chats aren't
     * supported; leave the corresponding channel instead.
     *
     * @return true
     */
    public function leaveChat(int|string $chat_id): true;

    /**
     * Use this method to get up-to-date information about the chat. Returns a
     * <a href="https://core.telegram.org/bots/api#chatfullinfo">ChatFullInfo</a> object on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup or channel in the format <code>@username</code>
     *
     * @return ChatFullInfo
     */
    public function getChat(int|string $chat_id): ChatFullInfo;

    /**
     * Use this method to get a list of administrators in a chat. Returns an Array of
     * <a href="https://core.telegram.org/bots/api#chatmember">ChatMember</a> objects.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup or channel in the format <code>@username</code>
     * @param  bool|null $return_bots Pass <em>True</em> to additionally receive all bots that are
     * administrators of the chat. By default, bots other than the current bot are omitted.
     *
     * @return ChatMember[]
     */
    public function getChatAdministrators(int|string $chat_id, ?bool $return_bots = null): array;

    /**
     * Use this method to get the number of members in a chat. Returns <em>Integer</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup or channel in the format <code>@username</code>
     *
     * @return int
     */
    public function getChatMemberCount(int|string $chat_id): int;

    /**
     * Use this method to get information about a member of a chat. The method is only guaranteed to work
     * for other users if the bot is an administrator in the chat. Returns a
     * <a href="https://core.telegram.org/bots/api#chatmember">ChatMember</a> object on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup or channel in the format <code>@username</code>
     * @param  int $user_id Unique identifier of the target user
     *
     * @return ChatMember
     */
    public function getChatMember(int|string $chat_id, int $user_id): ChatMember;

    /**
     * Use this method to get the last messages from the personal chat (i.e., the chat currently added to
     * their profile) of a given user. On success, an Array of
     * <a href="https://core.telegram.org/bots/api#message">Message</a> objects is returned.
     *
     * @param  int $user_id Unique identifier for the target user
     * @param  int $limit The maximum number of messages to return; 1-20
     *
     * @return Message[]
     */
    public function getUserPersonalChatMessages(int $user_id, int $limit): array;

    /**
     * Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in
     * the chat for this to work and must have the appropriate administrator rights. Use the field
     * <em>can_set_sticker_set</em> optionally returned in
     * <a href="https://core.telegram.org/bots/api#getchat">getChat</a> requests to check if the bot can
     * use this method. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  string $sticker_set_name Name of the sticker set to be set as the group sticker set
     *
     * @return true
     */
    public function setChatStickerSet(int|string $chat_id, string $sticker_set_name): true;

    /**
     * Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in
     * the chat for this to work and must have the appropriate administrator rights. Use the field
     * <em>can_set_sticker_set</em> optionally returned in
     * <a href="https://core.telegram.org/bots/api#getchat">getChat</a> requests to check if the bot can
     * use this method. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     *
     * @return true
     */
    public function deleteChatStickerSet(int|string $chat_id): true;

    /**
     * Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user.
     * Requires no parameters. Returns an Array of
     * <a href="https://core.telegram.org/bots/api#sticker">Sticker</a> objects.
     *
     *
     * @return Sticker[]
     */
    public function getForumTopicIconStickers(): array;

    /**
     * Use this method to create a topic in a forum supergroup chat or a private chat with a user. In the
     * case of a supergroup chat the bot must be an administrator in the chat for this to work and must
     * have the <em>can_manage_topics</em> administrator right. Returns information about the created topic
     * as a <a href="https://core.telegram.org/bots/api#forumtopic">ForumTopic</a> object.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  string $name Topic name, 1-128 characters
     * @param  int|null $icon_color Color of the topic icon in RGB format. Currently, must be one of
     * 7322096 (0x6FB9F0), 16766590 (0xFFD67E), 13338331 (0xCB86DB), 9367192 (0x8EEE98), 16749490
     * (0xFF93B2), or 16478047 (0xFB6F5F).
     * @param  string|null $icon_custom_emoji_id Unique identifier of the custom emoji shown as the topic
     * icon. Use <a href="#getforumtopiciconstickers">getForumTopicIconStickers</a> to get all allowed
     * custom emoji identifiers.
     *
     * @return ForumTopic
     */
    public function createForumTopic(
        int|string $chat_id,
        string $name,
        ?int $icon_color = null,
        ?string $icon_custom_emoji_id = null,
    ): ForumTopic;

    /**
     * Use this method to edit name and icon of a topic in a forum supergroup chat or a private chat with a
     * user. In the case of a supergroup chat the bot must be an administrator in the chat for this to work
     * and must have the <em>can_manage_topics</em> administrator rights, unless it is the creator of the
     * topic. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  int $message_thread_id Unique identifier for the target message thread of the forum topic
     * @param  string|null $name New topic name, 0-128 characters. If not specified or empty, the current
     * name of the topic will be kept.
     * @param  string|null $icon_custom_emoji_id New unique identifier of the custom emoji shown as the
     * topic icon. Use <a href="#getforumtopiciconstickers">getForumTopicIconStickers</a> to get all
     * allowed custom emoji identifiers. Pass an empty string to remove the icon. If not specified, the
     * current icon will be kept.
     *
     * @return true
     */
    public function editForumTopic(
        int|string $chat_id,
        int $message_thread_id,
        ?string $name = null,
        ?string $icon_custom_emoji_id = null,
    ): true;

    /**
     * Use this method to close an open topic in a forum supergroup chat. The bot must be an administrator
     * in the chat for this to work and must have the <em>can_manage_topics</em> administrator rights,
     * unless it is the creator of the topic. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  int $message_thread_id Unique identifier for the target message thread of the forum topic
     *
     * @return true
     */
    public function closeForumTopic(int|string $chat_id, int $message_thread_id): true;

    /**
     * Use this method to reopen a closed topic in a forum supergroup chat. The bot must be an
     * administrator in the chat for this to work and must have the <em>can_manage_topics</em>
     * administrator rights, unless it is the creator of the topic. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  int $message_thread_id Unique identifier for the target message thread of the forum topic
     *
     * @return true
     */
    public function reopenForumTopic(int|string $chat_id, int $message_thread_id): true;

    /**
     * Use this method to delete a forum topic along with all its messages in a forum supergroup chat or a
     * private chat with a user. In the case of a supergroup chat the bot must be an administrator in the
     * chat for this to work and must have the <em>can_delete_messages</em> administrator rights. Returns
     * <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  int $message_thread_id Unique identifier for the target message thread of the forum topic
     *
     * @return true
     */
    public function deleteForumTopic(int|string $chat_id, int $message_thread_id): true;

    /**
     * Use this method to clear the list of pinned messages in a forum topic in a forum supergroup chat or
     * a private chat with a user. In the case of a supergroup chat the bot must be an administrator in the
     * chat for this to work and must have the <em>can_pin_messages</em> administrator right in the
     * supergroup. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  int $message_thread_id Unique identifier for the target message thread of the forum topic
     *
     * @return true
     */
    public function unpinAllForumTopicMessages(int|string $chat_id, int $message_thread_id): true;

    /**
     * Use this method to edit the name of the 'General' topic in a forum supergroup chat. The bot must be
     * an administrator in the chat for this to work and must have the <em>can_manage_topics</em>
     * administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     * @param  string $name New topic name, 1-128 characters
     *
     * @return true
     */
    public function editGeneralForumTopic(int|string $chat_id, string $name): true;

    /**
     * Use this method to close an open 'General' topic in a forum supergroup chat. The bot must be an
     * administrator in the chat for this to work and must have the <em>can_manage_topics</em>
     * administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     *
     * @return true
     */
    public function closeGeneralForumTopic(int|string $chat_id): true;

    /**
     * Use this method to reopen a closed 'General' topic in a forum supergroup chat. The bot must be an
     * administrator in the chat for this to work and must have the <em>can_manage_topics</em>
     * administrator rights. The topic will be automatically unhidden if it was hidden. Returns
     * <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     *
     * @return true
     */
    public function reopenGeneralForumTopic(int|string $chat_id): true;

    /**
     * Use this method to hide the 'General' topic in a forum supergroup chat. The bot must be an
     * administrator in the chat for this to work and must have the <em>can_manage_topics</em>
     * administrator rights. The topic will be automatically closed if it was open. Returns <em>True</em>
     * on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     *
     * @return true
     */
    public function hideGeneralForumTopic(int|string $chat_id): true;

    /**
     * Use this method to unhide the 'General' topic in a forum supergroup chat. The bot must be an
     * administrator in the chat for this to work and must have the <em>can_manage_topics</em>
     * administrator rights. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     *
     * @return true
     */
    public function unhideGeneralForumTopic(int|string $chat_id): true;

    /**
     * Use this method to clear the list of pinned messages in a General forum topic. The bot must be an
     * administrator in the chat for this to work and must have the <em>can_pin_messages</em> administrator
     * right in the supergroup. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target
     * supergroup in the format <code>@username</code>
     *
     * @return true
     */
    public function unpinAllGeneralForumTopicMessages(int|string $chat_id): true;

    /**
     * Use this method to send answers to callback queries sent from
     * <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboards</a>. The answer
     * will be displayed to the user as a notification at the top of the chat screen or as an alert. On
     * success, <em>True</em> is returned.
     * Alternatively, the user can be redirected to the specified Game URL. For this option to work, you
     * must first create a game for your bot via <a href="https://t.me/botfather">@BotFather</a> and accept
     * the terms. Otherwise, you may use links like t.me/your_bot?start=XXXX that open your bot with a
     * parameter.
     *
     * @param  string $callback_query_id Unique identifier for the query to be answered
     * @param  string|null $text Text of the notification. If not specified, nothing will be shown to the
     * user, 0-200 characters.
     * @param  bool|null $show_alert If <em>True</em>, an alert will be shown by the client instead of a
     * notification at the top of the chat screen. Defaults to <em>False</em>.
     * @param  string|null $url URL that will be opened by the user's client. If you have created a
     * <a href="#game">Game</a> and accepted the conditions via
     * <a href="https://t.me/botfather">@BotFather</a>, specify the URL that opens your game - note that
     * this will only work if the query comes from a
     * <a href="#inlinekeyboardbutton"><em>callback_game</em></a> button.<br><br>Otherwise, you may use
     * links like <code>t.me/your_bot?start=XXXX</code> that open your bot with a parameter.
     * @param  int|null $cache_time The maximum amount of time in seconds that the result of the callback
     * query may be cached client-side. Defaults to 0.
     *
     * @return true
     */
    public function answerCallbackQuery(
        string $callback_query_id,
        ?string $text = null,
        ?bool $show_alert = null,
        ?string $url = null,
        ?int $cache_time = null,
    ): true;

    /**
     * Use this method to reply to a received guest message. On success, a
     * <a href="https://core.telegram.org/bots/api#sentguestmessage">SentGuestMessage</a> object is
     * returned.
     *
     * @param  string $guest_query_id Unique identifier for the query to be answered
     * @param  InlineQueryResult $result A JSON-serialized object describing the message to be sent
     *
     * @return SentGuestMessage
     */
    public function answerGuestQuery(string $guest_query_id, InlineQueryResult $result): SentGuestMessage;

    /**
     * Use this method to get the list of boosts added to a chat by a user. Requires administrator rights
     * in the chat. Returns a
     * <a href="https://core.telegram.org/bots/api#userchatboosts">UserChatBoosts</a> object.
     *
     * @param  int|string $chat_id Unique identifier for the chat or username of the channel in the format
     * <code>@username</code>
     * @param  int $user_id Unique identifier of the target user
     *
     * @return UserChatBoosts
     */
    public function getUserChatBoosts(int|string $chat_id, int $user_id): UserChatBoosts;

    /**
     * Use this method to get information about the connection of the bot with a business account. Returns
     * a <a href="https://core.telegram.org/bots/api#businessconnection">BusinessConnection</a> object on
     * success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection
     *
     * @return BusinessConnection
     */
    public function getBusinessConnection(string $business_connection_id): BusinessConnection;

    /**
     * Use this method to get the token of a managed bot. Returns the token as <em>String</em> on success.
     *
     * @param  int $user_id User identifier of the managed bot whose token will be returned
     *
     * @return string
     */
    public function getManagedBotToken(int $user_id): string;

    /**
     * Use this method to revoke the current token of a managed bot and generate a new one. Returns the new
     * token as <em>String</em> on success.
     *
     * @param  int $user_id User identifier of the managed bot whose token will be replaced
     *
     * @return string
     */
    public function replaceManagedBotToken(int $user_id): string;

    /**
     * Use this method to get the access settings of a managed bot. Returns a
     * <a href="https://core.telegram.org/bots/api#botaccesssettings">BotAccessSettings</a> object on
     * success.
     *
     * @param  int $user_id User identifier of the managed bot whose access settings will be returned
     *
     * @return BotAccessSettings
     */
    public function getManagedBotAccessSettings(int $user_id): BotAccessSettings;

    /**
     * Use this method to change the access settings of a managed bot. Returns <em>True</em> on success.
     *
     * @param  int $user_id User identifier of the managed bot whose access settings will be changed
     * @param  bool $is_access_restricted Pass <em>True</em> if only selected users can access the bot. The
     * bot's owner can always access it.
     * @param  int[]|null $added_user_ids A JSON-serialized list of up to 10 identifiers of users who will
     * have access to the bot in addition to its owner. Ignored if <em>is_access_restricted</em> is
     * <em>False</em>.
     *
     * @return true
     */
    public function setManagedBotAccessSettings(
        int $user_id,
        bool $is_access_restricted,
        ?array $added_user_ids = null,
    ): true;

    /**
     * Use this method to change the list of the bot's commands. See
     * <a href="https://core.telegram.org/bots/features#commands">this manual</a> for more details about
     * bot commands. Returns <em>True</em> on success.
     *
     * @param  BotCommand[] $commands A JSON-serialized list of bot commands to be set as the list of the
     * bot's commands. At most 100 commands can be specified.
     * @param  BotCommandScope|null $scope A JSON-serialized object, describing scope of users for which
     * the commands are relevant. Defaults to <a href="#botcommandscopedefault">BotCommandScopeDefault</a>.
     * @param  string|null $language_code A two-letter ISO 639-1 language code. If empty, commands will be
     * applied to all users from the given scope, for whose language there are no dedicated commands.
     *
     * @return true
     */
    public function setMyCommands(
        array $commands,
        ?BotCommandScope $scope = null,
        ?string $language_code = null,
    ): true;

    /**
     * Use this method to delete the list of the bot's commands for the given scope and user language.
     * After deletion,
     * <a href="https://core.telegram.org/bots/api#determining-list-of-commands">higher level commands</a>
     * will be shown to affected users. Returns <em>True</em> on success.
     *
     * @param  BotCommandScope|null $scope A JSON-serialized object, describing scope of users for which
     * the commands are relevant. Defaults to <a href="#botcommandscopedefault">BotCommandScopeDefault</a>.
     * @param  string|null $language_code A two-letter ISO 639-1 language code. If empty, commands will be
     * applied to all users from the given scope, for whose language there are no dedicated commands.
     *
     * @return true
     */
    public function deleteMyCommands(?BotCommandScope $scope = null, ?string $language_code = null): true;

    /**
     * Use this method to get the current list of the bot's commands for the given scope and user language.
     * Returns an Array of <a href="https://core.telegram.org/bots/api#botcommand">BotCommand</a> objects.
     * If commands aren't set, an empty list is returned.
     *
     * @param  BotCommandScope|null $scope A JSON-serialized object, describing scope of users. Defaults to
     * <a href="#botcommandscopedefault">BotCommandScopeDefault</a>.
     * @param  string|null $language_code A two-letter ISO 639-1 language code or an empty string
     *
     * @return BotCommand[]
     */
    public function getMyCommands(?BotCommandScope $scope = null, ?string $language_code = null): array;

    /**
     * Use this method to change the bot's name. Returns <em>True</em> on success.
     *
     * @param  string|null $name New bot name; 0-64 characters. Pass an empty string to remove the
     * dedicated name for the given language.
     * @param  string|null $language_code A two-letter ISO 639-1 language code. If empty, the name will be
     * shown to all users for whose language there is no dedicated name.
     *
     * @return true
     */
    public function setMyName(?string $name = null, ?string $language_code = null): true;

    /**
     * Use this method to get the current bot name for the given user language. Returns
     * <a href="https://core.telegram.org/bots/api#botname">BotName</a> on success.
     *
     * @param  string|null $language_code A two-letter ISO 639-1 language code or an empty string
     *
     * @return BotName
     */
    public function getMyName(?string $language_code = null): BotName;

    /**
     * Use this method to change the bot's description, which is shown in the chat with the bot if the chat
     * is empty. Returns <em>True</em> on success.
     *
     * @param  string|null $description New bot description; 0-512 characters. Pass an empty string to
     * remove the dedicated description for the given language.
     * @param  string|null $language_code A two-letter ISO 639-1 language code. If empty, the description
     * will be applied to all users for whose language there is no dedicated description.
     *
     * @return true
     */
    public function setMyDescription(?string $description = null, ?string $language_code = null): true;

    /**
     * Use this method to get the current bot description for the given user language. Returns
     * <a href="https://core.telegram.org/bots/api#botdescription">BotDescription</a> on success.
     *
     * @param  string|null $language_code A two-letter ISO 639-1 language code or an empty string
     *
     * @return BotDescription
     */
    public function getMyDescription(?string $language_code = null): BotDescription;

    /**
     * Use this method to change the bot's short description, which is shown on the bot's profile page and
     * is sent together with the link when users share the bot. Returns <em>True</em> on success.
     *
     * @param  string|null $short_description New short description for the bot; 0-120 characters. Pass an
     * empty string to remove the dedicated short description for the given language.
     * @param  string|null $language_code A two-letter ISO 639-1 language code. If empty, the short
     * description will be applied to all users for whose language there is no dedicated short description.
     *
     * @return true
     */
    public function setMyShortDescription(
        ?string $short_description = null,
        ?string $language_code = null,
    ): true;

    /**
     * Use this method to get the current bot short description for the given user language. Returns
     * <a href="https://core.telegram.org/bots/api#botshortdescription">BotShortDescription</a> on success.
     *
     * @param  string|null $language_code A two-letter ISO 639-1 language code or an empty string
     *
     * @return BotShortDescription
     */
    public function getMyShortDescription(?string $language_code = null): BotShortDescription;

    /**
     * Changes the profile photo of the bot. Returns <em>True</em> on success.
     *
     * @param  InputProfilePhoto $photo The new profile photo to set
     *
     * @return true
     */
    public function setMyProfilePhoto(InputProfilePhoto $photo): true;

    /**
     * Removes the profile photo of the bot. Requires no parameters. Returns <em>True</em> on success.
     *
     *
     * @return true
     */
    public function removeMyProfilePhoto(): true;

    /**
     * Use this method to change the bot's menu button in a private chat, or the default menu button.
     * Returns <em>True</em> on success.
     *
     * @param  int|null $chat_id Unique identifier for the target private chat. If not specified, the bot's
     * default menu button will be changed.
     * @param  MenuButton|null $menu_button A JSON-serialized object for the bot's new menu button.
     * Defaults to <a href="#menubuttondefault">MenuButtonDefault</a>.
     *
     * @return true
     */
    public function setChatMenuButton(?int $chat_id = null, ?MenuButton $menu_button = null): true;

    /**
     * Use this method to get the current value of the bot's menu button in a private chat, or the default
     * menu button. Returns <a href="https://core.telegram.org/bots/api#menubutton">MenuButton</a> on
     * success.
     *
     * @param  int|null $chat_id Unique identifier for the target private chat. If not specified, the bot's
     * default menu button will be returned.
     *
     * @return MenuButton
     */
    public function getChatMenuButton(?int $chat_id = null): MenuButton;

    /**
     * Use this method to change the default administrator rights requested by the bot when it's added as
     * an administrator to groups or channels. These rights will be suggested to users, but they are free
     * to modify the list before adding the bot. Returns <em>True</em> on success.
     *
     * @param  ChatAdministratorRights|null $rights A JSON-serialized object describing new default
     * administrator rights. If not specified, the default administrator rights will be cleared.
     * @param  bool|null $for_channels Pass <em>True</em> to change the default administrator rights of the
     * bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups
     * will be changed.
     *
     * @return true
     */
    public function setMyDefaultAdministratorRights(
        ?ChatAdministratorRights $rights = null,
        ?bool $for_channels = null,
    ): true;

    /**
     * Use this method to get the current default administrator rights of the bot. Returns
     * <a href="https://core.telegram.org/bots/api#chatadministratorrights">ChatAdministratorRights</a> on
     * success.
     *
     * @param  bool|null $for_channels Pass <em>True</em> to get default administrator rights of the bot in
     * channels. Otherwise, default administrator rights of the bot for groups and supergroups will be
     * returned.
     *
     * @return ChatAdministratorRights
     */
    public function getMyDefaultAdministratorRights(?bool $for_channels = null): ChatAdministratorRights;

    /**
     * Returns the list of gifts that can be sent by the bot to users and channel chats. Requires no
     * parameters. Returns a <a href="https://core.telegram.org/bots/api#gifts">Gifts</a> object.
     *
     *
     * @return Gifts
     */
    public function getAvailableGifts(): Gifts;

    /**
     * Sends a gift to the given user or channel chat. The gift can't be converted to Telegram Stars by the
     * receiver. Returns <em>True</em> on success.
     *
     * @param  string $gift_id Identifier of the gift; limited gifts can't be sent to channel chats
     * @param  int|null $user_id Required if <em>chat_id</em> is not specified. Unique identifier of the
     * target user who will receive the gift.
     * @param  int|string|null $chat_id Required if <em>user_id</em> is not specified. Unique identifier
     * for the chat or username of the channel (in the format <code>@username</code>) that will receive the
     * gift.
     * @param  bool|null $pay_for_upgrade Pass <em>True</em> to pay for the gift upgrade from the bot's
     * balance, thereby making the upgrade free for the receiver
     * @param  string|null $text Text that will be shown along with the gift; 0-128 characters
     * @param  string|null $text_parse_mode Mode for parsing entities in the text. See
     * <a href="#formatting-options">formatting options</a> for more details. Entities other than "bold",
     * "italic", "underline", "strikethrough", "spoiler", "custom_emoji", and "date_time" are ignored.
     * @param  MessageEntity[]|null $text_entities A JSON-serialized list of special entities that appear
     * in the gift text. It can be specified instead of <em>text_parse_mode</em>. Entities other than
     * "bold", "italic", "underline", "strikethrough", "spoiler", "custom_emoji", and "date_time" are
     * ignored.
     *
     * @return true
     */
    public function sendGift(
        string $gift_id,
        ?int $user_id = null,
        int|string|null $chat_id = null,
        ?bool $pay_for_upgrade = null,
        ?string $text = null,
        ?string $text_parse_mode = null,
        ?array $text_entities = null,
    ): true;

    /**
     * Gifts a Telegram Premium subscription to the given user. Returns <em>True</em> on success.
     *
     * @param  int $user_id Unique identifier of the target user who will receive a Telegram Premium
     * subscription
     * @param  int $month_count Number of months the Telegram Premium subscription will be active for the
     * user; must be one of 3, 6, or 12
     * @param  int $star_count Number of Telegram Stars to pay for the Telegram Premium subscription; must
     * be 1000 for 3 months, 1500 for 6 months, and 2500 for 12 months
     * @param  string|null $text Text that will be shown along with the service message about the
     * subscription; 0-128 characters
     * @param  string|null $text_parse_mode Mode for parsing entities in the text. See
     * <a href="#formatting-options">formatting options</a> for more details. Entities other than "bold",
     * "italic", "underline", "strikethrough", "spoiler", "custom_emoji", and "date_time" are ignored.
     * @param  MessageEntity[]|null $text_entities A JSON-serialized list of special entities that appear
     * in the gift text. It can be specified instead of <em>text_parse_mode</em>. Entities other than
     * "bold", "italic", "underline", "strikethrough", "spoiler", "custom_emoji", and "date_time" are
     * ignored.
     *
     * @return true
     */
    public function giftPremiumSubscription(
        int $user_id,
        int $month_count,
        int $star_count,
        ?string $text = null,
        ?string $text_parse_mode = null,
        ?array $text_entities = null,
    ): true;

    /**
     * Verifies a user
     * <a href="https://telegram.org/verify#third-party-verification">on behalf of the organization</a>
     * which is represented by the bot. Returns <em>True</em> on success.
     *
     * @param  int $user_id Unique identifier of the target user
     * @param  string|null $custom_description Custom description for the verification; 0-70 characters.
     * Must be empty if the organization isn't allowed to provide a custom verification description.
     *
     * @return true
     */
    public function verifyUser(int $user_id, ?string $custom_description = null): true;

    /**
     * Verifies a chat
     * <a href="https://telegram.org/verify#third-party-verification">on behalf of the organization</a>
     * which is represented by the bot. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot,
     * supergroup or channel in the format <code>@username</code>. Channel direct messages chats can't be
     * verified.
     * @param  string|null $custom_description Custom description for the verification; 0-70 characters.
     * Must be empty if the organization isn't allowed to provide a custom verification description.
     *
     * @return true
     */
    public function verifyChat(int|string $chat_id, ?string $custom_description = null): true;

    /**
     * Removes verification from a user who is currently verified
     * <a href="https://telegram.org/verify#third-party-verification">on behalf of the organization</a>
     * represented by the bot. Returns <em>True</em> on success.
     *
     * @param  int $user_id Unique identifier of the target user
     *
     * @return true
     */
    public function removeUserVerification(int $user_id): true;

    /**
     * Removes verification from a chat that is currently verified
     * <a href="https://telegram.org/verify#third-party-verification">on behalf of the organization</a>
     * represented by the bot. Returns <em>True</em> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot or
     * channel in the format <code>@username</code>
     *
     * @return true
     */
    public function removeChatVerification(int|string $chat_id): true;

    /**
     * Marks incoming message as read on behalf of a business account. Requires the
     * <em>can_read_messages</em> business bot right. Returns <em>True</em> on success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection on behalf of
     * which to read the message
     * @param  int $chat_id Unique identifier of the chat in which the message was received. The chat must
     * have been active in the last 24 hours.
     * @param  int $message_id Unique identifier of the message to mark as read
     *
     * @return true
     */
    public function readBusinessMessage(
        string $business_connection_id,
        int $chat_id,
        int $message_id,
    ): true;

    /**
     * Delete messages on behalf of a business account. Requires the <em>can_delete_sent_messages</em>
     * business bot right to delete messages sent by the bot itself, or the
     * <em>can_delete_all_messages</em> business bot right to delete any message. Returns <em>True</em> on
     * success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection on behalf of
     * which to delete the messages
     * @param  int[] $message_ids A JSON-serialized list of 1-100 identifiers of messages to delete. All
     * messages must be from the same chat. See <a href="#deletemessage">deleteMessage</a> for limitations
     * on which messages can be deleted.
     *
     * @return true
     */
    public function deleteBusinessMessages(string $business_connection_id, array $message_ids): true;

    /**
     * Changes the first and last name of a managed business account. Requires the <em>can_change_name</em>
     * business bot right. Returns <em>True</em> on success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection
     * @param  string $first_name The new value of the first name for the business account; 1-64 characters
     * @param  string|null $last_name The new value of the last name for the business account; 0-64
     * characters
     *
     * @return true
     */
    public function setBusinessAccountName(
        string $business_connection_id,
        string $first_name,
        ?string $last_name = null,
    ): true;

    /**
     * Changes the username of a managed business account. Requires the <em>can_change_username</em>
     * business bot right. Returns <em>True</em> on success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection
     * @param  string|null $username The new value of the username for the business account; 0-32
     * characters
     *
     * @return true
     */
    public function setBusinessAccountUsername(
        string $business_connection_id,
        ?string $username = null,
    ): true;

    /**
     * Changes the bio of a managed business account. Requires the <em>can_change_bio</em> business bot
     * right. Returns <em>True</em> on success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection
     * @param  string|null $bio The new value of the bio for the business account; 0-140 characters
     *
     * @return true
     */
    public function setBusinessAccountBio(string $business_connection_id, ?string $bio = null): true;

    /**
     * Changes the profile photo of a managed business account. Requires the
     * <em>can_edit_profile_photo</em> business bot right. Returns <em>True</em> on success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection
     * @param  InputProfilePhoto $photo The new profile photo to set
     * @param  bool|null $is_public Pass <em>True</em> to set the public photo, which will be visible even
     * if the main photo is hidden by the business account's privacy settings. An account can have only one
     * public photo.
     *
     * @return true
     */
    public function setBusinessAccountProfilePhoto(
        string $business_connection_id,
        InputProfilePhoto $photo,
        ?bool $is_public = null,
    ): true;

    /**
     * Removes the current profile photo of a managed business account. Requires the
     * <em>can_edit_profile_photo</em> business bot right. Returns <em>True</em> on success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection
     * @param  bool|null $is_public Pass <em>True</em> to remove the public photo, which is visible even if
     * the main photo is hidden by the business account's privacy settings. After the main photo is
     * removed, the previous profile photo (if present) becomes the main photo.
     *
     * @return true
     */
    public function removeBusinessAccountProfilePhoto(
        string $business_connection_id,
        ?bool $is_public = null,
    ): true;

    /**
     * Changes the privacy settings pertaining to incoming gifts in a managed business account. Requires
     * the <em>can_change_gift_settings</em> business bot right. Returns <em>True</em> on success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection
     * @param  bool $show_gift_button Pass <em>True</em> if a button for sending a gift to the user or by
     * the business account must always be shown in the input field
     * @param  AcceptedGiftTypes $accepted_gift_types Types of gifts accepted by the business account
     *
     * @return true
     */
    public function setBusinessAccountGiftSettings(
        string $business_connection_id,
        bool $show_gift_button,
        AcceptedGiftTypes $accepted_gift_types,
    ): true;

    /**
     * Returns the amount of Telegram Stars owned by a managed business account. Requires the
     * <em>can_view_gifts_and_stars</em> business bot right. Returns
     * <a href="https://core.telegram.org/bots/api#staramount">StarAmount</a> on success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection
     *
     * @return StarAmount
     */
    public function getBusinessAccountStarBalance(string $business_connection_id): StarAmount;

    /**
     * Transfers Telegram Stars from the business account balance to the bot's balance. Requires the
     * <em>can_transfer_stars</em> business bot right. Returns <em>True</em> on success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection
     * @param  int $star_count Number of Telegram Stars to transfer; 1-10000
     *
     * @return true
     */
    public function transferBusinessAccountStars(string $business_connection_id, int $star_count): true;

    /**
     * Returns the gifts received and owned by a managed business account. Requires the
     * <em>can_view_gifts_and_stars</em> business bot right. Returns
     * <a href="https://core.telegram.org/bots/api#ownedgifts">OwnedGifts</a> on success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection
     * @param  bool|null $exclude_unsaved Pass <em>True</em> to exclude gifts that aren't saved to the
     * account's profile page
     * @param  bool|null $exclude_saved Pass <em>True</em> to exclude gifts that are saved to the account's
     * profile page
     * @param  bool|null $exclude_unlimited Pass <em>True</em> to exclude gifts that can be purchased an
     * unlimited number of times
     * @param  bool|null $exclude_limited_upgradable Pass <em>True</em> to exclude gifts that can be
     * purchased a limited number of times and can be upgraded to unique
     * @param  bool|null $exclude_limited_non_upgradable Pass <em>True</em> to exclude gifts that can be
     * purchased a limited number of times and can't be upgraded to unique
     * @param  bool|null $exclude_unique Pass <em>True</em> to exclude unique gifts
     * @param  bool|null $exclude_from_blockchain Pass <em>True</em> to exclude gifts that were assigned
     * from the TON blockchain and can't be resold or transferred in Telegram
     * @param  bool|null $sort_by_price Pass <em>True</em> to sort results by gift price instead of send
     * date. Sorting is applied before pagination.
     * @param  string|null $offset Offset of the first entry to return as received from the previous
     * request; use empty string to get the first chunk of results
     * @param  int|null $limit The maximum number of gifts to be returned; 1-100. Defaults to 100.
     *
     * @return OwnedGifts
     */
    public function getBusinessAccountGifts(
        string $business_connection_id,
        ?bool $exclude_unsaved = null,
        ?bool $exclude_saved = null,
        ?bool $exclude_unlimited = null,
        ?bool $exclude_limited_upgradable = null,
        ?bool $exclude_limited_non_upgradable = null,
        ?bool $exclude_unique = null,
        ?bool $exclude_from_blockchain = null,
        ?bool $sort_by_price = null,
        ?string $offset = null,
        ?int $limit = null,
    ): OwnedGifts;

    /**
     * Returns the gifts owned and hosted by a user. Returns
     * <a href="https://core.telegram.org/bots/api#ownedgifts">OwnedGifts</a> on success.
     *
     * @param  int $user_id Unique identifier of the user
     * @param  bool|null $exclude_unlimited Pass <em>True</em> to exclude gifts that can be purchased an
     * unlimited number of times
     * @param  bool|null $exclude_limited_upgradable Pass <em>True</em> to exclude gifts that can be
     * purchased a limited number of times and can be upgraded to unique
     * @param  bool|null $exclude_limited_non_upgradable Pass <em>True</em> to exclude gifts that can be
     * purchased a limited number of times and can't be upgraded to unique
     * @param  bool|null $exclude_from_blockchain Pass <em>True</em> to exclude gifts that were assigned
     * from the TON blockchain and can't be resold or transferred in Telegram
     * @param  bool|null $exclude_unique Pass <em>True</em> to exclude unique gifts
     * @param  bool|null $sort_by_price Pass <em>True</em> to sort results by gift price instead of send
     * date. Sorting is applied before pagination.
     * @param  string|null $offset Offset of the first entry to return as received from the previous
     * request; use an empty string to get the first chunk of results
     * @param  int|null $limit The maximum number of gifts to be returned; 1-100. Defaults to 100.
     *
     * @return OwnedGifts
     */
    public function getUserGifts(
        int $user_id,
        ?bool $exclude_unlimited = null,
        ?bool $exclude_limited_upgradable = null,
        ?bool $exclude_limited_non_upgradable = null,
        ?bool $exclude_from_blockchain = null,
        ?bool $exclude_unique = null,
        ?bool $sort_by_price = null,
        ?string $offset = null,
        ?int $limit = null,
    ): OwnedGifts;

    /**
     * Returns the gifts owned by a chat. Returns
     * <a href="https://core.telegram.org/bots/api#ownedgifts">OwnedGifts</a> on success.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target channel
     * in the format <code>@username</code>
     * @param  bool|null $exclude_unsaved Pass <em>True</em> to exclude gifts that aren't saved to the
     * chat's profile page. Always <em>True</em>, unless the bot has the <em>can_post_messages</em>
     * administrator right in the channel.
     * @param  bool|null $exclude_saved Pass <em>True</em> to exclude gifts that are saved to the chat's
     * profile page. Always <em>False</em>, unless the bot has the <em>can_post_messages</em> administrator
     * right in the channel.
     * @param  bool|null $exclude_unlimited Pass <em>True</em> to exclude gifts that can be purchased an
     * unlimited number of times
     * @param  bool|null $exclude_limited_upgradable Pass <em>True</em> to exclude gifts that can be
     * purchased a limited number of times and can be upgraded to unique
     * @param  bool|null $exclude_limited_non_upgradable Pass <em>True</em> to exclude gifts that can be
     * purchased a limited number of times and can't be upgraded to unique
     * @param  bool|null $exclude_from_blockchain Pass <em>True</em> to exclude gifts that were assigned
     * from the TON blockchain and can't be resold or transferred in Telegram
     * @param  bool|null $exclude_unique Pass <em>True</em> to exclude unique gifts
     * @param  bool|null $sort_by_price Pass <em>True</em> to sort results by gift price instead of send
     * date. Sorting is applied before pagination.
     * @param  string|null $offset Offset of the first entry to return as received from the previous
     * request; use an empty string to get the first chunk of results
     * @param  int|null $limit The maximum number of gifts to be returned; 1-100. Defaults to 100.
     *
     * @return OwnedGifts
     */
    public function getChatGifts(
        int|string $chat_id,
        ?bool $exclude_unsaved = null,
        ?bool $exclude_saved = null,
        ?bool $exclude_unlimited = null,
        ?bool $exclude_limited_upgradable = null,
        ?bool $exclude_limited_non_upgradable = null,
        ?bool $exclude_from_blockchain = null,
        ?bool $exclude_unique = null,
        ?bool $sort_by_price = null,
        ?string $offset = null,
        ?int $limit = null,
    ): OwnedGifts;

    /**
     * Converts a given regular gift to Telegram Stars. Requires the <em>can_convert_gifts_to_stars</em>
     * business bot right. Returns <em>True</em> on success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection
     * @param  string $owned_gift_id Unique identifier of the regular gift that should be converted to
     * Telegram Stars
     *
     * @return true
     */
    public function convertGiftToStars(string $business_connection_id, string $owned_gift_id): true;

    /**
     * Upgrades a given regular gift to a unique gift. Requires the <em>can_transfer_and_upgrade_gifts</em>
     * business bot right. Additionally requires the <em>can_transfer_stars</em> business bot right if the
     * upgrade is paid. Returns <em>True</em> on success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection
     * @param  string $owned_gift_id Unique identifier of the regular gift that should be upgraded to a
     * unique one
     * @param  bool|null $keep_original_details Pass <em>True</em> to keep the original gift text, sender
     * and receiver in the upgraded gift
     * @param  int|null $star_count The amount of Telegram Stars that will be paid for the upgrade from the
     * business account balance. If <code>gift.prepaid_upgrade_star_count > 0</code>, then pass 0,
     * otherwise, the <em>can_transfer_stars</em> business bot right is required and
     * <code>gift.upgrade_star_count</code> must be passed.
     *
     * @return true
     */
    public function upgradeGift(
        string $business_connection_id,
        string $owned_gift_id,
        ?bool $keep_original_details = null,
        ?int $star_count = null,
    ): true;

    /**
     * Transfers an owned unique gift to another user. Requires the <em>can_transfer_and_upgrade_gifts</em>
     * business bot right. Requires <em>can_transfer_stars</em> business bot right if the transfer is paid.
     * Returns <em>True</em> on success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection
     * @param  string $owned_gift_id Unique identifier of the regular gift that should be transferred
     * @param  int $new_owner_chat_id Unique identifier of the chat which will own the gift. The chat must
     * be active in the last 24 hours.
     * @param  int|null $star_count The amount of Telegram Stars that will be paid for the transfer from
     * the business account balance. If positive, then the <em>can_transfer_stars</em> business bot right
     * is required.
     *
     * @return true
     */
    public function transferGift(
        string $business_connection_id,
        string $owned_gift_id,
        int $new_owner_chat_id,
        ?int $star_count = null,
    ): true;

    /**
     * Posts a story on behalf of a managed business account. Requires the <em>can_manage_stories</em>
     * business bot right. Returns <a href="https://core.telegram.org/bots/api#story">Story</a> on success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection
     * @param  InputStoryContent $content Content of the story
     * @param  int $active_period Period after which the story is moved to the archive, in seconds; must be
     * one of <code>6 * 3600</code>, <code>12 * 3600</code>, <code>86400</code>, or <code>2 * 86400</code>
     * @param  string|null $caption Caption of the story, 0-2048 characters after entities parsing
     * @param  string|null $parse_mode Mode for parsing entities in the story caption. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $caption_entities A JSON-serialized list of special entities that
     * appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  StoryArea[]|null $areas A JSON-serialized list of clickable areas to be shown on the story
     * @param  bool|null $post_to_chat_page Pass <em>True</em> to keep the story accessible after it
     * expires
     * @param  bool|null $protect_content Pass <em>True</em> if the content of the story must be protected
     * from forwarding and screenshotting
     *
     * @return Story
     */
    public function postStory(
        string $business_connection_id,
        InputStoryContent $content,
        int $active_period,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?array $areas = null,
        ?bool $post_to_chat_page = null,
        ?bool $protect_content = null,
    ): Story;

    /**
     * Reposts a story on behalf of a business account from another business account. Both business
     * accounts must be managed by the same bot, and the story on the source account must have been posted
     * (or reposted) by the bot. Requires the <em>can_manage_stories</em> business bot right for both
     * business accounts. Returns <a href="https://core.telegram.org/bots/api#story">Story</a> on success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection
     * @param  int $from_chat_id Unique identifier of the chat which posted the story that should be
     * reposted
     * @param  int $from_story_id Unique identifier of the story that should be reposted
     * @param  int $active_period Period after which the story is moved to the archive, in seconds; must be
     * one of <code>6 * 3600</code>, <code>12 * 3600</code>, <code>86400</code>, or <code>2 * 86400</code>
     * @param  bool|null $post_to_chat_page Pass <em>True</em> to keep the story accessible after it
     * expires
     * @param  bool|null $protect_content Pass <em>True</em> if the content of the story must be protected
     * from forwarding and screenshotting
     *
     * @return Story
     */
    public function repostStory(
        string $business_connection_id,
        int $from_chat_id,
        int $from_story_id,
        int $active_period,
        ?bool $post_to_chat_page = null,
        ?bool $protect_content = null,
    ): Story;

    /**
     * Edits a story previously posted by the bot on behalf of a managed business account. Requires the
     * <em>can_manage_stories</em> business bot right. Returns
     * <a href="https://core.telegram.org/bots/api#story">Story</a> on success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection
     * @param  int $story_id Unique identifier of the story to edit
     * @param  InputStoryContent $content Content of the story
     * @param  string|null $caption Caption of the story, 0-2048 characters after entities parsing
     * @param  string|null $parse_mode Mode for parsing entities in the story caption. See
     * <a href="#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]|null $caption_entities A JSON-serialized list of special entities that
     * appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  StoryArea[]|null $areas A JSON-serialized list of clickable areas to be shown on the story
     *
     * @return Story
     */
    public function editStory(
        string $business_connection_id,
        int $story_id,
        InputStoryContent $content,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?array $areas = null,
    ): Story;

    /**
     * Deletes a story previously posted by the bot on behalf of a managed business account. Requires the
     * <em>can_manage_stories</em> business bot right. Returns <em>True</em> on success.
     *
     * @param  string $business_connection_id Unique identifier of the business connection
     * @param  int $story_id Unique identifier of the story to delete
     *
     * @return true
     */
    public function deleteStory(string $business_connection_id, int $story_id): true;

    /**
     * Use this method to set the result of an interaction with a
     * <a href="https://core.telegram.org/bots/webapps">Web App</a> and send a corresponding message on
     * behalf of the user to the chat from which the query originated. On success, a
     * <a href="https://core.telegram.org/bots/api#sentwebappmessage">SentWebAppMessage</a> object is
     * returned.
     *
     * @param  string $web_app_query_id Unique identifier for the query to be answered
     * @param  InlineQueryResult $result A JSON-serialized object describing the message to be sent
     *
     * @return SentWebAppMessage
     */
    public function answerWebAppQuery(
        string $web_app_query_id,
        InlineQueryResult $result,
    ): SentWebAppMessage;

    /**
     * Stores a message that can be sent by a user of a Mini App. Returns a
     * <a href="https://core.telegram.org/bots/api#preparedinlinemessage">PreparedInlineMessage</a> object.
     *
     * @param  int $user_id Unique identifier of the target user that can use the prepared message
     * @param  InlineQueryResult $result A JSON-serialized object describing the message to be sent
     * @param  bool|null $allow_user_chats Pass <em>True</em> if the message can be sent to private chats
     * with users
     * @param  bool|null $allow_bot_chats Pass <em>True</em> if the message can be sent to private chats
     * with bots
     * @param  bool|null $allow_group_chats Pass <em>True</em> if the message can be sent to group and
     * supergroup chats
     * @param  bool|null $allow_channel_chats Pass <em>True</em> if the message can be sent to channel
     * chats
     *
     * @return PreparedInlineMessage
     */
    public function savePreparedInlineMessage(
        int $user_id,
        InlineQueryResult $result,
        ?bool $allow_user_chats = null,
        ?bool $allow_bot_chats = null,
        ?bool $allow_group_chats = null,
        ?bool $allow_channel_chats = null,
    ): PreparedInlineMessage;

    /**
     * Stores a keyboard button that can be used by a user within a Mini App. Returns a
     * <a href="https://core.telegram.org/bots/api#preparedkeyboardbutton">PreparedKeyboardButton</a>
     * object.
     *
     * @param  int $user_id Unique identifier of the target user that can use the button
     * @param  KeyboardButton $button A JSON-serialized object describing the button to be saved. The
     * button must be of the type <em>request_users</em>, <em>request_chat</em>, or
     * <em>request_managed_bot</em>.
     *
     * @return PreparedKeyboardButton
     */
    public function savePreparedKeyboardButton(
        int $user_id,
        KeyboardButton $button,
    ): PreparedKeyboardButton;
}
