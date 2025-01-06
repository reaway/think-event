# think-event

## 安装
```bash
composer require reaway/think-event
```

## 用法
```php
use Think\Component\Event\Facade\Event;

require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

// 你可以手动注册一个事件监听
Event::listen('UserLogin', function($user) {
    // 
});

// 触发UserLogin事件 用于执行用户登录后的一系列操作
Event::trigger('UserLogin');
```

## 文档

详细参考 [事件处理](https://www.kancloud.cn/manual/thinkphp6_0/1037492)