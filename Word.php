<?php

/**
 * Created by PhpStorm.
 * User: qikai
 * Date: 14-5-18
 * Time: 18:10
 */

class Word
{

    private $wordEn;
    private $wordFr;
    private $wordCn;

    function __construct($wordInEn = null, $wordInFr = null, $wordInCn = null)
    {
        $this->wordEn = $wordInEn;
        $this->wordFr = $wordInFr;
        $this->wordCn = $wordInCn;
    }

    /**
     * @param null $wordCn
     */
    public function setWordCn($wordCn)
    {
        $this->wordCn = $wordCn;
    }

    /**
     * @return null
     */
    public function getWordCn()
    {
        return $this->wordCn;
    }

    /**
     * @param null $wordEn
     */
    public function setWordEn($wordEn)
    {
        $this->wordEn = $wordEn;
    }

    /**
     * @return null
     */
    public function getWordEn()
    {
        return $this->wordEn;
    }

    /**
     * @param null $wordFr
     */
    public function setWordFr($wordFr)
    {
        $this->wordFr = $wordFr;
    }

    /**
     * @return null
     */
    public function getWordFr()
    {
        return $this->wordFr;
    }


}