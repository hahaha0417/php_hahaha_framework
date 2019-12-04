<?php

/*
// --------------------------------------------------------------------------
Hahaha - A PHP Framework
// --------------------------------------------------------------------------
@name       PHP Hahaha Framework
@package    Hahaha
@author     Hahaha(Chen Jie Qi) 
@email      hahaha0417@hotmail.com
@phone      0916353255
@date       2019 / 10 / 20
// --------------------------------------------------------------------------
*/

/*
// --------------------------------------------------------------------------
Application
// --------------------------------------------------------------------------
主流程
// --------------------------------------------------------------------------
*/
require __DIR__ . '/../framework/hahaha/function/hahaha_function_application.php';
\ha\Application(
    // -- 根目錄 --
    realpath(__DIR__ . '/..'),
    // -- 應用程式 --
    function(){
        // --------------------------------------------------------------------------
        // -- 入口 --
        // --------------------------------------------------------------------------
        \hahaha\hahaha_application::Instance()->Run();
        // --------------------------------------------------------------------------
    },
    // -- 設定 --
    [
        'application' => true,
        'monitor' => true,
    ]
);
// --------------------------------------------------------------------------

/*
// --------------------------------------------------------------------------
效能問題
// --------------------------------------------------------------------------
由於Composer class map太多還是會影響效能(假設要超級快)
所以內層假設有效能需求的，未來可以用我的php_autoloader_classmap.exe(還沒做)
只產生要用到部分的Autoloader，速度在1ms的時候class map的影響是有感的
*/

/*
// --------------------------------------------------------------------------
jQuery問題
// --------------------------------------------------------------------------
jquery使用模組做好了，但是jQuery管理器還沒做，目前只能先手動建立引用項目對應
*/

/*
// --------------------------------------------------------------------------
有空無聊再搞，一個項目大約要做1個禮拜(核心部分)
// --------------------------------------------------------------------------
有高效能需求再做command & schedule(這兩個不一樣)，類似hahaha_route節點展開，可參數化command，以增加執行速度
但是基本上，command & schedule他不需要那麼高的效能，一般情況不需要高併發量，其實自己弄個列表簡單比對command或手刻簡易command架構即可
大概狀況是找到command，在裡面寫一段要執行的程式(程式當然也可以是其他command的結合(hahaha_command_a::Instance()->Run()))))
php ./command test.command1 a b c d
php ./schedule test.schedule1 a b c d
php ./command test.command1 a:a1:a2 b:b1:b2 c d
// --------------------------------------------------------------------------
service同上，只是他會在while loop裡面，中止條件可以是查看某個檔案或是DB flag或是loop時當flag = false時跳出迴圈
php ./service test.command1 a b c d
php ./service reset.flag1
// --------------------------------------------------------------------------
 -- 注意 --
// --------------------------------------------------------------------------
由於我沒有要打大型框架，因此假設上面的參數要做global(ex. -help)))，則請自己複製後修改，或者是我挖callback自己填規則
我沒有打算在php深耕，並且我覺得假設加入一堆-help，-n...etc，那太雜了，有人會沒事呼叫一個php檔，處理command並帶一堆其他的global設定參數嗎，不會太累嗎，不如直接寫個設定檔使用，不是更好嗎(ex system_setting.php)
// --------------------------------------------------------------------------
我的邏輯很簡單 : 
我可以一次處理，為什麼要兩段式
我有視窗可以點，為什麼要走console
所以
win form > web from > console > php 二段式 console > php console > other
// --------------------------------------------------------------------------
*/


