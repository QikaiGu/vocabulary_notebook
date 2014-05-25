/**
 * Created by qikai on 14-5-20.
 */

function newLine() {

}

/**
 *
 * @param wordEn
 * @param wordFr
 * @param wordCn
 */
function addWord(wordEn, wordFr, wordCn) {
    $.ajax({
        type: 'POST',
        url: 'ajaxRequest.php',
        dataType: 'html',
        data: {
            event: "add_word",
            word_en: wordEn,
            word_fr: wordFr,
            word_cn: wordCn
        },
        success: function(data) {
            console.log("success: " + data);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log("error");
        }
    });
}

/**
 *
 * @param wordId
 */
function setWordLearned(wordId) {
    $.ajax({
        type: 'POST',
        url: 'ajaxRequest.php',
        dateType: 'html',
        data: {
            event: "word_learned",
            word_id: wordId
        },
        success: function(data) {
            console.log("success: " + data);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log("error");
        }
    });
}

/**
 *
 * @param wordId
 */
function setWordAbandoned(wordId) {
    $.ajax({
        type: 'POST',
        url: 'ajaxRequest.php',
        dateType: 'html',
        data: {
            event: "word_abandoned",
            word_id: wordId
        },
        success: function(data) {
            console.log("success: " + data);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log("error");
        }
    });
}