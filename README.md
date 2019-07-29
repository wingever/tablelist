# tablelist
基于easyui datagrid 使用php实现mysql数据库增删改

1. conn.php文件为数据库连接文件

        `$mysql_conf = array(
        'host'    =>'127.0.0.1:3306',
        'db'      =>'fxy',
        'db_user'=>'root',
        'db_pwd' =>'370421',
    );`
    
    修改主机地址，数据库，用户名和密码为自己的数据库用户及密码
2. 每一个php查询中的sql语句也需要修改为自己的表，和自己的字段，这里给出我建表的字段等。

        `DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;`

第一列id设为递增，不能为主键，可以为空，因为插入时没有这个字段。
3.  双击可以修改表格，插入后必须点击save，选中行点击destroy可以删除

