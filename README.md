检索自己写的scrapy爬虫爬取的数据

-----------

demo 地址 [http://bens.cow66.cn](http://bens.cow66.cn)

-----------

## 中文检索

采用 [xunsearch](http://www.xunsearch.com/)来进行中文检索功能。

Xunsearch 是一个高性能、全功能的全文检索解决方案。

Xunsearch 旨在帮助一般开发者针对既有的海量数据，快速而方便地建立自己的全文搜索引擎

## PHP采用CI框架

## xunsearch安装

在ubuntu14.04下安装：

```shell
 
 sudo apt install make

 sudo apt install gcc 
 
 sudo apt install g++ 

 sudo apt install zlib1g-dev

 sudo wget http://www.xunsearch.com/download/xunsearch-full-latest.tar.bz2

 tar -xjf xunsearch-full-latest.tar.bz2

 sh setup.sh
```

## PHP SDK
php SDK已经放在了 application/php 下。使用教程参考的 [xunsearch官方文档](http://www.xunsearch.com/doc/php)