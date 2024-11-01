<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\ForceReply;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\ReplyKeyboardMarkup;
use Appto\TelegramBot\Type\ReplyKeyboardRemove;
use Appto\TelegramBot\Type\ReplyParameters;
use Spatie\LaravelData\Data;

/**
 * Use this method to send an animated emoji that will display a random value. On
 * success, the sent <a href="#message">Message</a> is returned.
 *
 * @version Telegram Bot API 7.11
 */
final class SendDice extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will
         * be sent
         * @var string
         */
        public ?string $business_connection_id,
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum
         * supergroups only
         * @var int
         */
        public ?int $message_thread_id,
        /**
         * Emoji on which the dice throw animation is based. Currently, must be one of
         * "<img class="emoji" src="//telegram.org/img/emoji/40/F09F8EB2.png" width="20"
         * height="20" alt="🎲">", "<img class="emoji"
         * src="//telegram.org/img/emoji/40/F09F8EAF.png" width="20" height="20"
         * alt="🎯">", "<img class="emoji" src="//telegram.org/img/emoji/40/F09F8F80.png"
         * width="20" height="20" alt="🏀">", "<img class="emoji"
         * src="//telegram.org/img/emoji/40/E29ABD.png" width="20" height="20" alt="⚽">",
         * "<img class="emoji" src="//telegram.org/img/emoji/40/F09F8EB3.png" width="20"
         * height="20" alt="🎳">", or "<img class="emoji"
         * src="//telegram.org/img/emoji/40/F09F8EB0.png" width="20" height="20"
         * alt="🎰">". Dice can have values 1-6 for "<img class="emoji"
         * src="//telegram.org/img/emoji/40/F09F8EB2.png" width="20" height="20"
         * alt="🎲">", "<img class="emoji" src="//telegram.org/img/emoji/40/F09F8EAF.png"
         * width="20" height="20" alt="🎯">" and "<img class="emoji"
         * src="//telegram.org/img/emoji/40/F09F8EB3.png" width="20" height="20"
         * alt="🎳">", values 1-5 for "<img class="emoji"
         * src="//telegram.org/img/emoji/40/F09F8F80.png" width="20" height="20"
         * alt="🏀">" and "<img class="emoji"
         * src="//telegram.org/img/emoji/40/E29ABD.png" width="20" height="20" alt="⚽">",
         * and values 1-64 for "<img class="emoji"
         * src="//telegram.org/img/emoji/40/F09F8EB0.png" width="20" height="20"
         * alt="🎰">". Defaults to "<img class="emoji"
         * src="//telegram.org/img/emoji/40/F09F8EB2.png" width="20" height="20"
         * alt="🎲">"
         * @var string
         */
        public ?string $emoji,
        /**
         * Sends the message <a
         * href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>.
         * Users will receive a notification with no sound.
         * @var bool
         */
        public ?bool $disable_notification,
        /**
         * Protects the contents of the sent message from forwarding
         * @var bool
         */
        public ?bool $protect_content,
        /**
         * Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a
         * href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting
         * limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will
         * be withdrawn from the bot's balance
         * @var bool
         */
        public ?bool $allow_paid_broadcast,
        /**
         * Unique identifier of the message effect to be added to the message; for private
         * chats only
         * @var string
         */
        public ?string $message_effect_id,
        /**
         * Description of the message to reply to
         * @var ReplyParameters
         */
        public ?ReplyParameters $reply_parameters,
        /**
         * Additional interface options. A JSON-serialized object for an <a
         * href="/bots/features#inline-keyboards">inline keyboard</a>, <a
         * href="/bots/features#keyboards">custom reply keyboard</a>, instructions to
         * remove a reply keyboard or to force a reply from the user
         * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply
         */
        public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup,
    ) {
    }
}
