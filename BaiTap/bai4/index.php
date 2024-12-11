<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <?php
        function debug($params)
        {
            echo "<pre>";
            var_dump($params);
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

                            foreach ($answers as $answer) {

                                if (strpos($answer, ' Đáp Án Đúng : ') === 0) {
                                    $correctAnswer = trim(substr($answer, strlen('Đáp Án Đúng : ')));
                                    array_pop($answers);
                                    break;
                                }
                            }
                            $arrQuestionAndAnswer[] = [
                                'question' => $question,
                                'answers' => $answers,
                                'correct_answer' => $correctAnswer
                            ];
                        }
                    }
                }
                fclose($file);

                return $arrQuestionAndAnswer;
            } else {
                echo "File name is not valid!!!";
            }
        }
        ?>
        <h1>QUIZZ</h1>
        <form action="" method="POST">
            <h2>Question</h2>
            <?php
            $questionAndAnswers = readFiles('quizz.txt');
            $name = 0;

            foreach ($questionAndAnswers as $value) { ?>
                <p><?= $value['question'] ?></p>
                <ul>
                    <?php
                    foreach ($value['answers'] as $key => $answer) { ?>
                        <li>
                            <input type="radio" id="question_<?= $name ?>_<?= $key ?>" name="answer_<?= $name ?>" value="<?= $answer ?>" class="form-radio">
                            <label for="question_<?= $name ?>_<?= $key ?>" class="form-radio"><?= $answer ?></label>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
                <input type="hidden" name="correct_answer_<?= $name ?>" value="<?= $value['correct_answer'] ?>">
            <?php
                $name++;
            }
            ?>
            <input type="submit" value="submit">
        </form>

    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>