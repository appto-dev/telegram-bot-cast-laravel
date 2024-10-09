<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object describes the type of a reaction. Currently, it can be one of
 *  - <a href="#reactiontypeemoji">ReactionTypeEmoji</a>
 *  - <a href="#reactiontypecustomemoji">ReactionTypeCustomEmoji</a>
 *  - <a href="#reactiontypepaid">ReactionTypePaid</a>
 *
 * @version Telegram Bot API 7.10
 */
final class ReactionType extends Data implements TelegramTypeContract
{
}
