<?php
require_once "./exercise_i/Car.php";
require_once "./exercise_ii/Car.php";
require_once "./exercise_iii/Ford.php";
require_once "./exercise_iv/CircleArea.php";
require_once "./exercise_v/Fruit.php";
require_once "./util/Webie.php";
util\Webie::$IS_WEB = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="rez/css/global.css" />
    <link rel="stylesheet" text="text/css" href="lib/prism/prism.css" />
    <title>ict726_tutorial7</title>
</head>

<body>
    <section id="SECTION_EXERCISES">
        <div id="EXERCISE_I" class="exercise i">
            <div class="content">
                <h1>
                    Exercise I
                </h1>
                <h3 class="quest question">
                    &bull; (class: Car) + (properties: name & year) + (setters & getters)
                </h3>
                <p class="quest answer">
                    <span id="ELEMENT_ANSWER_INDICATOR" class="anwser indicator"></span>
                    <span id="ELEMENT_ANSWER_THE_ANSWERS" class="answer theAnswer">
                        <?php
                        $ford = new exercise_i\Car();
                        $ford->set_name("Ford");
                        $ford->set_year(2021);
                        \printf($ford); //REM: echo $ford->__toString();
                        ?>
                    </span>
                </p>
                <pre class="answerContent" solution-file-path="exercise_i/Car.php">
                    <code></code>
                </pre>
            </div>
        </div>
        <div id="EXERCISE_II" class="exercise ii">
            <div class="content">
                <h1>
                    Exercise II
                </h1>
                <h3 class="quest question">
                    &bull; (class: Car) + (properties: name & year) + (setters & getters) + (constructor & destructor)
                </h3>
                <p class="quest answer">
                    <span id="ELEMENT_ANSWER_INDICATOR" class="anwser indicator">WAITING...</span>
                    <span id="ELEMENT_ANSWER_THE_ANSWERS" class="answer theAnswer">
                        <?php
                        $ford = new exercise_ii\Car("Ford", 2021);
                        \printf($ford);
                        ?>
                    </span>
                </p>
                <pre class="answerContent" solution-file-path="exercise_ii/Car.php">
                    <code></code>
                </pre>
            </div>
        </div>
        <div id="EXERCISE_III" class="exercise iii">
            <div class="content">
                <h1>
                    Exercise III
                </h1>
                <h3 class="quest question">
                    &bull; (parent-class: Car) + (child-class: Ford) + (inheritance) + (properties: name, year & country) + (setters & getters) + (constructor & destructor) + (override)
                </h3>
                <p class="quest answer">
                    <span id="ELEMENT_ANSWER_INDICATOR" class="anwser indicator">WAITING...</span>
                    <span id="ELEMENT_ANSWER_THE_ANSWERS" class="answer theAnswer">
                        <?php
                            $ford = new exercise_iii\Car( "Ford" );
                            echo $ford->printDetails();
                        ?>
                    </span>
                </p>
                <pre class="answerContent" solution-file-path="exercise_iii/Car.php">
                    <code></code>
                </pre>
                <p class="quest answer">
                    <span id="ELEMENT_ANSWER_INDICATOR" class="anwser indicator">WAITING...</span>
                    <span id="ELEMENT_ANSWER_THE_ANSWERS" class="answer theAnswer">
                        <?php
                            $ford = new exercise_iii\Ford( "USA" );
                            echo $ford->printDetails();
                        ?>
                    </span>
                </p>
                <pre class="answerContent" solution-file-path="exercise_iii/Ford.php">
                    <code></code>
                </pre>
            </div>
        </div>
        <div id="EXERCISE_IV" class="exercise iv">
            <div class="content">
                <h1>
                    Exercise IV
                </h1>
                <h3 class="quest question"></h3>
                <p class="quest answer">
                    <span id="ELEMENT_ANSWER_INDICATOR" class="anwser indicator">WAITING...</span>
                    <span id="ELEMENT_ANSWER_THE_ANSWERS" class="answer theAnswer">
                        <?php
                            $r = new exercise_iv\CircleArea( 5.0 ); //REM: This instance is an unchangeable object, so a new instance is required to solve a different problem or to calculate the area of another circle.
                            echo $r->area;
                        ?>
                    </span>
                </p>
                <pre class="answerContent" solution-file-path="exercise_iv/CircleArea.php">
                    <code></code>
                </pre>
            </div>
        </div>
        <div id="EXERCISE_V" class="exercise v">
            <div class="content">
                <h1>
                    Exercise V
                </h1>
                <h3 class="quest question"></h3>
                <p class="quest answer column">
                    <span id="ELEMENT_ANSWER_INDICATOR" class="anwser indicator">WAITING...</span>
                    <span id="ELEMENT_ANSWER_THE_ANSWERS" class="answer theAnswer">
                        <?php
                            $fruits = [ 
                                new exercise_v\Apple(), 
                                new exercise_v\Orange(), 
                                new exercise_v\Grape()
                            ];
                            exercise_v\printFruitColor( ...$fruits );
                        ?>
                    </span>
                </p>
                <pre class="answerContent" solution-file-path="exercise_v/Fruit.php">
                    <code></code>
                </pre>
            </div>
        </div>
        <div id="EXERCISE_VI" class="exercise vi">
            <div class="content">
                <h1>
                    Exercise VI
                </h1>
                <h3 class="quest question"></h3>
                <p class="quest answer column">
                    <span id="ELEMENT_ANSWER_INDICATOR" class="anwser indicator">WAITING...</span>
                    <span id="ELEMENT_ANSWER_THE_ANSWERS" class="answer theAnswer">
                        <?php
                            include_once "./exercise_vi/index.php";
                        ?>
                    </span>
                </p>
                <pre class="answerContent" solution-file-path="exercise_vi/index.php">
                    <code></code>
                </pre>
            </div>
        </div>
    </section>
    <section id="">
    </section>
    <script src="lib/prism/prism.js"></script>
    <script src="rez/js/util.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Prism.highlightAll();
            // setInterval(() => {
            const ELEMENT_ELEMENT_ANSWER_INDICATORS = document
                .querySelectorAll('.answer .indicator');

            const ELEMENT_THE_ANSWERS = document
                .querySelectorAll('.answer .theAnswer');

            const ELEMENT_ANSWER_CONTENTS = document
                .querySelectorAll(".answerContent");

            ELEMENT_THE_ANSWERS.forEach((elementTheAnswer, index) => {
                const TEXT_CONTENT_THE_ANSWER = elementTheAnswer.textContent.trim();

                const ELEMENT_ANSWER_INDICATOR = ELEMENT_ELEMENT_ANSWER_INDICATORS[index];

                if (ELEMENT_ANSWER_INDICATOR) {
                    if (TEXT_CONTENT_THE_ANSWER) {
                        ELEMENT_ANSWER_INDICATOR.classList.add("ready");
                        ELEMENT_ANSWER_INDICATOR.textContent = "OUTPUT";
                    } else {
                        ELEMENT_ANSWER_INDICATOR.classList.remove("ready");
                        ELEMENT_ANSWER_INDICATOR.textContent = "WAITING...";
                    }
                }

                elementTheAnswer.addEventListener(
                    "click", 
                    (e)=>{
                        e.preventDefault();
                        const ELEMENT_ANSWER_CONTENT = ELEMENT_ANSWER_CONTENTS[index];
                        ELEMENT_ANSWER_CONTENTS[index].classList.toggle("active");

                        if( !ELEMENT_ANSWER_CONTENTS[index].classList.contains("active") ) return;

                        // const PHP_FILE_PATH = `exercise_${decimalToRoman(index+1).toLowerCase()}/Car.php`;

                        const PHP_FILE_PATH = `${ELEMENT_ANSWER_CONTENT.getAttribute("solution-file-path")}`

                        fetch(
                            `.misc/read-file.php`, 
                            {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/x-www-form-urlencoded',
                                },
                                body: `filePath=${PHP_FILE_PATH}`,
                            }
                        )
                        .then(response => response.text())
                        .then(data => {
                            const ELEMENT_CODE = ELEMENT_ANSWER_CONTENTS[index].firstElementChild;
                            ELEMENT_CODE.classList.add("language-php");
                            ELEMENT_CODE.innerHTML = `${escapeHtml(data.trim())}`;
                            Prism.highlightElement(ELEMENT_CODE);
                        })
                        .catch(error => console.error('Error fetching the PHP file:', error));
                    }
                );
            });
            // }, 1000)
        });
    </script>
</body>

</html>