<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Appto\TelegramBot\Type\InputFile;
use Spatie\LaravelData\Data;

/**
 * Use this method to set a new profile photo for the chat. Photos can't be changed
 * for private chats. The bot must be an administrator in the chat for this to work
 * and must have the appropriate administrator rights. Returns <em>True</em> on
 * success.
 *
 * @version Telegram Bot API 7.10
 */
final class SetChatPhoto extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format @channelusername)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * New chat photo, uploaded using multipart/form-data
         * @var InputFile
         */
        public InputFile $photo,
    ) {
    }
}
