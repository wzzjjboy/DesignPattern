<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/2 10:35
 */

namespace designPattern\adapter;


interface AdvancedMediaPlayer
{
    /**
     * @param string $fileName
     * @return void
     */
    public function playVlc($fileName);

    /**
     * @param string$fileName
     * @return void
     */
    public function playMp4($fileName);
}