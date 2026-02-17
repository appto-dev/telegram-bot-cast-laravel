<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\MessageEntity;
use Appto\TelegramBot\Data\ReplyParameters;
use Appto\TelegramBot\Data\SuggestedPostParameters;
use Appto\TelegramBot\Interfaces\ReplyMarkup;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to copy messages of any kind. Service messages, paid media messages, giveaway messages,
 * giveaway winners messages, and invoice messages can't be copied. A quiz <a
 * href="https://core.telegram.org/bots/api#poll">poll</a> can be copied only if the value of the field
 * <em>correct_option_id</em> is known to the bot. The method is analogous to the method <a
 * href="https://core.telegram.org/bots/api#forwardmessage">forwardMessage</a>, but the copied message doesn't
 * have a link to the original message. Returns the <a
 * href="https://core.telegram.org/bots/api#messageid">MessageId</a> of the sent message on success.
 */
final class CopyMessage extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format
         * <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of
         * bots with forum topic mode enabled only
         */
        public ?int $message_thread_id,
        /**
         * Identifier of the direct messages topic to which the message will be sent; required if the message is sent to
         * a direct messages chat
         */
        public ?int $direct_messages_topic_id,
        /**
         * Unique identifier for the chat where the original message was sent (or channel username in the format
         * <code>@channelusername</code>)
         */
        public int|string $from_chat_id,
        /** Message identifier in the chat specified in <em>from_chat_id</em> */
        public int $message_id,
        /** New start timestamp for the copied video in the message */
        public ?int $video_start_timestamp,
        /**
         * New caption for media, 0-1024 characters after entities parsing. If not specified, the original caption is
         * kept
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the new caption. See <a href="#formatting-options">formatting options</a> for
         * more details.
         */
        public ?string $parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the new caption, which can be specified instead of
         * <em>parse_mode</em>
         */
        public ?MessageEntity $caption_entities,
        /**
         * Pass <em>True</em>, if the caption must be shown above the message media. Ignored if a new caption isn't
         * specified.
         */
        public ?bool $show_caption_above_media,
        /**
         * Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will
         * receive a notification with no sound.
         */
        public ?bool $disable_notification,
        /** Protects the contents of the sent message from forwarding and saving */
        public ?bool $protect_content,
        /**
         * Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a
         * href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting
         * limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's
         * balance
         */
        public ?bool $allow_paid_broadcast,
        /**
         * Unique identifier of the message effect to be added to the message; only available when copying to private
         * chats
         */
        public ?string $message_effect_id,
        /**
         * A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats
         * only. If the message is sent as a reply to another suggested post, then that suggested post is automatically
         * declined.
         */
        public ?SuggestedPostParameters $suggested_post_parameters,
        /** Description of the message to reply to */
        public ?ReplyParameters $reply_parameters,
        /**
         * Additional interface options. A JSON-serialized object for an <a href="/bots/features#inline-keyboards">inline
         * keyboard</a>, <a href="/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply
         * keyboard or to force a reply from the user
         */
        public ?ReplyMarkup $reply_markup,
    ) {
    }
}
