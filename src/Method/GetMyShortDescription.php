<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to get the current bot short description for the given user
 * language. Returns <a href="#botshortdescription">BotShortDescription</a> on
 * success.
 *
 * @version Telegram Bot API 7.10
 */
final class GetMyShortDescription extends Data implements TelegramMethodInterface
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
