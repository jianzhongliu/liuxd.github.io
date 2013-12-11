1. 下载：

```
http://www.mongodb.org/ mongodb-linux-x86_64-2.2.0.tgz 
```

2. 解压：

```
tar zxvf mongodb-linux-x86_64-2.2.0.tgz 
```

3. 设置数据目录,日志文件：

```
mkdir -p /data/mongodb/db
cd /data/mongodb/
touch log
```

4. 启动服务：

```
./mongod --dbpath=/data/mongodb/db --port 27017 --logpath /data/mongodb/log --logappend --fork
```

5. 测试：

```
./mongo
```
