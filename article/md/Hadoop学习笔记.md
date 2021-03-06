Hadoop学习笔记
==============

## 安装 ##

### 三种模式 ###

    本地，伪分布，分布式 

### 伪分布安装 ###

#### 安装hadoop ####
    
    wget -c http://mirrors.tuna.tsinghua.edu.cn/apache/hadoop/common/hadoop-1.0.4/hadoop-1.0.4.tar.gz
    tar zxvf ./hadoop-1.0.4.tar.gz

#### 配置ssh ####
    
    ssh-keygen -t rsa -P '' -f ~/.ssh/id_rsa
    cat ~/.ssh/id_rsa.pub >> ~/.ssh/authorized_keys

确保可以ssh连接到本机

    ssh localhost

#### 格式化HDFS ####

    #确保JAVA_HOME变量指向java路径。
    cd $hadoop_path/bin/
    ./hadoop namenode -format

#### 启动进程 ####

    start-dfs.sh
    start-mapred.sh

## 配置 ##

### 文件 ###
    
    core-site.xml
    hdfs-site.xml
    mapred-site.xml

### 路径 ###

* 默认：$hadoop_path/conf
* 指定：start-dfs.sh等脚本加上-config参数

## 监控 ##
    
    hdfs http://localhost:50070/
    jobstracker http://localhost:50030/

## MapReduce ##

* 必须实现两个环节：map(拆分原始数据)，reduce(加工map传过来的数据)。
* 多语言支持：通过Unix标准输入输出来传递数据。

## HDFS ##

### 特点 ###

* 专为大文件设计。
* 数据流一次写，多次读。
* 硬件要求低。

### 不适合 ###

* 低延迟的数据访问。
* 很多小文件。
* 多个写入者。

### 概念 ###

* HDFS的block默认是64M。
* 两种节点：namenode，datanode。
* namenode与datanode是master-worker的关系。
* namenode包含两类文件：镜像、编辑日志。
* namenode的高可用手段：备份元数据文件、设置辅助namenode。
