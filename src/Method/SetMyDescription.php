<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to change the bot's description, which is shown in the chat with
 * the bot if the chat is empty. Returns <em>True</em> on success.
 */
final class SetMyDescription extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * New bot description; 0-512 characters. Pass an empty string to remove the
         * dedicated description for the given language.
         * @var string
         */
        public ?string $description,
        /**
         * A two-letter ISO 639-1 language code. If empty, the description will be applied
         * to all users for whose language there is no dedicated description.
         * @var string
         */
        public ?string $language_code,
    ) {
    }
}
