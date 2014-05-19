<?php
/**
 * Created by PhpStorm.
 * User: qikai
 * Date: 14-5-19
 * Time: 23:38
 */

require_once('localdbconfig.php');
//require_once('dbconfig.php');

switch($_POST['event']) {
    case "add_word":
        $wordEn = $_POST['word_en'];
        $wordFr = $_POST['word_fr'];
        $wordCn = $_POST['word_cn'];
        $sql = 'INSERT INTO vocabulary_notebook (word_en, word_fr, word_cn) ' .
            'VALUES ("'. $wordEn . '", "' . $wordFr . '", "' . $wordCn . '")';
        $result = mysql_query($sql) or die("Erreur SQL : $sql<br/>".mysql_error());
        break;

    case "word_learned":
        $wordId = $_POST['word_id'];
        $sql = "UPDATE vocabulary_notebook SET status=1 WHERE id=$wordId";
        $result = mysql_query($sql) or die("Erreur SQL : $sql<br/>".mysql_error());
        break;

    case "word_abandoned":
        $wordId = $_POST['word_id'];
        $sql = "UPDATE vocabulary_notebook SET status=2 WHERE id=$wordId";
        $result = mysql_query($sql) or die("Erreur SQL : $sql<br/>".mysql_error());
        break;

}