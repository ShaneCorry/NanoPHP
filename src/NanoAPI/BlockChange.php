<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace MikeRow\NanoPHP\NanoAPI;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class BlockChange extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return BlockChange
     */
    public static function getRootAsBlockChange(ByteBuffer $bb)
    {
        $obj = new BlockChange();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return BlockChange
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    public function getHash()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getPrevious()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getRepresentative()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getSignature()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getWork()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startBlockChange(FlatBufferBuilder $builder)
    {
        $builder->StartObject(5);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return BlockChange
     */
    public static function createBlockChange(FlatBufferBuilder $builder, $hash, $previous, $representative, $signature, $work)
    {
        $builder->startObject(5);
        self::addHash($builder, $hash);
        self::addPrevious($builder, $previous);
        self::addRepresentative($builder, $representative);
        self::addSignature($builder, $signature);
        self::addWork($builder, $work);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addHash(FlatBufferBuilder $builder, $hash)
    {
        $builder->addOffsetX(0, $hash, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addPrevious(FlatBufferBuilder $builder, $previous)
    {
        $builder->addOffsetX(1, $previous, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addRepresentative(FlatBufferBuilder $builder, $representative)
    {
        $builder->addOffsetX(2, $representative, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addSignature(FlatBufferBuilder $builder, $signature)
    {
        $builder->addOffsetX(3, $signature, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addWork(FlatBufferBuilder $builder, $work)
    {
        $builder->addOffsetX(4, $work, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endBlockChange(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}
