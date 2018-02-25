@extends('layouts.app')

@section('content')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="{!! asset('css/app.css') !!}" rel="stylesheet" />



  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">

                <?php
                setlocale(LC_TIME, "fr_FR");
                $dt = new DateTime;
                if (isset($_GET['year']) && isset($_GET['week'])) {
                    $dt->setISODate($_GET['year'], $_GET['week']);
                } else {
                    $dt->setISODate($dt->format('o'), $dt->format('W'));
                }
                $year = $dt->format('o');
                $week = $dt->format('W');

                $db_heure = '09:00:00';
                $dbfin_heure = '12:00:00';
                
                $deb_heure = $db_heure->format('H:i:s');
                $fin_heure = $dbfin_heure->format('H:i:s');;
                ?>


                <div class="panel-body">
                    <table class="table table-bordered">
                      <tbody>
                          <!--Plage des date disponibles -->
                          <tr>
                          <td align="center" valign="middle"><a href="<?php echo $_SERVER['PHP_SELF'].'?week='.($week-1).'&year='.$year; ?>" class="previous round">&#8249;</a> <!--Previous week-->
                          </td>
                            <?php
                            do {
                                echo "<td align='center' valign='middle'>" . $dt->format('l') . "<br>" . $dt->format('d M Y') . "</td>\n";
                                $dt->modify('+1 day');

                            } while ($week == $dt->format('W'));
                            ?>

                          <td align="center" valign="middle"><a href="<?php echo $_SERVER['PHP_SELF'].'?week='.($week+1).'&year='.$year; ?>" class="next round">&#8250;</a> <!--Next week-->
                          </td>
                        </tr>

                        <!--Plage d'heure disponibles -->
                        <tr>
                              <td></td> <td><a href='#' class=time>9:00</a> </td>
                        </tr>
                      </tbody>
                    </table>

                </div>
             </div>
           </div>
      </div>
  </div>

@endsection
