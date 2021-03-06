<?php
namespace ppphp\comp\event;

/**
 * 事件监听器接口
 *
 * @package ppphp
 */
interface eventListenerInterface
{
    //处理事件逻辑
    public function handle(eventInterface $event);
}