<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\RichTextCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichMessageButton extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  RichText  Text of the button. May contain only plain text, RichTextCustomEmoji and
         * RichTextDateTime entities.
         */
        #[WithCast(RichTextCast::class)]
        public RichText $text,
        /**
         * @var  string|null  Style of the button. Must be one of "danger", "success", "primary", or "link"
         * (the button is shown as a regular link without borders). Apps may use theme-specific colors for the
         * button background and text based on the style. The style "link" is allowed only for callback
         * buttons.
         */
        public ?string $style,
        /**
         * @var  string|null  HTTP or tg:// URL to be opened when the button is pressed. Links
         * tg://user?id=<user_id> can be used to mention a user by their identifier without using a username,
         * if this is allowed by their privacy settings.
         */
        public ?string $url,
        /**
         * @var  string|null  Data to be sent in a callback query to the bot when the button is pressed, 1-64
         * bytes
         */
        public ?string $callback_data,
        /**
         * @var  WebAppInfo|null  Description of the Web App that will be launched when the user presses the
         * button. The Web App will be able to send an arbitrary message on behalf of the user using the method
         * answerWebAppQuery. Available only in private chats between a user and the bot. Not supported for
         * messages sent on behalf of a business account.
         */
        public ?WebAppInfo $web_app,
        /**
         * @var  LoginUrl|null  An HTTPS URL used to automatically authorize the user. Can be used as a
         * replacement for the Telegram Login Widget. Not supported for ephemeral messages.
         */
        public ?LoginUrl $login_url,
        /**
         * @var  string|null  If set, pressing the button will prompt the user to select one of their chats,
         * open that chat and insert the bot's username and the specified inline query in the input field. May
         * be empty, in which case just the bot's username will be inserted. Not supported for messages sent in
         * channel direct messages chats and on behalf of a business account.
         */
        public ?string $switch_inline_query,
        /**
         * @var  string|null  If set, pressing the button will insert the bot's username and the specified
         * inline query in the current chat's input field. May be empty, in which case only the bot's username
         * will be inserted. Not supported in channels and for messages sent in channel direct messages chats
         * and on behalf of a business account.
         */
        public ?string $switch_inline_query_current_chat,
        /**
         * @var  SwitchInlineQueryChosenChat|null  If set, pressing the button will prompt the user to select
         * one of their chats of the specified type, open that chat and insert the bot's username and the
         * specified inline query in the input field. Not supported for messages sent in channel direct
         * messages chats and on behalf of a business account.
         */
        public ?SwitchInlineQueryChosenChat $switch_inline_query_chosen_chat,
        /** @var  CopyTextButton|null  A button that copies the specified text to the clipboard */
        public ?CopyTextButton $copy_text,
        /** @var  DisabledButton|null  If set, then the button is disabled and does nothing */
        public ?DisabledButton $disabled,
    ) {
    }
}
