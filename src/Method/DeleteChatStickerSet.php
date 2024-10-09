<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to delete a group sticker set from a supergroup. The bot must be
 * an administrator in the chat for this to work and must have the appropriate
 * administrator rights. Use the field <em>can_set_sticker_set</em> optionally
 * returned in <a href="#getchat">getChat</a> requests to check if the bot can use
 * this method. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class DeleteChatStickerSet extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in
         * the format @supergroupusername)
         * @var int|string
         */
        public int|string $chat_id,
    ) {
    }
}
