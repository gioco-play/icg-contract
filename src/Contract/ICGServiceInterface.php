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
     * @param string $vendor_code
     * @param string|null $back_url
     * @return mixed
     */
    function gameLaunch(string $op_code, string $account, string $game_code, string $language, string $vendor_code, string $back_url = null);

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $account
     * @param string $bet_id
     * @param string $vendor_code
     * @return mixed
     */
    function gameDetail(string $op_code, string $account, string $bet_id, string $vendor_code);

    /**
     * 抓取遊戲紀錄
     *
     * @param string $op_code
     * @param integer $past_minutes
     * @param string $cache_key
     * @param string $vendor_code
     * @return mixed
     */
    function betLogGrabber(string $op_code, int $past_minutes, string $cache_key, string $vendor_code);

    /**
     * 全營商 抓取遊戲紀錄
     *
     * @param integer $past_minutes
     * @param string $vendor_code
     * @return mixed
     */
    function betLogGrabberAll(int $past_minutes, string $vendor_code);
}

