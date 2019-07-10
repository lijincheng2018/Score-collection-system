<?php
require_once 'QQmail.php';

// 实例化 QQMailer
$mailer = new QQMailer(true);
// 添加附件
$mailer->addFile('icon.png');
// 邮件标题
$title = 'test';
// 邮件内容
$content = <<< EOF
<p align="center">
皑如山上雪，皎若云间月。<br>
闻君有两意，故来相决绝。<br>
今日斗酒会，明旦沟水头。<br>
躞蹀御沟上，沟水东西流。<br>
凄凄复凄凄，嫁娶不须啼。<br>
愿得一人心，白首不相离。<br>
竹竿何袅袅，鱼尾何簁簁！<br>
男儿重意气，何用钱刀为！</p>
EOF;
// 发送QQ邮件
$mailer->send('root@ljcljc.cn', $title, $content);
?>