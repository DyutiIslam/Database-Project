<?php

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Depression Test</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="start">
            <h3><?php echo $mgs; ?></h3>
        </div>
      <div class="start">
          <h3>For each question below, select the option that best fits your opinion on the importance of the issue.</h3>
      </div>
    <form method="get">


              <fieldset class="form-group">
                <legend>1.I do everything slowly.........</legend>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="qsn1" id="optionsRadios1" value="NOT AT ALL" >
                      NOT AT ALL
                    </label>
                  </div>
                  <div class="form-check">
                  <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="qsn1" id="optionsRadios2" value="Partly">
                      Partly
                    </label>
                  </div>
                  <div class="form-check">
                  <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="qsn1" id="optionsRadios2" value="A lot">
                      A lot
                    </label>
                  </div>
                  <div class="form-check">
                  <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="qsn1" id="optionsRadios2" value="To a great extend">
                      To a great extend
                    </label>
                  </div>
          </fieldset>





          <fieldset class="form-group">
            <legend>2.My future seems hopeless…...</legend>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="qsn2" id="optionsRadios1" value="NOT AT ALL" >
                  NOT AT ALL
                </label>
              </div>
              <div class="form-check">
              <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="qsn2" id="optionsRadios2" value="Partly">
                  Partly
                </label>
              </div>
              <div class="form-check">
              <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="qsn2" id="optionsRadios2" value="A lot">
                  A lot
                </label>
              </div>
              <div class="form-check">
              <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="qsn2" id="optionsRadios2" value="To a great extend">
                  To a great extend
                </label>
              </div>
      </fieldset>


      

      <fieldset class="form-group">
        <legend>3. I find it hard to concentrate when I read.....</legend>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="qsn3" id="optionsRadios1" value="NOT AT ALL" >
              NOT AT ALL
            </label>
          </div>
          <div class="form-check">
          <label class="form-check-label">
              <input type="radio" class="form-check-input" name="qsn3" id="optionsRadios2" value="Partly">
              Partly
            </label>
          </div>
          <div class="form-check">
          <label class="form-check-label">
              <input type="radio" class="form-check-input" name="qsn3" id="optionsRadios2" value="A lot">
              A lot
            </label>
          </div>
          <div class="form-check">
          <label class="form-check-label">
              <input type="radio" class="form-check-input" name="qsn3" id="optionsRadios2" value="To a great extend">
              To a great extend
            </label>
          </div>
  </fieldset>

  <fieldset class="form-group">
    <legend>4. All joy and pleasure seem to have disappeared from my life......</legend>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="qsn4" id="optionsRadios1" value="NOT AT ALL" >
          NOT AT ALL
        </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" name="qsn4" id="optionsRadios2" value="Partly">
          Partly
        </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" name="qsn4" id="optionsRadios2" value="A lot">
          A lot
        </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" name="qsn4" id="optionsRadios2" value="To a great extend">
          To a great extend
        </label>
      </div>
</fieldset>
<fieldset class="form-group">
  <legend>5. I find it hard to make decisions.....4. All joy and pleasure seem to have disappeared from my life......</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn5" id="optionsRadios1" value="NOT AT ALL" >
        NOT AT ALL
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn5" id="optionsRadios2" value="Partly">
        Partly
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn5" id="optionsRadios2" value="A lot">
        A lot
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn5" id="optionsRadios2" value="To a great extend">
        To a great extend
      </label>
    </div>
</fieldset>

<fieldset class="form-group">
  <legend>6. I have lost interest in things that used to mean a lot to me.......</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn6" id="optionsRadios1" value="NOT AT ALL" >
        NOT AT ALL
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn6" id="optionsRadios2" value="Partly">
        Partly
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn6" id="optionsRadios2" value="A lot">
        A lot
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn6" id="optionsRadios2" value="To a great extend">
        To a great extend
      </label>
    </div>
</fieldset>

<fieldset class="form-group">
  <legend>7. I feel sad, depressed and unhappy........</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn7" id="optionsRadios1" value="NOT AT ALL" >
        NOT AT ALL
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn7" id="optionsRadios2" value="Partly">
        Partly
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn7" id="optionsRadios2" value="A lot">
        A lot
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn7" id="optionsRadios2" value="To a great extend">
        To a great extend
      </label>
    </div>
</fieldset>

