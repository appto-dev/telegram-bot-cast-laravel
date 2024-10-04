<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\PassportElementError;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * SetPassportDataErrors
 *
 * Informs a user that some of the Telegram Passport elements they provided
 * contains errors. The user will not be able to re-submit their Passport to you
 * until the errors are fixed (the contents of the field for which you returned the
 * error must change). Returns True on success.
 * Use this if the data submitted by
 * the user doesn't satisfy the standards your service requires for any reason. For
 * example, if a birthday date seems invalid, a submitted document is blurry, a
 * scan shows evidence of tampering, etc. Supply some details in the error message
 * to make sure the user knows how to correct the issues.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class SetPassportDataErrors extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;

    public function __construct(
        /** User identifier */
        public int $user_id,
        /**
         * A JSON-serialized array describing the errors
         * @var array<PassportElementError>
         */
        public array $errors,
    ) {
    }
}
