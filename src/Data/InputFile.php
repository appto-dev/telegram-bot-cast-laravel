<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents the contents of a file to be uploaded. Must be posted
 * using multipart/form-data in the usual way that files are uploaded via the
 * browser.
 */
final class InputFile extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * The attached file.
         * Please note that this parameter does not exist in the documentation, it has been
         * added to make it easier to work with files.
         */
        public string $attach,
    ) {
    }
}
