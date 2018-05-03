<?php include('models/questions.mdl.php');

    $questionId = $_GET['question'];

    $currentQuestion = $questions[$questionId];
?>

<section>
    <h2>Questions</h2>
    <fieldset>
        <p><?= $currentQuestion['question'] ?></p>
        <?php foreach ($currentQuestion['answers'] as $answer): ?>
        <label>
            <a href="?question=<?= $answer['action'] ?>"><?= $answer['answer'] ?></a></br>
        </label>
        <?php endforeach; ?>
    </fieldset>
</section>