<?php

$rand = rand(1,4);
$text;
switch ($rand) {
    case 1 : $text = "Your house needs urgent repairs after a storm, Pay 30 to fix it";
    break;
    case 2 : $text = "It is a very hot day and you have been working hard.<br/>
                    Will you treat yourself to something at Mike's Supermarket?";
    break;
    case 3 : $text = "Any money which is not in your savings account at the bank has now been stolen.
      <div class='card p'>
                                <div class='media'>
                                    <div >
                                        <table>
                                            <tr>
                                              <th>Mes infos</th>
                                              <th></th>
                                            </tr>
                                            <tr>
                                              <td>Affaires</td>
                                              <td>0</td>
                                            </tr>
                                            <tr>
                                              <td>Dépenses</td>
                                              <td>0</td>
                                            </tr>
                                            <tr>
                                              <td>Epargne</td>
                                              <td>".$joueur->e."</td>
                                            </tr>
                                            <br/>
                                            <tr>
                                              <td>CAISSE :</td>
                                              <td>0</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
    ";
    break;
    case 4 : $text = "You have insured your stock against theft.<br/>
            You must pay 10 for each item you have in stock now";
    break;
}

$text = "Any money which is not in your savings account at the bank has now been stolen.
      <div class='card p'>
                                <div class='media'>
                                    <div >
                                        <table>
                                            <tr>
                                              <th>Mes infos</th>
                                              <th></th>
                                            </tr>
                                            <tr>
                                              <td>Affaires</td>
                                              <td>0</td>
                                            </tr>
                                            <tr>
                                              <td>Dépenses</td>
                                              <td>0</td>
                                            </tr>
                                            <tr>
                                              <td>Epargne</td>
                                              <td>".$joueur->e."</td>
                                            </tr>
                                            <br/>
                                            <tr>
                                              <td>CAISSE :</td>
                                              <td>0</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
    ";
?>

