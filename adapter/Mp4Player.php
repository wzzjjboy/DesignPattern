<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/2 10:37
 */

namespace designPattern\adapter;


class Mp4Player implements AdvancedMediaPlayer
{

    public function playVlc($fileName)
    {
        // TODO: Implement playVlc() method.
    }

    public function playMp4($fileName)
    {
        println("Playing mp4 file. Name: " . $fileName);
    }
}