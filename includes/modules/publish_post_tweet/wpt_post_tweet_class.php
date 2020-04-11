<?php

if( !class_exists('WPTPostTweet') ) {
    
    class WPTPostTweet 
    {

        public static function init() 
        {
            $this->tweetOnNewPost();
        }

        private function tweetOnNewPost()
        {

            echo 1;
            
        }

    }

}