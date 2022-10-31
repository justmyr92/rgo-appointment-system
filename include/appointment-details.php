<div class="row">
    <div class="col">
        <div class="appointmentTable p-5 shadow-sm border">
            <h3 class="text-center mb-3">Book Appointment</h3>
            <table class="table table-bordered border-dark">
                <thead>
                    <tr>
                        <th colspan="3" class="text-center">
                            <?php

                            if (isset($_POST['date'])) {
                                $date = $_POST['date'];
                                echo date('F d, Y', strtotime($date));
                            } else {
                                echo date('F d, Y');
                            }
                            ?>
                            <input type="hidden" name="date" value="<?php echo $date; ?>">
                        </th>
                    </tr>
                    <tr>
                        <th scope="col" class="text-center">Date</th>
                        <th scope="col" class="text-center">Available Slots</th>
                        <th scope="col" class="text-center">Percentage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="radio" name="batch" id="am_batch" value="am">
                            <label for="am_batch" class="text-center m-0">Morning (8:00 AM - 11:30 AM)</label>
                        </td>
                        <td>
                            <p class="text-center m-0"> 49 / 100</p>
                        </td>
                        <td>45%</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="batch" id="pm_batch" value="pm">
                            <label for="pm_batch" class="
                            text-center m-0">Afternoon (12:30 PM - 4:30 PM)</label>
                        </td>
                        <td>
                            <p class="text-center m-0"> 49 / 100</p>
                        </td>
                        <td>45%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>