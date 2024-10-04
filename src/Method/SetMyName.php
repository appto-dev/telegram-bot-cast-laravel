<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * SetMyName
 *
 * Use this method to change the bot's name. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class SetMyName extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;

    public function __construct(
        /**
         * New bot name; 0-64 characters. Pass an empty string to remove the
         * dedicated name for the given language.
         */
        public ?string $name,
        /**
         * A two-letter ISO 639-1 language code. If empty, the name will be shown
         * to all users for whose language there is no dedicated name.
         */
        public ?string $language_code,
    ) {
    }
}
