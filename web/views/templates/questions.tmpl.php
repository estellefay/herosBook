<?php include('models/questions.mdl.php');

    $questionId = $_GET['question']; // Vriable qui obtien le get d'une question
    $currentQuestion = $questions[$questionId]; // Selection du tableau question et de la question en particulier
?>

<section>
    <h2>Questions</h2>
    <?php var_dump($_SESSION); ?> 
    <h1>HELLO <?= $_SESSION['username']?></h1>
    <fieldset>
        <p><?= $currentQuestion['question'] ?></p> 
        <?php foreach ($currentQuestion['answers'] as $answer): ?>
        <label>
            <a href="?question=<?= $answer['action'] ?>"><?= $answer['answer'] ?></a></br>
        </label>
        <?php endforeach; ?>
    </fieldset>
</section>

<?php 
if (!isset($_SESSION['question'])) { 
    $_SESSION['question'] = array();
} 
$_SESSION['question'][] = $_GET['question'];
?>