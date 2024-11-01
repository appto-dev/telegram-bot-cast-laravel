<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about a user allowing a bot to write
 * messages after adding it to the attachment menu, launching a Web App from a
 * link, or accepting an explicit request from a Web App sent by the method <a
 * href="/bots/webapps#initializing-mini-apps">requestWriteAccess</a>.
 *
 * @version Telegram Bot API 7.11
 */
final class WriteAccessAllowed extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * True, if the access was granted after the user accepted an explicit request from
         * a Web App sent by the method requestWriteAccess
         * @var bool
         */
        public ?bool $from_request,
        /**
         * Name of the Web App, if the access was granted when the Web App was launched
         * from a link
         * @var string
         */
        public ?string $web_app_name,
        /**
         * True, if the access was granted when the bot was added to the attachment or side
         * menu
         * @var bool
         */
        public ?bool $from_attachment_menu,
    ) {
    }
}
