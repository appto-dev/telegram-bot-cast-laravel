<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents one button of an inline keyboard. Exactly one of the
 * fields other than <em>text</em>, <em>icon_custom_emoji_id</em>, and
 * <em>style</em> must be used to specify the type of the button.
 */
final class InlineKeyboardButton extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Label text on the button
         * @var string
         */
        public string $text,
        /**
         * Unique identifier of the custom emoji shown before the text of the button. Can
         * only be used by bots that purchased additional usernames on Fragment or in the
         * messages directly sent by the bot to private, group and supergroup chats if the
         * owner of the bot has a Telegram Premium subscription.
         * @var string
         */
        public ?string $icon_custom_emoji_id,
        /**
         * Style of the button. Must be one of "danger" (red), "success" (green) or
         * "primary" (blue). If omitted, then an app-specific style is used.
         * @var string
         */
        public ?string $style,
        /**
         * HTTP or tg:// URL to be opened when the button is pressed. Links
         * tg://user?id=<user_id> can be used to mention a user by their identifier without
         * using a username, if this is allowed by their privacy settings.
         * @var string
         */
        public ?string $url,
        /**
         * Data to be sent in a callback query to the bot when the button is pressed, 1-64
         * bytes
         * @var string
         */
        public ?string $callback_data,
        /**
         * Description of the Web App that will be launched when the user presses the
         * button. The Web App will be able to send an arbitrary message on behalf of the
         * user using the method answerWebAppQuery. Available only in private chats between
         * a user and the bot. Not supported for messages sent on behalf of a Telegram
         * Business account.
         * @var WebAppInfo
         */
        public ?WebAppInfo $web_app,
        /**
         * An HTTPS URL used to automatically authorize the user. Can be used as a
         * replacement for the Telegram Login Widget.
         * @var LoginUrl
         */
        public ?LoginUrl $login_url,
        /**
         * If set, pressing the button will prompt the user to select one of their chats,
         * open that chat and insert the bot's username and the specified inline query in
         * the input field. May be empty, in which case just the bot's username will be
         * inserted. Not supported for messages sent in channel direct messages chats and
         * on behalf of a Telegram Business account.
         * @var string
         */
        public ?string $switch_inline_query,
        /**
         * If set, pressing the button will insert the bot's username and the specified
         * inline query in the current chat's input field. May be empty, in which case only
         * the bot's username will be inserted.This offers a quick way for the user to open
         * your bot in inline mode in the same chat - good for selecting something from
         * multiple options. Not supported in channels and for messages sent in channel
         * direct messages chats and on behalf of a Telegram Business account.
         * @var string
         */
        public ?string $switch_inline_query_current_chat,
        /**
         * If set, pressing the button will prompt the user to select one of their chats of
         * the specified type, open that chat and insert the bot's username and the
         * specified inline query in the input field. Not supported for messages sent in
         * channel direct messages chats and on behalf of a Telegram Business account.
         * @var SwitchInlineQueryChosenChat
         */
        public ?SwitchInlineQueryChosenChat $switch_inline_query_chosen_chat,
        /**
         * Description of the button that copies the specified text to the clipboard.
         * @var CopyTextButton
         */
        public ?CopyTextButton $copy_text,
        /**
         * Description of the game that will be launched when the user presses the
         * button.NOTE: This type of button must always be the first button in the first
         * row.
         * @var CallbackGame
         */
        public ?CallbackGame $callback_game,
        /**
         * Specify True, to send a Pay button. Substrings "" and "XTR" in the buttons's
         * text will be replaced with a Telegram Star icon.NOTE: This type of button must
         * always be the first button in the first row and can only be used in invoice
         * messages.
         * @var bool
         */
        public ?bool $pay,
    ) {
    }
}
