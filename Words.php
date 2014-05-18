<?php

class Words
{
    /**
     * @var Word[]
     */
    private $words;

    public function __construct()
    {
        $this->words = array();
        $this->getWordsFromDB();
    }

    public function addWord($word)
    {
        array_push($this->words, $word);
    }

    public function getWord($i)
    {
        return $this->words[$i];
    }

    /**
     * @return Word[]
     */
    public function getWords()
    {
        return $this->words;
    }

    function addWordToDB()
    {

    }

    private function getWordsFromDB()
    {
        $sql = 'SELECT word_en, word_fr, word_cn
                FROM vocabulary_notebook
                WHERE status = 0
                ORDER BY created_at DESC';
        $result = mysql_query($sql) or die("Erreur SQL : $sql<br/>" . mysql_error());

        while ($row = mysql_fetch_array($result)) {
            $word = new Word($row['word_en'], $row['word_fr'], $row['word_cn']);
            $this->addWord($word);
        }
    }

    public function toHTML()
    {
        $html = '';

        for ($i = 0; $i < count($this->words); $i++) {
            $wordLine = "";
            $word = $this->getWord($i);
            $wordEn = $word->getWordEn();
            $wordFr = $word->getWordFr();
            $wordCn = $word->getWordCn();

            $wordLine .= "<tr id='tr$i'>\n" .
                "<td>$wordEn</td>\n" .
                "<td>$wordFr</td>\n" .
                "<td>$wordCn</td>\n" .
                "<td><button type='button' class='valid_button'>Accept</button></td>\n" .
                "</tr>\n";

            $html .= $wordLine;
        }

        return $html;
    }

} 