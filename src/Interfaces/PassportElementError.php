<?php

namespace Appto\TelegramBot\Interfaces;

/**
 * This object represents an error in the Telegram Passport element which was submitted that should be resolved
 * by the user. It should be one of:
 *  - <a
 * href="https://core.telegram.org/bots/api#passportelementerrordatafield">PassportElementErrorDataField</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#passportelementerrorfrontside">PassportElementErrorFrontSide</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#passportelementerrorreverseside">PassportElementErrorReverseSide</a>
 *  - <a href="https://core.telegram.org/bots/api#passportelementerrorselfie">PassportElementErrorSelfie</a>
 *  - <a href="https://core.telegram.org/bots/api#passportelementerrorfile">PassportElementErrorFile</a>
 *  - <a href="https://core.telegram.org/bots/api#passportelementerrorfiles">PassportElementErrorFiles</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#passportelementerrortranslationfile">PassportElementErrorTranslationFile</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#passportelementerrortranslationfiles">PassportElementErrorTranslationFiles</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#passportelementerrorunspecified">PassportElementErrorUnspecified</a>
 */
interface PassportElementError
{
}
