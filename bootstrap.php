<?php
/**
 * Created by PhpStorm.
 * User: EUGENE
 * Date: 11/24/2020
 * Time: 12:13 AM
 */
include_once 'router.php';
include_once './view/check_user.php';
//switch content
include_once ('./tpl/Content.php');
$content = new \tpl\Content();
$content->set('{page_title}','TestTaskforYalantisShool');
$content->set('{page_text}','TestTaskforYalantisShool Release V2.0');

//$content->out_content('./tpl/shablon.tpl');
$content->out_content('./tpl/main.tpl');
