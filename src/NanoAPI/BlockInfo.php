<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace MikeRow\NanoPHP\NanoAPI;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class BlockInfo extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return BlockInfo
     */
    public static function getRootAsBlockInfo(ByteBuffer $bb)
    {
        $obj = new BlockInfo();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return BlockInfo
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    /**
     * @return byte
     */
    public function getBlockType()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getByte($o + $this->bb_pos) : \nanoapi\Block::NONE;
    }

    /**
     * @returnint
     */
    public function getBlock($obj)
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__union($obj, $o) : null;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startBlockInfo(FlatBufferBuilder $builder)
    {
        $builder->StartObject(2);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return BlockInfo
     */
    public static function createBlockInfo(FlatBufferBuilder $builder, $block_type, $block)
    {
        $builder->startObject(2);
        self::addBlockType($builder, $block_type);
        self::addBlock($builder, $block);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param byte
     * @return void
     */
    public static function addBlockType(FlatBufferBuilder $builder, $blockType)
    {
        $builder->addByteX(0, $blockType, 0);
    }

    public static function addBlock(FlatBufferBuilder $builder, $offset)
    {
        $builder->addOffsetX(1, $offset, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endBlockInfo(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}
