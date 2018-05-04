<?php

$questions = array(
    0 => array(
        "question" =>"Vous arrivez devant l'entrée de l'etoile de la mort, deux portes se présentent à vous, laquelle choisissez-vous ?",
        "answers"  => array(
            array(
                "answer" => "Vous rentrée par la petite porte",
                "action" => 1
            ),
            array(
                "answer" => "Vous rentré par la grande porte",
                "action" => 2
            )
        )
),

    1 => array(
        "question" =>"Vous tombez nez à nez avec un chien vous sortée votre",
        "answers"  => array(
            array(
                "answer" => "Je sors mon sabre laser",
                "action" => 2
            ),
            array(
                "answer" => "Ce ne sont pas les druides que vous recherchez",
                "action" => 4
            )
        )
 ),

    2 => array(
        "question" =>"Un veillard vous propose son épée magique Petite Lame Fourbe, qu'en faite-vous",
        "answers"  => array(
            array(
                "answer" => "Je lui propose 10 euro",
                "action" => 1
            ),
            array(
                "answer" => "Je lui dit que sa ne m'intéresse pas ",
                "action" => 3
            ),
            array(
                "answer" => "Je laisse WIssem de lui parler de PHP et je lui dérobe sont épé ",
                "action" => 4
            )

        )
    ),


    3 => array(
        "question" =>"Tu as perdu ton epée",
        "answers"  => array(
            array(
                "answer" => "Je lui propose 10 euro",
                "action" => 1
            ),
            array(
                "answer" => "Je lui dit que sa ne m'intéresse pas ",
                "action" => 0
            ),


        )
    ),


    4 => array(
        "question" =>"tu voie un dragon",
        "answers"  => array(
            array(
                "answer" => "tu cours",
                "action" => 1
            ),
            array(
                "answer" => "tu plonge ",
                "action" => 2
            )

        )
    )
 );