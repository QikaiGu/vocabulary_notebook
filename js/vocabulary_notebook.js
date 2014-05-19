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

function setWordLearned() {

}

function setWordAbandoned() {

}