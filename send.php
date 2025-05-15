<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"] ?? '');
    $email = htmlspecialchars($_POST["email"] ?? '');
    $message = htmlspecialchars($_POST["message"] ?? '');

    if (!empty($name) && !empty($email) && !empty($message)) {
        $log = "[" . date("Y-m-d H:i:s") . "] Message from $name <$email>: $message" . PHP_EOL;
        file_put_contents("form_log.txt", $log, FILE_APPEND);

        header("Location: thankyou.html");
        exit();
    } else {
        echo "Ju lutem plotësoni të gjitha fushat.";
    }
} else {
    echo "Invalid request.";
}
?>
