<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\BotDescription;
use Spatie\LaravelData\Data;

/**
 * GetMyDescription
 *
 * Use this method to get the current bot description for the given user language.
 * Returns BotDescription on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class GetMyDescription extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = BotDescription::class;

    public function __construct(
        /** A two-letter ISO 639-1 language code or an empty string */
        public ?string $language_code,
    ) {
    }
}
