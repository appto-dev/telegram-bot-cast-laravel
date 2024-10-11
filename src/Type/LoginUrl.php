<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a parameter of the inline keyboard button used to
 * automatically authorize a user. Serves as a great replacement for the <a
 * href="/widgets/login">Telegram Login Widget</a> when the user is coming from
 * Telegram. All the user needs to do is tap/click a button and confirm that they
 * want to log in:
 *
 *   <a href="/file/811140015/1734/8VZFkwWXalM.97872/6127fa62d8a0bf2b3c"
 * target="_blank"></a>
 *
 * Telegram apps support these buttons as of <a
 * href="https://telegram.org/blog/privacy-discussions-web-bots#meet-seamless-web-bots">version
 * 5.7</a>.
 * Sample bot: <a href="https://t.me/discussbot">@discussbot</a>
 *
 * @version Telegram Bot API 7.10
 */
final class LoginUrl extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * An HTTPS URL to be opened with user authorization data added to the query string
         * when the button is pressed. If the user refuses to provide authorization data,
         * the original URL without information about the user will be opened. The data
         * added is the same as described in Receiving authorization data.NOTE: You must
         * always check the hash of the received data to verify the authentication and the
         * integrity of the data as described in Checking authorization.
         * @var string
         */
        public string $url,
        /**
         * New text of the button in forwarded messages.
         * @var string
         */
        public ?string $forward_text,
        /**
         * Username of a bot, which will be used for user authorization. See Setting up a
         * bot for more details. If not specified, the current bot's username will be
         * assumed. The url's domain must be the same as the domain linked with the bot.
         * See Linking your domain to the bot for more details.
         * @var string
         */
        public ?string $bot_username,
        /**
         * Pass True to request the permission for your bot to send messages to the user.
         * @var bool
         */
        public ?bool $request_write_access,
    ) {
    }
}
