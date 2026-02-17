<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\InputFile;
use Appto\TelegramBot\Data\ReplyParameters;
use Appto\TelegramBot\Data\SuggestedPostParameters;
use Appto\TelegramBot\Interfaces\ReplyMarkup;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to send audio files, if you want Telegram clients to display the file as a playable voice
 * message. For this to work, your audio must be in an .OGG file encoded with OPUS, or in .MP3 format, or in .M4A
 * format (other formats may be sent as <a href="https://core.telegram.org/bots/api#audio">Audio</a> or <a
 * href="https://core.telegram.org/bots/api#document">Document</a>). On success, the sent <a
 * href="https://core.telegram.org/bots/api#message">Message</a> is returned. Bots can currently send voice
 * messages of up to 50 MB in size, this limit may be changed in the future.
 */
final class SendVoice extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection on behalf of which the message will be sent */
        public ?string $business_connection_id,
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
         * Audio file to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended),
         * pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using
         * multipart/form-data. <a href="#sending-files">More information on Sending Files </a>
         */
        public InputFile|string $voice,
        /** Voice message caption, 0-1024 characters after entities parsing */
        public ?string $caption,
        /**
         * Mode for parsing entities in the voice message caption. See <a href="#formatting-options">formatting
         * options</a> for more details.
         */
        public ?string $parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the caption, which can be specified instead of
         * <em>parse_mode</em>
         * @var MessageEntity[]
         */
        public ?array $caption_entities,
        /** Duration of the voice message in seconds */
        public ?int $duration,
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
        /** Unique identifier of the message effect to be added to the message; for private chats only */
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
