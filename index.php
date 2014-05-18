<?php

require_once('Words.php');

//require_once('dbconfig.php');

?>
    <!doctype html>
    <HTML>
    <HEAD>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="css/vocabulary_notebook.css">
        <script src="js/jquery-1.11.1.min.js"></script>
        <script>
            $(function () {
//                setTimeout(function () {
//                    location.reload();
//                }, 5000);
            });
        </script>
    </HEAD>

    <BODY>

    <div class="">
        <div class="title">Vocabulary notebook</div>

        <div>
            <table border="1" class="vocabulary-table">



                <tr>
                    <th>word in english</th>
                    <th>word in french</th>
                    <th>word in chinese</th>
                    <th>learned</th>
                </tr>

                <?php
                $words = new Words();
                $words->toHTML();
                ?>

                <tr id="tr1">
                    <td>
                        hello
                    </td>
                    <td>
                        bonjour
                    </td>
                    <td>
                        你好
                    </td>
                    <td>
                        <button type="button" class="valid_button">Accept</button>
                    </td>
                </tr>

                <tr id="tr2">
                    <td>
                        computer
                    </td>
                    <td>
                        ordinateur
                    </td>
                    <td>
                        电脑
                    </td>
                    <td>
                        <button type="button" class="valid_button">Accept</button>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="new-word-en"></label>
                        <input id="new-word-en" type="text" size="20">
                    </td>
                    <td>
                        <label for="new-word-fr"></label>
                        <input id="new-word-fr" type="text" size="20">
                    </td>
                    <td>
                        <label for="new-word-cn"></label>
                        <input id="new-word-cn" type="text" size="20">
                    </td>
                    <td>
                        <button type="button" id="button-add" class="add_button">Add</button>
                    </td>
                </tr>

            </table>
        </div>


        <div class="div-controls">
            <button type="button" onclick="delete_all();" class="delete_all_button">delete all</button>
        </div>
    </div>
    <script>
        $(function () {

            $("#button-add").prop("disabled", true);

            $("#new-word-en").change(function () {
                $("#button-add").prop("disabled", isInputValid() ? false : true);
            });
            $("#new-word-fr").change(function () {
                $("#button-add").prop("disabled", isInputValid() ? false : true);
            });
            $("#new-word-cn").change(function () {
                $("#button-add").prop("disabled", isInputValid() ? false : true);
            });
        });

        function isInputValid() {
            return !(
                isWordEmpty($("#new-word-en").val())
                    &&
                    isWordEmpty($("#new-word-fr").val())
                    &&
                    isWordEmpty($("#new-word-cn").val())
                );
        }

        function isWordEmpty(word) {
            return $.trim(word).length == 0;
        }

    </script>

    </BODY>
    </HTML>
