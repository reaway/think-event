<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2021 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
declare (strict_types = 1);

namespace Think\Component\Event\Facade;

use Think\Component\Facade\Facade;

/**
 * @see \Think\Component\Event\Event
 * @package Think\Component\Event\Facade
 * @mixin \Think\Component\Event\Event
 * @method static \Think\Component\Event\Event listenEvents(array $events) 批量注册事件监听
 * @method static \Think\Component\Event\Event listen(string $event, mixed $listener, bool $first = false) 注册事件监听
 * @method static bool hasListener(string $event) 是否存在事件监听
 * @method static void remove(string $event) 移除事件监听
 * @method static \Think\Component\Event\Event bind(array $events) 指定事件别名标识 便于调用
 * @method static \Think\Component\Event\Event subscribe(mixed $subscriber) 注册事件订阅者
 * @method static \Think\Component\Event\Event observe(string|object $observer, null|string $prefix = '') 自动注册事件观察者
 * @method static mixed trigger(string|object $event, mixed $params = null, bool $once = false) 触发事件
 * @method static mixed until($event, $params = null) 触发事件(只获取一个有效返回值)
 */
class Event extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'Think\Component\Event\Event';
    }
}
