<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace MikeRow\NanoPHP\NanoAPI;

class BlockSubType
{
    const invalid = 0;
    const receive = 1;
    const send = 2;
    const change = 3;
    const epoch = 4;

    private static $names = array(
        BlockSubType::invalid=>"invalid",
        BlockSubType::receive=>"receive",
        BlockSubType::send=>"send",
        BlockSubType::change=>"change",
        BlockSubType::epoch=>"epoch",
    );

    public static function Name($e)
    {
        if (!isset(self::$names[$e])) {
            throw new \Exception();
        }
        return self::$names[$e];
    }
}
