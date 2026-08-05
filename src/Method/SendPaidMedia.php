<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\ForceReply;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InputPaidMedia;
use Appto\TelegramBot\Type\MessageEntity;
use Appto\TelegramBot\Type\ReplyKeyboardMarkup;
use Appto\TelegramBot\Type\ReplyKeyboardRemove;
use Appto\TelegramBot\Type\ReplyParameters;
use Appto\TelegramBot\Type\SuggestedPostParameters;
use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class SendPaidMedia extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  string|null  Unique identifier of the business connection on behalf of which the message will
         * be sent
         */
        public ?string $business_connection_id,
        /**
         * @var  int|string  Unique identifier for the target chat or username of the target bot, supergroup or
         * channel in the format <code>@username</code>. If the chat is a channel, all Telegram Star proceeds
         * from this media will be credited to the chat's balance. Otherwise, they will be credited to the
         * bot's balance.
         */
        public int|string $chat_id,
        /**
         * @var  int|null  Unique identifier for the target message thread (topic) of a forum; for forum
         * supergroups and private chats of bots with forum topic mode enabled only
         */
        public ?int $message_thread_id,
        /**
         * @var  int|null  Identifier of the direct messages topic to which the message will be sent; required
         * if the message is sent to a direct messages chat
         */
        public ?int $direct_messages_topic_id,
        /** @var  int  The number of Telegram Stars that must be paid to buy access to the media; 1-25000 */
        public int $star_count,
        /** @var  InputPaidMedia[]  A JSON-serialized Array describing the media to be sent; up to 10 items */
        public array $media,
        /**
         * @var  string|null  Bot-defined paid media payload, 0-128 bytes. This will not be displayed to the
         * user, use it for your internal processes.
         */
        public ?string $payload,
        /** @var  string|null  Media caption, 0-1024 characters after entities parsing */
        public ?string $caption,
        /**
         * @var  string|null  Mode for parsing entities in the media caption. See
         * <a href="#formatting-options">formatting options</a> for more details.
         */
        public ?string $parse_mode,
        /**
         * @var  MessageEntity[]|null  A JSON-serialized list of special entities that appear in the caption,
         * which can be specified instead of <em>parse_mode</em>
         */
        public ?array $caption_entities,
        /** @var  bool|null  Pass <em>True</em> if the caption must be shown above the message media */
        public ?bool $show_caption_above_media,
        /**
         * @var  bool|null  Sends the message
         * <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a
         * notification with no sound.
         */
        public ?bool $disable_notification,
        /** @var  bool|null  Protects the contents of the sent message from forwarding and saving */
        public ?bool $protect_content,
        /**
         * @var  bool|null  Pass <em>True</em> to allow up to 1000 messages per second, ignoring
         * <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a>
         * for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's
         * balance.
         */
        public ?bool $allow_paid_broadcast,
        /**
         * @var  SuggestedPostParameters|null  A JSON-serialized object containing the parameters of the
         * suggested post to send; for direct messages chats only. If the message is sent as a reply to another
         * suggested post, then that suggested post is automatically declined.
         */
        public ?SuggestedPostParameters $suggested_post_parameters,
        /** @var  ReplyParameters|null  Description of the message to reply to */
        public ?ReplyParameters $reply_parameters,
        /**
         * @var  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null  Additional
         * interface options. A JSON-serialized object for an
         * <a href="/bots/features#inline-keyboards">inline keyboard</a>,
         * <a href="/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply
         * keyboard or to force a reply from the user.
         */
        public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup,
    ) {
    }
}
