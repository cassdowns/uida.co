<?php

/*
 * ==================================================================
 * Execute operations upon form submit (store form data in date.csv).
 * ==================================================================
 */
if (isset($_POST['submit'])) {
    // Collect the form data.
    $femail = isset($_POST['femail']) ? $_POST['femail'] : '';

    // Check if first name is set.
    if ($femail == '') {
        $errors[] = 'We need an email to send you updates';
    }


    // If no errors carry on.
    if (!isset($errors)) {
        // The header row of the CSV.
        $header = "Emails\n";
        // The data of the CSV.
        $data = "$femail\n";

        /*
         * The file name of the CSV.
         * 
         * NB: __DIR__ describes the location in which this file resides.
         * To go up one level use "dirname(__DIR__)".
         * 
         * NB: You will not be able to append data to an existing file if you use time components 
         * (hour, minutes, seconds) inside the file name. Imagine that you are creating a file 
         * right now, at 12:18:43 o'clock. Then the file will be named "formdata-09-01-18-12-38-43.csv".
         * One second later you will not be able to append data to it because the time will be "12:38:44".
         * Then a new file "formdata-09-01-18-12-38-44.csv" will be created.
         * 
         * I suggest using only the date whithout the time in the file name.
         * 
         * @todo Read the comment above!
         */
        $fileName = "emailupdates.csv";

        /*
         * Create the CSV file.
         * If file exists, append the data to it. Otherwise create the file.
         */
        if (file_exists($fileName)) {
            // Add only data. The header is already added in the existing file.
            file_put_contents($fileName, $data, FILE_APPEND);
        } else {
            // Add CSV header and data.
            file_put_contents($fileName, $header . $data);
        }
    }
}