<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to work in
 * <a href="/bots/inline">inline mode</a>.Please see our
 * <a href="/bots/inline">Introduction to Inline bots</a> for more details.
 * To enable this option, send the /setinline command to
 * <a href="https://t.me/botfather">@BotFather</a> and provide the placeholder text that the user will
 * see in the input field after typing your bot's name.
 */
class InputContactMessageContent extends Data implements TelegramType, InputMessageContent
{
    public function __construct(
        /** @var  string  Contact's phone number */
        public string $phone_number,
        /** @var  string  Contact's first name */
        public string $first_name,
        /** @var  string|null  Contact's last name */
        public ?string $last_name,
        /** @var  string|null  Additional data about the contact in the form of a vCard, 0-2048 bytes */
        public ?string $vcard,
    ) {
    }
}
