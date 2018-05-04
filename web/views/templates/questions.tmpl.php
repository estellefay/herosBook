<?php 
    include('models/questions.mdl.php');

    $questionId = $_GET['question']; // Vriable qui obtien le get d'une question
    $currentQuestion = $questions[$questionId]; // Selection du tableau question et de la question en particulier

function delet_arms() 
{
        if($_GET['question']  == 3) { 
            $_SESSION['players_1']['equipement'] = array();  
        }
}

function less_pdv()
{
    if($_GET['question'] == 4) {
        $_SESSION['players_1']['PDV'] -= 50;
    }
}

?>

<section>
    <h2>Questions</h2>
   <pre> <?php var_dump($_SESSION); ?> </pre>
    <h1>HELLO <?= $_SESSION['players_1']['username']?></h1>
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
if (!isset($_SESSION['history'])) { 
    $_SESSION['history'] = array();
} 
$_SESSION['history'][] = $_GET['question'];

delet_arms();
less_pdv();

?> 
