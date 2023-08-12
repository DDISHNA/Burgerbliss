

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `user1` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) unique,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `user1` (`id`, `name`, `email`, `password`) VALUES
(16, 'Dishna', 'r180762@rguktrkv.ac.in', '6302674049');


ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `user1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;


