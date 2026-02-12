<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to get the current bot description for the given user language.
 * Returns <a
 * href="https://core.telegram.org/bots/api#botdescription">BotDescription</a> on
 * success.
 */
final class GetMyDescription extends Data implements TelegramBotData
{
    public function __construct(
        /** A two-letter ISO 639-1 language code or an empty string */
        public ?string $language_code,
    ) {
    }
}
