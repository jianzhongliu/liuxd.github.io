### 错误提示：

    svn: Working copy 'xxxxx' locked
    svn: run 'svn cleanup' to remove locks (type 'svn help cleanup' for details)


### 解决办法：

    1. del lock /q/s
    2. svn cleanup
    3. find . -name 'lock' -exec rm -v {} \;
