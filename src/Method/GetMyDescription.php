<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to get the current bot description for the given user language.
 * Returns <a href="#botdescription">BotDescription</a> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class GetMyDescription extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * A two-letter ISO 639-1 language code or an empty string
         * @var string|null
         */
        public ?string $language_code,
    ) {
    }
}
