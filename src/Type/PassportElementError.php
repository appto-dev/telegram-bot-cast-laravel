<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * PassportElementError
 *
 * This object represents an error in the Telegram Passport element which was
 * submitted that should be resolved by the user. It should be one of:
 *  -
 * PassportElementErrorDataField
 *  - PassportElementErrorFrontSide
 *  -
 * PassportElementErrorReverseSide
 *  - PassportElementErrorSelfie
 *  -
 * PassportElementErrorFile
 *  - PassportElementErrorFiles
 *  -
 * PassportElementErrorTranslationFile
 *  - PassportElementErrorTranslationFiles
 *  -
 * PassportElementErrorUnspecified
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class PassportElementError extends Dto implements TypeInterface
{
}
