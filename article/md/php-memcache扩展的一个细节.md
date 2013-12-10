关于add方法，手册说明：

Memcache::add()

expire

    Expiration time of the item. If it's equal to zero, the item will never expire. You can also use Unix timestamp or a number of seconds starting from current time, but in the latter case the number of seconds may not exceed 2592000 (30 days).

过期时间最多只能设为30天，如果超过这个限制，memcached将不会缓存，但是函数仍然会返回true。

测试版本：2.2.7
