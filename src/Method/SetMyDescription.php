<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * SetMyDescription
 *
 * Use this method to change the bot's description, which is shown in the chat with
 * the bot if the chat is empty. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class SetMyDescription extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;

    public function __construct(
        /**
         * New bot description; 0-512 characters. Pass an empty string to remove
         * the dedicated description for the given language.
         */
        public ?string $description,
        /**
         * A two-letter ISO 639-1 language code. If empty, the description will
         * be applied to all users for whose language there is no dedicated
         * description.
         */
        public ?string $language_code,
    ) {
    }
}
