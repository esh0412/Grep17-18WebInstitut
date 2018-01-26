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
          <div class="col-md-9 col-md-offset-2">
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

                ?>


                <div class="panel-body">
                    <table class="table table-bordered">
                      <tbody>
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
                      </tbody>
                    </table>
                  <table id="timeTable" class="table table-striped task-table">
                    <tr>
                        <th>Heure :</th>
                    </tr>
                    <tr>
                      <td><a href="#" class=time>9:00</a>   </td>
                    </tr>
                    <tr>
                      <td align="left"><a href="#" class=time>9:30</a>   </td>
                    </tr>
                    <tr>
                      <td align="left"><a href="#" class=time>10:00</a>   </td>
                    </tr>
                    <tr>
                      <td align="left"><a href="#" class=time>10:30</a>   </td>
                    </tr>
                    <tr>
                      <td align="left"><a href="#" class=time>11:00</a>   </td>
                    </tr>
                    <tr>
                        <td align="left"><a href="#" class=time>11:30</a>   </td>
                    </tr>
                    <tr>
                      <td align="left"><a href="#" class=time>12:00</a>   </td>
                    </tr>
                    <tr>
                      <td align="left"><a href="#" class=time>12:30</a>   </td>
                    </tr>
                    <tr>
                      <td align="left"><a href="#" class=time>13:00</a>   </td>
                    </tr>
                    <tr>
                      <td align="left"><a href="#" class=time>13:30</a>   </td>
                    </tr>
                    <tr>
                      <td align="left"><a href="#" class=time>14:00</a>   </td>
                    </tr>
                    <tr>
                    <td align="left"><a href="#" class=time>14:30</a>   </td>
                    </tr>

                  </table>
                </div>
             </div>
           </div>
      </div>
</div>


@endsection

<script type="text/javascript">
var rg1 = new RadioGroup(document.getElementById('rg1'));
           rg1.init();
</script>

<!--Date Picker




  <div class="input-group date" data-provide="datepicker">
       <input type="text" class="form-control">
       <div class="input-group-addon">
          <span class="glyphicon glyphicon-th"></span>
       </div>
     </div>

     <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js"></script>
<script>
  $(document).ready(function() {
    $('.datepicker').datepicker();
  });
</script>
-->
