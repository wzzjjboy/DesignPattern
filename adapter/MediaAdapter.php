<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/2 10:42
 */

namespace designPattern\adapter;


class MediaAdapter implements MediaPlayer
{
    /**
     * @var AdvancedMediaPlayer
     */
    private $advancedMusicPlayer;

    public function __construct($audioType)
    {
        if($audioType == 'vlc'){
            $this->advancedMusicPlayer = new VlcPlayer();
        }else{
            $this->advancedMusicPlayer = new Mp4Player();
        }
    }


    public function play($audioType, $fileName)
    {
        if($audioType == 'vlc'){
            $this->advancedMusicPlayer->playVlc($fileName);
        }else{
            $this->advancedMusicPlayer->playMp4($fileName);
        }
    }
}