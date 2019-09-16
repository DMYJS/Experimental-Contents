<?php
// 贪婪匹配
preg_match('/p.*h/', 'phphphph', $matches);
print_r($matches);      // 输出结果：Array ( [0] => phphphph )
// 懒惰匹配
preg_match('/p.*?h/', 'phphphph', $matches);
print_r($matches);      // 输出结果：Array ( [0] => ph )