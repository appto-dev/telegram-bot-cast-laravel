<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes an inline message sent by a <a href="https://core.telegram.org/bots/webapps">Web App</a> on behalf
 * of a user.
 */
final class SentWebAppMessage extends Data implements TelegramBotData
{
    public function __construct(
        /** Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. */
        public ?string $inline_message_id,
    ) {
    }
}
