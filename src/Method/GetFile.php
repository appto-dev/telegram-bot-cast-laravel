<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to get basic information about a file and prepare it for
 * downloading. For the moment, bots can download files of up to 20MB in size. On
 * success, a <a href="#file">File</a> object is returned. The file can then be
 * downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>,
 * where <file_path> is taken from the response. It is guaranteed that the link
 * will be valid for at least 1 hour. When the link expires, a new one can be
 * requested by calling <a href="#getfile">getFile</a> again.
 *
 * @version Telegram Bot API 7.10
 */
final class GetFile extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * File identifier to get information about
         * @var string
         */
        public string $file_id,
    ) {
    }
}
