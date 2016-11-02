<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/2 10:36
 */

namespace designPattern\adapter;


class VlcPlayer implements AdvancedMediaPlayer
{

    public function playVlc($fileName)
    {
        println("Playing vlc file. Name: " . $fileName);
    }

    public function playMp4($fileName)
    {
        // TODO: Implement playVlc() method.
    }
}