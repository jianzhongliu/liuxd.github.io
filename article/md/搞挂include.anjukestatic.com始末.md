### 逻辑
+ 原来安居客的线上服务器分组：city(eg:shanghai.anjuke.com)和my(my.anjuke.com)。对应同一套代码(v2-sie)。品牌合并后，改为city服务器使用原v2-site代码，my服务器使用从v2-site fork出来的anjuke-broker。两边分别独立发布上线，这意味着两边服务器的版本可能不一致。（eg：v2-site版本发到了2013_27_02，但是anjuke-broker版本才发到2013_27_01）。
+ include域名请求响应流程：req -> cdn -> squid -> LB -> redis -> app
+ 请求分压缩与未压缩两种。
+ 未压缩请求带版本号，如：20132703。响应时先去redis查看是否有对应的hash缓存。如果没有则触发url2hash()方法：根据文件内容md5获得hash码，生成url_requrl => hash，同时更新hash => url。
+ 已压缩的从redis里取对应hash所对应的版本下的url。
+ include域名入口文件res.php有这个逻辑：解析版本号，如果没有对应版本的代码，则返回404。
+ 以上逻辑导致一种问题：如果某文件被两边同时引用，且两边版本不一致，且文件没改动，且文件hash码映射到较高的版本（另一个库里没有这个版本），则会导致版本较低的代码库对应服务器访问这个文件时因为没有这个版本的代码而返回404。

### 解决
+ 新起一个redis。
+ my机器redis配置修改为新的redis。
+ my机器res.php内的redis指向新的redis。
+ include的LB指向my机器。
