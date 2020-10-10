<?php
namespace EasySwoole\RpcClient;

interface ProtocolInterface
{
    public static function pack();

    public static function unpack();

    public static function packLength();
}