<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class LoginUrl extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  string  An HTTPS URL to be opened with user authorization data added to the query string when
         * the button is pressed. If the user refuses to provide authorization data, the original URL without
         * information about the user will be opened. The data added is the same as described in Receiving
         * authorization data.NOTE: You must always check the hash of the received data to verify the
         * authentication and the integrity of the data as described in Checking authorization.
         */
        public string $url,
        /** @var  string|null  New text of the button in forwarded messages */
        public ?string $forward_text,
        /**
         * @var  string|null  Username of a bot, which will be used for user authorization. See Setting up a
         * bot for more details. If not specified, the current bot's username will be assumed. The url's domain
         * must be the same as the domain linked with the bot. See Linking your domain to the bot for more
         * details.
         */
        public ?string $bot_username,
        /** @var  bool|null  Pass True to request the permission for your bot to send messages to the user */
        public ?bool $request_write_access,
    ) {
    }
}
