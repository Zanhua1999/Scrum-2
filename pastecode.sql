-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 sep 2020 om 20:43
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pastecode`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `codes`
--

CREATE TABLE `codes` (
  `id` int(255) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `codes`
--

INSERT INTO `codes` (`id`, `code`) VALUES
(19, '\r\n<?php\r\nrequire \'connect.php\';\r\n\r\n\r\nif(isset($_POST[\'submit\'])) {\r\n\r\n    $code = $_POST[\'code\'];\r\n\r\n\r\n $sql = \"INSERT INTO codes SET code=?\";\r\n $stmt = $pdo->prepare($sql);\r\n $stmt ->bindParam(\"\", $code);\r\n $stmt->execute([$code]);\r\n}\r\n\r\n?>\r\n\r\n<?php\r\n$db_Type = \"mysql\";\r\n$host = \"localhost\";\r\n$dbName = \"pastecode\";\r\n$userName = \"root\";\r\n$password = \"\";\r\n\r\ntry {\r\n    $conn = new PDO(\"mysql:host=$host;dbname=$dbName\", $userName, $password);\r\n    echo \"<h1> Codes uploaden</h1>\";\r\n} catch(PDOExeption $e) {\r\n    echo $e->getMessage();\r\n}\r\n\r\n\r\necho \'<br>\';\r\n    $lastid = $pdo->lastInsertId();\r\n    echo \"<a href=\'codes.php?id=$lastid\'>Bekijk details</a>\" . \'<br>\';\r\n\r\n?>\r\n\r\n\r\n\r\n<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n    <meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n</head>\r\n<body>\r\n<a href=\"index.php\">Terug naar Home</a>\r\n</body>\r\n</html>\r\n    \r\n'),
(20, '\r\n<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n    <meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n</head>\r\n<body>\r\n<a href=\"index.php\">Terug naar Home</a>\r\n</body>\r\n</html>\r\n    \r\n'),
(21, 'using System;\r\n\r\nnamespace HelloWorld\r\n{\r\n  class Program\r\n  {\r\n    static void Main(string[] args)\r\n    {\r\n      Console.WriteLine(\"Hello World!\");    \r\n    }\r\n  }\r\n}'),
(22, 'class Simple{  \r\n    public static void main(String args[]){  \r\n     System.out.println(\"Hello Java\");  \r\n    }  \r\n}  ');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
