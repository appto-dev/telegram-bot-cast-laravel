<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Support;

use Appto\TelegramBot\Type\GameHighScore;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\Message;
use Appto\TelegramBot\Type\ReplyParameters;

/**
 * Your bot can offer users HTML5 games to play solo or to compete against each other in groups and
 * one-on-one chats. Create games via <a href="https://t.me/botfather">@BotFather</a> using the
 * <em>/newgame</em> command. Please note that this kind of power requires responsibility: you will
 * need to accept the terms for each game that your bots will be offering.
 *  - Games are a new type of content on Telegram, represented by the <a href="#game">Game</a> and
 * <a href="#inlinequeryresultgame">InlineQueryResultGame</a> objects.
 *  - Once you've created a game via <a href="https://t.me/botfather">BotFather</a>, you can send games
 * to chats as regular messages using the <a href="#sendgame">sendGame</a> method, or use
 * <a href="#inline-mode">inline mode</a> with
 * <a href="#inlinequeryresultgame">InlineQueryResultGame</a>.
 *  - If you send the game message without any buttons, it will automatically have a 'Play
 * <em>GameName</em>' button. When this button is pressed, your bot gets a
 * <a href="#callbackquery">CallbackQuery</a> with the <em>game_short_name</em> of the requested game.
 * You provide the correct URL for this particular user and the app opens the game in the in-app
 * browser.
 *  - You can manually add multiple buttons to your game message. Please note that the first button in
 * the first row must always launch the game, using the field <em>callback_game</em> in
 * <a href="#inlinekeyboardbutton">InlineKeyboardButton</a>. You can add extra buttons according to
 * taste: e.g., for a description of the rules, or to open the game's official community.
 *  - To make your game more attractive, you can upload a GIF animation that demonstrates the game to
 * the users via <a href="https://t.me/botfather">BotFather</a> (see
 * <a href="https://t.me/gamebot?game=lumberjack">Lumberjack</a> for example).
 *  - A game message will also display high scores for the current chat. Use
 * <a href="#setgamescore">setGameScore</a> to post high scores to the chat with the game, add the
 * <em>disable_edit_message</em> parameter to disable automatic update of the message with the current
 * scoreboard.
 *  - Use <a href="#getgamehighscores">getGameHighScores</a> to get data for in-game high score tables.
 *  - You can also add an extra
 * <a href="/bots/games#sharing-your-game-to-telegram-chats">sharing button</a> for users to share
 * their best score to different chats.
 *  - For examples of what can be done using this new stuff, check the
 * <a href="https://t.me/gamebot">@gamebot</a> and <a href="https://t.me/gamee">@gamee</a> bots.
 */
interface Games
{
    /**
     * Use this method to send a game. On success, the sent
     * <a href="https://core.telegram.org/bots/api#message">Message</a> is returned.
     *
     * @param  int|string $chat_id Unique identifier for the target chat or username of the target bot in
     * the format <code>@username</code>. Games can't be sent to channel direct messages chats and channel
     * chats.
     * @param  string $game_short_name Short name of the game, serves as the unique identifier for the
     * game. Set up your games via <a href="https://t.me/botfather">@BotFather</a>.
     * @param  string|null $business_connection_id Unique identifier of the business connection on behalf
     * of which the message will be sent
     * @param  int|null $message_thread_id Unique identifier for the target message thread (topic) of a
     * forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  bool|null $disable_notification Sends the message
     * <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a
     * notification with no sound.
     * @param  bool|null $protect_content Protects the contents of the sent message from forwarding and
     * saving
     * @param  bool|null $allow_paid_broadcast Pass <em>True</em> to allow up to 1000 messages per second,
     * ignoring
     * <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a>
     * for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's
     * balance.
     * @param  string|null $message_effect_id Unique identifier of the message effect to be added to the
     * message; for private chats only
     * @param  ReplyParameters|null $reply_parameters Description of the message to reply to
     * @param  InlineKeyboardMarkup|null $reply_markup A JSON-serialized object for an
     * <a href="/bots/features#inline-keyboards">inline keyboard</a>. If empty, one 'Play game_title'
     * button will be shown. If not empty, the first button must launch the game.
     *
     * @return Message
     */
    public function sendGame(
        int|string $chat_id,
        string $game_short_name,
        ?string $business_connection_id = null,
        ?int $message_thread_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?ReplyParameters $reply_parameters = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): Message;

    /**
     * Use this method to set the score of the specified user in a game message. On success, if the message
     * is not an inline message, the <a href="https://core.telegram.org/bots/api#message">Message</a> is
     * returned, otherwise <em>True</em> is returned. Returns an error, if the new score is not greater
     * than the user's current score in the chat and <em>force</em> is <em>False</em>.
     *
     * @param  int $user_id User identifier
     * @param  int $score New score, must be non-negative
     * @param  bool|null $force Pass <em>True</em> if the high score is allowed to decrease. This can be
     * useful when fixing mistakes or banning cheaters.
     * @param  bool|null $disable_edit_message Pass <em>True</em> if the game message should not be
     * automatically edited to include the current scoreboard
     * @param  int|null $chat_id Required if <em>inline_message_id</em> is not specified. Unique identifier
     * for the target chat.
     * @param  int|null $message_id Required if <em>inline_message_id</em> is not specified. Identifier of
     * the sent message.
     * @param  string|null $inline_message_id Required if <em>chat_id</em> and <em>message_id</em> are not
     * specified. Identifier of the inline message.
     *
     * @return Message|bool
     */
    public function setGameScore(
        int $user_id,
        int $score,
        ?bool $force = null,
        ?bool $disable_edit_message = null,
        ?int $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
    ): Message|bool;

    /**
     * Use this method to get data for high score tables. Will return the score of the specified user and
     * several of their neighbors in a game. Returns an Array of
     * <a href="https://core.telegram.org/bots/api#gamehighscore">GameHighScore</a> objects.
     * This method will currently return scores for the target user, plus two of their closest neighbors on
     * each side. Will also return the top three users if the user and their neighbors are not among them.
     * Please note that this behavior is subject to change.
     *
     * @param  int $user_id Target user id
     * @param  int|null $chat_id Required if <em>inline_message_id</em> is not specified. Unique identifier
     * for the target chat.
     * @param  int|null $message_id Required if <em>inline_message_id</em> is not specified. Identifier of
     * the sent message.
     * @param  string|null $inline_message_id Required if <em>chat_id</em> and <em>message_id</em> are not
     * specified. Identifier of the inline message.
     *
     * @return GameHighScore[]
     */
    public function getGameHighScores(
        int $user_id,
        ?int $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
    ): array;
}
