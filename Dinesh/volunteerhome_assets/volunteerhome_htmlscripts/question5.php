<div>
    <h2>==========[Question 5]:==============</h2>
    <br>
    <br>
<fieldset>
    <h3>
    <label for="question5">
        <?php
            //function for getting the text
           get_question_text(41);
        ?> (Required)
</label>

    <input hidden type="number" name="qid5" value="41"><!-- Hidden input that carries value of question id (currently manual)-->
<br>
    <input required type="radio" name="question5" value=true>YES
    <input required type="radio" name="question5" value=false>NO
<br>
<br>
    <label for="question5">Explain :(Optional)</label>
<br>
    <textarea name="question5_opt" cols="45" rows="5" placeholder="Enter items here"></textarea>
<br>
<br>
    </h3>
</fieldset>
</div>
<h5>
    <input class="navbuttons" type="button" id="previous4" name="previous" value="GO TO QUESTION 4">
    <input class="navbuttons" type="button" id="next6" name="next" value="GO TO QUESTION 6">
</h5>