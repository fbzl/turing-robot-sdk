# Turing Robot SDK

A PHP SDK for [图灵机器人](www.tuling123.com)



## 依赖

```
PHP >= 5.5
guzzle ~6.0
```

## 安装依赖

```
composer install
```

## 样例

```
require 'vendor/autoload.php';
require 'turingRobot.class.php';

$test = new TuringRobot('你的 API Key','你的 secret');

echo $test->say('你好');
```

## API文档

http://www.tuling123.com/help/h_cent_webapi

新接口文档

https://www.kancloud.cn/turing/web_api/522992



