<?php
function debug($params)
{
    echo "<pre>";
    print_r($params);
    die;
}

function readFiles($fileName)
{
    $contents = [];
    if ($fileName) {
        $file = fopen($fileName, 'r');
        if ($file) {
            while ($line = fgets($file)) {
                $contents[] = trim($line);
            }

            $arrQuestionAndAnswer = [];

            for ($i = 0; $i < count($contents); $i++) {
                if ($i % 2 === 0) {
                    $question = $contents[$i];
                    $answerAndCorrectA = isset($contents[$i + 1]) ? $contents[$i + 1] : null;  

                    $answers = explode(";", $answerAndCorrectA);
                    $correctAnswer = null;
                    $arrQuestionAndAnswer[] = [
                        'question' => $question,
                        'answers' => $answers,
                        'correct_answer' => $correctAnswer
                    ];
                }
            }

            debug($arrQuestionAndAnswer);
        }
        fclose($file);
    } else {
        echo "File name is not valid!!!";
    }
}

$fileName = 'quizz.txt';
readFiles($fileName);
