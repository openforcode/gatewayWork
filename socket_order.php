<?php
//加载GatewayClient。关于GatewayClient参见本页面底部介绍
require_once 'GatewayClient/Gateway.php';
use GatewayClient\Gateway;

// 设置GatewayWorker服务的Register服务ip和端口，请根据实际情况改成实际值(ip不能是0.0.0.0)
Gateway::$registerAddress = '127.0.0.1:1238';
$order_no = '180404204703225594334028';
$message = json_encode(array('order_no' => $order_no, 'status' => 2));
// 向网站页面发送数据
$res = Gateway::sendToAll($message);


