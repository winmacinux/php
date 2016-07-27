

  <?php
            $result = $_POST['car'];
            $result_explode = explode('|', $result);
            echo "Model: ". $result_explode[0]."<br />";
            echo "Colour: ". $result_explode[1]."<br />";
    ?>










 <form name="car_form" method="post" action="">
            <select name="car[]" multiple>
                    <option value="">Select Car</option>
                    <option value="BMW|Red">Red BMW</option>
                    <option value="Mercedes|Black">Black Mercedes</option>
            </select>
            <input type="submit" name="submit" id="submit" value="submit">
    </form>