<body style="background:black; color:green;">
    <?php
    while (true) {
    for ($i = 0; $i < 1000; $i++) {
        for ($j = 0; $j < 1000; $j++) {
            if (rand(0, 1) == 1) {
                echo "1";
            } else {
                echo "0";
            }
        }
        echo "<br>";
        usleep(50000);
    }
}
    ?>
</body>
