<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Upon receiving a message with this object, Telegram clients will remove the
 * current custom keyboard and display the default letter-keyboard. By default,
 * custom keyboards are displayed until a new keyboard is sent by a bot. An
 * exception is made for one-time keyboards that are hidden immediately after the
 * user presses a button (see <a
 * href="#replykeyboardmarkup">ReplyKeyboardMarkup</a>). Not supported in channels
 * and for messages sent on behalf of a Telegram Business account.
 */
final class ReplyKeyboardRemove extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Requests clients to remove the custom keyboard (user will not be able to summon
         * this keyboard; if you want to hide the keyboard from sight but keep it
         * accessible, use one_time_keyboard in ReplyKeyboardMarkup)
         * @var true
         */
        public true $remove_keyboard,
        /**
         * Use this parameter if you want to remove the keyboard for specific users only.
         * Targets: 1) users that are @mentioned in the text of the Message object; 2) if
         * the bot's message is a reply to a message in the same chat and forum topic,
         * sender of the original message.Example: A user votes in a poll, bot returns
         * confirmation message in reply to the vote and removes the keyboard for that
         * user, while still showing the keyboard with poll options to users who haven't
         * voted yet.
         * @var bool
         */
        public ?bool $selective,
    ) {
    }
}
