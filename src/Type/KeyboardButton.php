<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents one button of the reply keyboard. At most one of the
 * optional fields must be used to specify type of the button. For simple text
 * buttons, <em>String</em> can be used instead of this object to specify the
 * button text.
 *
 * @version Telegram Bot API 7.10
 */
final class KeyboardButton extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Text of the button. If none of the optional fields are used, it will be sent as
         * a message when the button is pressed
         * @var string
         */
        public string $text,
        /**
         * If specified, pressing the button will open a list of suitable users.
         * Identifiers of selected users will be sent to the bot in a "users_shared"
         * service message. Available in private chats only.
         * @var KeyboardButtonRequestUsers
         */
        public ?KeyboardButtonRequestUsers $request_users,
        /**
         * If specified, pressing the button will open a list of suitable chats. Tapping on
         * a chat will send its identifier to the bot in a "chat_shared" service message.
         * Available in private chats only.
         * @var KeyboardButtonRequestChat
         */
        public ?KeyboardButtonRequestChat $request_chat,
        /**
         * If True, the user's phone number will be sent as a contact when the button is
         * pressed. Available in private chats only.
         * @var bool
         */
        public ?bool $request_contact,
        /**
         * If True, the user's current location will be sent when the button is pressed.
         * Available in private chats only.
         * @var bool
         */
        public ?bool $request_location,
        /**
         * If specified, the user will be asked to create a poll and send it to the bot
         * when the button is pressed. Available in private chats only.
         * @var KeyboardButtonPollType
         */
        public ?KeyboardButtonPollType $request_poll,
        /**
         * If specified, the described Web App will be launched when the button is pressed.
         * The Web App will be able to send a "web_app_data" service message. Available in
         * private chats only.
         * @var WebAppInfo
         */
        public ?WebAppInfo $web_app,
    ) {
    }
}
