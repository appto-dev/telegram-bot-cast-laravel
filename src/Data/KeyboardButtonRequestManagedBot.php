<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object defines the parameters for the creation of a managed bot. Information about the created bot will
 * be shared with the bot using the update <em>managed_bot</em> and a <a
 * href="https://core.telegram.org/bots/api#message">Message</a> with the field <em>managed_bot_created</em>.
 */
final class KeyboardButtonRequestManagedBot extends Data implements TelegramBotData
{
    public function __construct(
        /** Signed 32-bit identifier of the request. Must be unique within the message */
        public int $request_id,
        /** Suggested name for the bot */
        public ?string $suggested_name,
        /** Suggested username for the bot */
        public ?string $suggested_username,
    ) {
    }
}
