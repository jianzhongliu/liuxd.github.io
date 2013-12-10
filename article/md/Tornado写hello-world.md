##安装
```
easy_install tornado
```

##编写
创建文件`server.py`，内容如下：
```
#!/usr/bin/env python
#! coding: utf-8
#filename: server.py
 
import tornado.httpserver
import tornado.ioloop
import tornado.web
 
class Hello(tornado.web.RequestHandler):
    def get(self):
        self.write("hello world")
 
app = tornado.web.Application([
    (r"/", Hello),
    (r"/static/(.*)", tornado.web.StaticFileHandler, {"path":"html/static"})
])
 
if __name__ == '__main__':
    http_server = tornado.httpserver.HTTPServer(app)
    http_server.listen(8888)
    tornado.ioloop.IOLoop.instance().start()
```

##运行
```
python server.py
```

##访问
[http://localhost:8888](http://localhost:8888)
