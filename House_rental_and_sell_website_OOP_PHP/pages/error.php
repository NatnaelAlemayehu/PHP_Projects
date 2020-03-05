            <div cass="form-row">
                <div class="form-group col-md-4 m-auto registration-errors">
                    <?php if (isset($_POST['signup-button'])) {
                        if (array_key_exists("firstname", $errors)) {
                            echo '<p>' . $errors['firstname'] . '</p>';
                        }
                    }  ?>
                </div>
            </div>