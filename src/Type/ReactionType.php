<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes the type of a reaction. Currently, it can be one of
 *  - <a href="#reactiontypeemoji">ReactionTypeEmoji</a>
 *  - <a href="#reactiontypecustomemoji">ReactionTypeCustomEmoji</a>
 *  - <a href="#reactiontypepaid">ReactionTypePaid</a>
 */
final class ReactionType extends Data implements TelegramTypeInterface
{
}