<fieldset class="form-group">
  <legend>8.. I feel restless and cannot relax...........</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn8" id="optionsRadios1" value="NOT AT ALL" >
        NOT AT ALL
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn8" id="optionsRadios2" value="Partly">
        Partly
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn8" id="optionsRadios2" value="A lot">
        A lot
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn8" id="optionsRadios2" value="To a great extend">
        To a great extend
      </label>
    </div>
</fieldset>

<fieldset class="form-group">
  <legend>9.I feel tired................</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn9" id="optionsRadios1" value="NOT AT ALL" >
        NOT AT ALL
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn9" id="optionsRadios2" value="Partly">
        Partly
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn9" id="optionsRadios2" value="A lot">
        A lot
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn9" id="optionsRadios2" value="To a great extend">
        To a great extend
      </label>
    </div>
</fieldset>

<fieldset class="form-group">
  <legend>10.I find it hard to do even trivial things................</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn10" id="optionsRadios1" value="NOT AT ALL" >
        NOT AT ALL
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn10" id="optionsRadios2" value="Partly">
        Partly
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn10" id="optionsRadios2" value="A lot">
        A lot
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn10" id="optionsRadios2" value="To a great extend">
        To a great extend
      </label>
    </div>
</fieldset>

<fieldset class="form-group">
  <legend>11.I feel guilty and deserve to be punished................</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn11" id="optionsRadios1" value="NOT AT ALL" >
        NOT AT ALL
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn11" id="optionsRadios2" value="Partly">
        Partly
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn11" id="optionsRadios2" value="A lot">
        A lot
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn11" id="optionsRadios2" value="To a great extend">
        To a great extend
      </label>
    </div>
</fieldset>

<fieldset class="form-group">
  <legend>12.I feel like a failure................</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn12" id="optionsRadios1" value="NOT AT ALL" >
        NOT AT ALL
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn12" id="optionsRadios2" value="Partly">
        Partly
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn12" id="optionsRadios2" value="A lot">
        A lot
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn12" id="optionsRadios2" value="To a great extend">
        To a great extend
      </label>
    </div>
</fieldset>

<fieldset class="form-group">
  <legend>13.. I feel empty - more dead than alive................</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn13" id="optionsRadios1" value="NOT AT ALL" >
        NOT AT ALL
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn13" id="optionsRadios2" value="Partly">
        Partly
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn13" id="optionsRadios2" value="A lot">
        A lot
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn13" id="optionsRadios2" value="To a great extend">
        To a great extend
      </label>
    </div>
</fieldset>

<fieldset class="form-group">
  <legend>14.My sleep is disturbed: too little, too much or disturbed sleep................</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn14" id="optionsRadios1" value="NOT AT ALL" >
        NOT AT ALL
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn14" id="optionsRadios2" value="Partly">
        Partly
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn14" id="optionsRadios2" value="A lot">
        A lot
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn14" id="optionsRadios2" value="To a great extend">
        To a great extend
      </label>
    </div>
</fieldset>

<fieldset class="form-group">
  <legend>15.I wonder HOW I could commit suicide…….................</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn15" id="optionsRadios1" value="NOT AT ALL" >
        NOT AT ALL
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn15" id="optionsRadios2" value="Partly">
        Partly
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn15" id="optionsRadios2" value="A lot">
        A lot
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn15" id="optionsRadios2" value="To a great extend">
        To a great extend
      </label>
    </div>
</fieldset>

<fieldset class="form-group">
  <legend>16.I feel confined and imprisoned................</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn16" id="optionsRadios1" value="NOT AT ALL" >
        NOT AT ALL
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn16" id="optionsRadios2" value="Partly">
        Partly
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn16" id="optionsRadios2" value="A lot">
        A lot
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn16" id="optionsRadios2" value="To a great extend">
        To a great extend
      </label>
    </div>
</fieldset>

<fieldset class="form-group">
  <legend>17.I feel down even when something good happens to me...............</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn17" id="optionsRadios1" value="NOT AT ALL" >
        NOT AT ALL
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn17" id="optionsRadios2" value="Partly">
        Partly
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn17" id="optionsRadios2" value="A lot">
        A lot
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="qsn17" id="optionsRadios2" value="To a great extend">
        To a great extend
      </label>
    </div>
</fieldset>





  <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    </div>

  </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
