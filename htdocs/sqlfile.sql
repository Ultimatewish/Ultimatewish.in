DROP DATABASE mydb;

CREATE DATABASE quiz character set 'utf8';
CREATE TABLE mydb.quiz (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(1000) character set utf8 collate utf8_bin default NULL,
  `option 2` varchar(1000) character set utf8 collate utf8_bin default NULL,
  `option 3` varchar(1000) character set utf8 collate utf8_bin default NULL,
  `option 4` varchar(1000) character set utf8 collate utf8_bin default NULL,
  `ans`      varchar(1000) character set utf8 collate utf8_bin default NULL,
  `userans` text
)  ENGINE=InnoDB DEFAULT CHARSET=utf8;




INSERT INTO mydb.quiz (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
(1, 'इनमे से कोई फूल चुनें : ', 'गुलाब', 'चमेली', 'सूरजमुखी', 'गेंदा', 'चमेली', 'चमेली'),
(2, 'इनमे से कोई पशु चुनें : ', 'घोडा', 'कुत्ता', 'हिरण', 'बाघ', 'घोडा', 'घोडा'),
(3, 'आपको सबसे प्रिय क्या है ?', 'दौलत', 'इज़्ज़त', 'प्रेम', 'कामयाबी ', 'दौलत', 'दौलत'),
(4, 'इनमे से कोई रंग चुनें  :', 'हरा', 'नीला', 'पीला', 'बेंगाणी ', 'बेंगाणी ', 'बेंगाणी '),
(5, 'कोई एक सब्ज़ी चुनें :', 'पालक', 'गोभी', 'मिर्च', 'आलू', 'आलू', 'आलू');


