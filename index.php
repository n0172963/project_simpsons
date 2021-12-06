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
  //load data from file characters.json
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
                        //show checkbox from data
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
                <?php
                  //show profile from get method
                  foreach ($data as $key => $value){
                    $firstname = $value['first_name'];
                    if(!empty($_GET[$key])){
                      $image = '<img src="'.$value['image_url'].'" alt="'.$value['first_name'].'" class="characters__image">';
                      $name = '<h3 class="characters__name"> '.$value['first_name'].' '.$value['last_name'].' </h3>';
                      if(isset($value['age']) !=null || isset($value['age']) != ""){
                        $age = '<b>Age:</b> '.$value['age'];
                      }
                      else{
                        $age = "";
                      }
                      if(isset($value['occupation']) !=null || isset($value['occupation']) != ""){
                        $job = '<b>Occupation:</b> '.$value['occupation'];
                      }
                      else{
                        $job = "";
                      }
                      if(isset($value['voiced_by']) !=null || isset($value['voiced_by'])!=""){
                        $voice_actor = '<b>Voiced by:</b> '.$value['voiced_by'];
                      }
                      else{
                        $voice_actor = "";
                      }
                      echo('
                      <li class="characters__itemContainer">
                        <div class="characters__item">
                          '.$image.'
                          <div class="characters__info">
                            '.$name.'
                            <div class="characters__age characters__attribute">
                            '.$age.'
                            </div>
                            <div class="characters__occupation characters__attribute">
                            '.$job.'
                            </div>
                            <div class="characters__voicedBy characters__attribute">
                            '.$voice_actor.'
                            </div>
                          </div>
                        </div>
                      </li>');
                    }
                  }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>