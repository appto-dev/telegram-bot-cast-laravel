<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to get basic information about a file and prepare it for
 * downloading. For the moment, bots can download files of up to 20MB in size. On
 * success, a <a href="https://core.telegram.org/bots/api#file">File</a> object is
 * returned. The file can then be downloaded via the link
 * https://api.telegram.org/file/bot<token>/<file_path>, where <file_path> is taken
 * from the response. It is guaranteed that the link will be valid for at least 1
 * hour. When the link expires, a new one can be requested by calling <a
 * href="https://core.telegram.org/bots/api#getfile">getFile</a> again.
 */
final class GetFile extends Dto implements TelegramBotDto
{
    public function __construct(
        /** File identifier to get information about */
        public string $file_id,
    ) {
    }
}
