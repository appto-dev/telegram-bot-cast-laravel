<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to set a new group sticker set for a supergroup. The bot must be
 * an administrator in the chat for this to work and must have the appropriate
 * administrator rights. Use the field <em>can_set_sticker_set</em> optionally
 * returned in <a href="#getchat">getChat</a> requests to check if the bot can use
 * this method. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class SetChatStickerSet extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in
         * the format <code>@supergroupusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Name of the sticker set to be set as the group sticker set
         * @var string
         */
        public string $sticker_set_name,
    ) {
    }
}
