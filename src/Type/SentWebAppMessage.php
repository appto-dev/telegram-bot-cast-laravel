<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Describes an inline message sent by a <a href="/bots/webapps">Web App</a> on
 * behalf of a user.
 *
 * @version Telegram Bot API 7.10
 */
final class SentWebAppMessage extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Identifier of the sent inline message. Available only if there is an inline
         * keyboard attached to the message.
         * @var string|null
         */
        public ?string $inline_message_id,
    ) {
    }
}
