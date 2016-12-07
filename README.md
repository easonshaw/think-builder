# think-builder
[![Latest Stable Version](https://poser.pugx.org/goldeagle/think-builder/version)](https://packagist.org/packages/goldeagle/think-builder)
[![Latest Unstable Version](https://poser.pugx.org/goldeagle/think-builder/v/unstable)](//packagist.org/packages/goldeagle/think-builder)
[![License](https://poser.pugx.org/goldeagle/think-builder/license)](https://packagist.org/packages/goldeagle/think-builder)

a cli tool to build applications for thinkphp v5，
通过定义数据对象的结构，自动生成相关的CRUD代码。

## 1. 功能
* 从 github 获取并创建默认的目录结构
* 自动生成控制器程序以及CRUD方法
* 自动生成模型程序以及关联模型
* 自动生成后台校验器程序以及校验规则表
* 自动生成CRUD的视图界面
* 自动生成SQL数据库表结构
* 自动生成权限树 (TODO)
* 自动生成 RBAC 数据（TODO）
* 自动生成 nginx vhost 配置文件
* 自动生成 .htaccess 配置文件
* 完备的文档（TODO）

## 2. 使用方法
1. 定义 project 目录下面的项目文件。
2. 获取 commando：`composer update`，在 v1.2.0 以后的版本，这一步自动完成
3. linux 下面执行 `./build` ；windows 下执行 `./build.bat`

>命令样例（linux）：

`#./build -c config.php -d ./sample/forge.php -t ./tmp -r top-think/think`

## 3. 文档
* [运行环境与安装](./doc/env_req.md)
* [命令行参数参考](./doc/build_cmd.md)
* [数据定义文件编写规则（编写中）](./doc/data.md)

## 4. 交流方式
QQ 群：348077414