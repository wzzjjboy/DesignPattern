<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/2 10:34
 */

namespace designPattern\adapter;


interface MediaPlayer
{
    /**
     * @param string $audioType
     * @param string $fileName
     * @return void
     */
    public function play($audioType, $fileName);
}