<?php

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Self Esteem Test</title>

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
                <legend>1.Do you believe you are inferior to others in some way ?.........</legend>
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
            <legend>2.Do you worry what other people think of you ?…...</legend>
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
        <legend>3. Are you sensitive to criticism?.....</legend>
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
    <legend>4.Are you nervous around important people that you want to like and accept you ?............</legend>
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
  <legend>5.How often do you think positively about yourself ?.......</legend>
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
  <legend>6.
      <label class="form-check-label">When talking with others, do you feel comfortable looking them in the eyes when talking with them ? 
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
  <legend>7. Do you get nervous when called upon to speak to a group of people you don't know ?........</legend>
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
  <legend>8.Are you satisfied with the person you've turned out to be so far ?....................</legend>
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
  <legend>9.Do you feel good about yourself without the regular validation from others ?.............</legend>
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
  <legend>10. How would you rate your level of self-esteem ?...............</legend>
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
  <legend>11.I think that overall, people find me boring to talk ..............</legend>
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
  <legend>12.I will never be as skilled or as smart as I should be................</legend>
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
  <legend>13.I am afraid of being rejected by my friends ?...............</legend>
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
  <legend>14.I avoid having arguments with others because I don't want them to get angry or dislike me.....................</legend>
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
  <legend>15.I modify my personality, opinions, or appearance in order to be accepted by others........................</legend>
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
  <legend>16.I constantly ask those I care about whether they love me..............</legend>
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
  <legend>17. I constantly ask those I care about whether they love me..............</legend>
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
  <legend>18.I like myself..............</legend>
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








  <input type="submit" class="btn btn-primary">Submit</input>

    </form>
    </div>

  </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
