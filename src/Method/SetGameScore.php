<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

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
class SetGameScore extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  int  User identifier */
        public int $user_id,
        /** @var  int  New score, must be non-negative */
        public int $score,
        /**
         * @var  bool|null  Pass <em>True</em> if the high score is allowed to decrease. This can be useful
         * when fixing mistakes or banning cheaters.
         */
        public ?bool $force,
        /**
         * @var  bool|null  Pass <em>True</em> if the game message should not be automatically edited to
         * include the current scoreboard
         */
        public ?bool $disable_edit_message,
        /**
         * @var  int|null  Required if <em>inline_message_id</em> is not specified. Unique identifier for the
         * target chat.
         */
        public ?int $chat_id,
        /**
         * @var  int|null  Required if <em>inline_message_id</em> is not specified. Identifier of the sent
         * message.
         */
        public ?int $message_id,
        /**
         * @var  string|null  Required if <em>chat_id</em> and <em>message_id</em> are not specified.
         * Identifier of the inline message.
         */
        public ?string $inline_message_id,
    ) {
    }
}
