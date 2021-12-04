<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simpsons Archives</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <header id="masthead" class="site-header layout-container">
      <a href="/">
        <img class="site-header__logo" src="images/logo.svg" alt="Logo">
      </a>
    </header>
    <?php

    $string = file_get_contents("characters.json");
    $data = json_decode($string, true);

    ?>

    <div id="content" class="site-content">
      <div id="primary" class="content-area">
        <div id="main" class="site-main">
          <div class="form__container layout-container">
            <div class="form__row layout-row">
              <div class="form__itemsContainer">
                <div class="form__imageContainer">
                  <img src="images/simpsons.jpg" alt="Simpsons" class="form__image">
                </div>
                <div class="form__card">
                  <h3 class="form__heading"> Select characters to show </h3>
                  <form method="get">
                    <ul class="form__items">
                      <?php 
                        foreach ($data as $key => $value){
                          if(!empty($_GET[$key])){
                            echo(
                              '<li class="form__item">
                              <label for="homer">'.$value['first_name'].' '.$value['last_name'].'</label>
                              <input id="'.$key.'" type="checkbox" name="'.$key.'" checked>
                              </li>'
                            );
                          }
                          else{
                            echo(
                              '<li class="form__item">
                              <label for="homer">'.$value['first_name'].' '.$value['last_name'].'</label>
                              <input id="'.$key.'" type="checkbox" name="'.$key.'">
                              </li>'
                            );
                          }
                        }
                      ?>
                    </ul>
                    <input class="form__button" type="submit">
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="characters__container layout-container">
            <div class="characters__row layout-row">
              <ul class="characters__items">
                <li class="characters__itemContainer">
                  <div class="characters__item">
                    <img src="images/homer.png" alt="homer" class="characters__image">
                    <div class="characters__info">
                      <h3 class="characters__name"> Homer Simpson </h3>
                      <div class="characters__age characters__attribute">
                        <b>Age:</b> 40
                      </div>
                      <div class="characters__occupation characters__attribute">
                        <b>Occupation:</b> Nuclear Safety Inspector
                      </div>
                      <div class="characters__voicedBy characters__attribute">
                        <b>Voiced by:</b> Dan Castellaneta
                      </div>
                    </div>
                  </div>
                </li>
                <li class="characters__itemContainer">
                  <div class="characters__item">
                    <img src="images/marge.png" alt="marge" class="characters__image">
                    <div class="characters__info">
                      <h3 class="characters__name"> Marge Simpson </h3>
                      <div class="characters__age characters__attribute">
                        <b>Age:</b> 40
                      </div>
                      <div class="characters__occupation characters__attribute">
                        <b>Occupation:</b> Housewife
                      </div>
                      <div class="characters__voicedBy characters__attribute">
                        <b>Voiced by:</b> Julie Kavner
                      </div>
                    </div>
                  </div>
                </li>
                <li class="characters__itemContainer">
                  <div class="characters__item">
                    <img src="images/bart.png" alt="bart" class="characters__image">
                    <div class="characters__info">
                      <h3 class="characters__name"> Bart Simpson </h3>
                      <div class="characters__age characters__attribute">
                        <b>Age:</b> 10
                      </div>
                      <div class="characters__occupation characters__attribute">
                        <b>Occupation:</b> Student
                      </div>
                      <div class="characters__voicedBy characters__attribute">
                        <b>Voiced by:</b> Nancy Cartwright
                      </div>
                    </div>
                  </div>
                </li>
                <li class="characters__itemContainer">
                  <div class="characters__item">
                    <img src="images/lisa.png" alt="lisa" class="characters__image">
                    <div class="characters__info">
                      <h3 class="characters__name"> Lisa Simpson </h3>
                      <div class="characters__age characters__attribute">
                        <b>Age:</b> 8
                      </div>
                      <div class="characters__occupation characters__attribute">
                        <b>Occupation:</b> Student
                      </div>
                      <div class="characters__voicedBy characters__attribute">
                        <b>Voiced by:</b> Yeardley Smith
                      </div>
                    </div>
                  </div>
                </li>
                <li class="characters__itemContainer">
                  <div class="characters__item">
                    <img src="images/maggie.png" alt="maggie" class="characters__image">
                    <div class="characters__info">
                      <h3 class="characters__name"> Maggie Simpson </h3>
                      <div class="characters__age characters__attribute">
                        <b>Age:</b> 8
                      </div>
                    </div>
                  </div>
                </li>
                <li class="characters__itemContainer">
                  <div class="characters__item">
                    <img src="images/moe.png" alt="moe" class="characters__image">
                    <div class="characters__info">
                      <h3 class="characters__name"> Moe Szyslak </h3>
                      <div class="characters__age characters__attribute">
                        <b>Age:</b> 55
                      </div>
                      <div class="characters__occupation characters__attribute">
                        <b>Occupation:</b> Bartender
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>