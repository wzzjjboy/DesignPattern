<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/2 10:38
 */

namespace designPattern\adapter;


class AudioPlayer implements MediaPlayer
{
    /**
     * @var MediaPlayer
     */
    private $mediaAdapter;

    public function play($audioType, $fileName)
    {
        if($audioType == 'mp3'){
            println("Playing mp3 file. Name: " . $fileName);
        }elseif ($audioType == 'vlc' || $audioType == 'mp4'){
            $this->mediaAdapter = new MediaAdapter($audioType);
            $this->mediaAdapter->play($audioType, $fileName);
        }else{
            println("Invalid media. " . $audioType . " format not supported");
        }
    }
}