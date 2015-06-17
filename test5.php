<?php
   //连接本地的 Redis 服务
   $redis = new Redis();
   $redis->connect('127.0.0.1', 9000);
   echo "Connection to server sucessfully";
   //设置 redis 字符串数据
   $redis->set("tutorial-name", "Redis tutorial");
   // 获取存储的数据并输出
   echo "Stored string in redis:: " + jedis.get("tutorial-name");
?>