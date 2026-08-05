<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class KeyboardButton extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  string  Text of the button. If none of the fields other than text, icon_custom_emoji_id, and
         * style are used, it will be sent as a message when the button is pressed.
         */
        public string $text,
        /**
         * @var  string|null  Unique identifier of the custom emoji shown before the text of the button. Can
         * only be used by bots that purchased additional usernames on Fragment or in the messages directly
         * sent by the bot to private, group and supergroup chats if the owner of the bot has a Telegram
         * Premium subscription.
         */
        public ?string $icon_custom_emoji_id,
        /**
         * @var  string|null  Style of the button. Must be one of "danger" (red), "success" (green) or
         * "primary" (blue). If omitted, then an app-specific style is used.
         */
        public ?string $style,
        /**
         * @var  KeyboardButtonRequestUsers|null  If specified, pressing the button will open a list of
         * suitable users. Identifiers of selected users will be sent to the bot in a "users_shared" service
         * message. Available in private chats only.
         */
        public ?KeyboardButtonRequestUsers $request_users,
        /**
         * @var  KeyboardButtonRequestChat|null  If specified, pressing the button will open a list of suitable
         * chats. Tapping on a chat will send its identifier to the bot in a "chat_shared" service message.
         * Available in private chats only.
         */
        public ?KeyboardButtonRequestChat $request_chat,
        /**
         * @var  KeyboardButtonRequestManagedBot|null  If specified, pressing the button will ask the user to
         * create and share a bot that will be managed by the current bot. Available for bots that enabled
         * management of other bots in the @BotFather Mini App. Available in private chats only.
         */
        public ?KeyboardButtonRequestManagedBot $request_managed_bot,
        /**
         * @var  bool|null  If True, the user's phone number will be sent as a contact when the button is
         * pressed. Available in private chats only.
         */
        public ?bool $request_contact,
        /**
         * @var  bool|null  If True, the user's current location will be sent when the button is pressed.
         * Available in private chats only.
         */
        public ?bool $request_location,
        /**
         * @var  KeyboardButtonPollType|null  If specified, the user will be asked to create a poll and send it
         * to the bot when the button is pressed. Available in private chats only.
         */
        public ?KeyboardButtonPollType $request_poll,
        /**
         * @var  WebAppInfo|null  If specified, the described Web App will be launched when the button is
         * pressed. The Web App will be able to send a "web_app_data" service message. Available in private
         * chats only.
         */
        public ?WebAppInfo $web_app,
    ) {
    }
}
