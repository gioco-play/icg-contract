<?php
declare(strict_types=1);
namespace GiocoPlus\ICG\Contract;
/**
 * ICG Gaming
 */
interface ICGServiceInterface {

    /**
     * 遊戲啟動
     *
     * @param string $op_code
     * @param string $account
     * @param string $game_code
     * @param string $language
     * @return void
     */
    function gameLaunch(string $op_code, string $account, string $game_code, string $language);

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $account
     * @param string $bet_id
     * @return mixed
     */
    function gameDetail(string $op_code, string $account, string $bet_id);

    /**
     * 抓取遊戲紀錄
     *
     * @param string $op_code
     * @param integer $past_minutes
     * @return mixed
     */
    function betLogGrabber(string $op_code, int $past_minutes);
}

