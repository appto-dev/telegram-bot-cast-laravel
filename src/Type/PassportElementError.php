<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents an error in the Telegram Passport element which was
 * submitted that should be resolved by the user. It should be one of:
 *  - <a href="#passportelementerrordatafield">PassportElementErrorDataField</a>
 *  - <a href="#passportelementerrorfrontside">PassportElementErrorFrontSide</a>
 *  - <a
 * href="#passportelementerrorreverseside">PassportElementErrorReverseSide</a>
 *  - <a href="#passportelementerrorselfie">PassportElementErrorSelfie</a>
 *  - <a href="#passportelementerrorfile">PassportElementErrorFile</a>
 *  - <a href="#passportelementerrorfiles">PassportElementErrorFiles</a>
 *  - <a
 * href="#passportelementerrortranslationfile">PassportElementErrorTranslationFile</a>
 *  - <a
 * href="#passportelementerrortranslationfiles">PassportElementErrorTranslationFiles</a>
 *  - <a
 * href="#passportelementerrorunspecified">PassportElementErrorUnspecified</a>
 *
 * @version Telegram Bot API 7.10
 */
final class PassportElementError extends Data implements TelegramTypeInterface
{
}
