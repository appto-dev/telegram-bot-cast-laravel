<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\InlineKeyboardMarkup;
use Appto\TelegramBot\Data\ReplyParameters;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to send a game. On success, the sent <a href="https://core.telegram.org/bots/api#message">Message</a> is
 * returned.
 */
final class SendGame extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection on behalf of which the message will be sent */
        public ?string $business_connection_id,
        /** Unique identifier for the target chat. Games can't be sent to channel direct messages chats and channel chats. */
        public int $chat_id,
        /**
         * Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with
         * forum topic mode enabled only
         */
        public ?int $message_thread_id,
        /**
         * Short name of the game, serves as the unique identifier for the game. Set up your games via <a
         * href="https://t.me/botfather">@BotFather</a>.
         */
        public string $game_short_name,
        /**
         * Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a
         * notification with no sound.
         */
        public ?bool $disable_notification,
        /** Protects the contents of the sent message from forwarding and saving */
        public ?bool $protect_content,
        /**
         * Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a
         * href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting
         * limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
         */
        public ?bool $allow_paid_broadcast,
        /** Unique identifier of the message effect to be added to the message; for private chats only */
        public ?string $message_effect_id,
        /** Description of the message to reply to */
        public ?ReplyParameters $reply_parameters,
        /**
         * A JSON-serialized object for an <a href="/bots/features#inline-keyboards">inline keyboard</a>. If empty, one 'Play
         * game_title' button will be shown. If not empty, the first button must launch the game.
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
