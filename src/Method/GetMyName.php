<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to get the current bot name for the given user language. Returns
 * <a href="#botname">BotName</a> on success.
 *
 * @version Telegram Bot API 7.11
 */
final class GetMyName extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * A two-letter ISO 639-1 language code or an empty string
         * @var string
         */
        public ?string $language_code,
    ) {
    }
}
