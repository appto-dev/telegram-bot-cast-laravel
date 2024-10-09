<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to change the bot's name. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class SetMyName extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * New bot name; 0-64 characters. Pass an empty string to remove the dedicated name
         * for the given language.
         * @var string
         */
        public ?string $name,
        /**
         * A two-letter ISO 639-1 language code. If empty, the name will be shown to all
         * users for whose language there is no dedicated name.
         * @var string
         */
        public ?string $language_code,
    ) {
    }
}
