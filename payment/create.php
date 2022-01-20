<?php
    $servername = "localhost";
    $username = 'root';
    $password = "";
    $dbname = "new_here";
    $conn = mysqli_connect($servername, $username, $password,$dbname);

?>

//INSERT INTO `payment` (`id`, `name`, `email`, `phone`, `amount`, `pay_to`, `created_at`) VALUES

//ALTER TABLE `transaction`
    ADD PRIMARY KEY (`id`);

//ALTER TABLE `transaction`
   MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
  COMMIT;

//SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

=======================================
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `amount` int(255) DEFAULT NULL,
  `pay_to` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
