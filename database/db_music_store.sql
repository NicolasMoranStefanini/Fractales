-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2020 a las 02:26:27
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_music_store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adminkey`
--

CREATE TABLE `adminkey` (
  `value` text NOT NULL DEFAULT '$2y$10$78prt/CC7uexFV.ffLaHK.l3ieQYf.C1QiyaHsn68JKuWyjZiocBi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `adminkey`
--

INSERT INTO `adminkey` (`value`) VALUES
('$2y$10$78prt/CC7uexFV.ffLaHK.l3ieQYf.C1QiyaHsn68JKuWyjZiocBi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id_category`, `name`) VALUES
(2, 'Bass Guitar'),
(3, 'Electric Guitar'),
(4, 'Acoustic Guitar'),
(5, 'Guitar Amps'),
(6, 'Bass Amps'),
(7, 'Keyboards'),
(20, 'Sound Boards');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `brand` text NOT NULL,
  `details` text NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `brand`, `details`, `id_category`) VALUES
(12, 'SE Custom 24', 'PRS', 'As Paul Reed Smith likes to say, this guitar punches well out of its weight class. The tone, looks, and price make the SE Custom 24 a top choice and incredible value for players looking for their first, or last guitar. ', 3),
(13, 'SE A50E & T50E', 'PRS', 'Our SE acoustic line came out with a bang in 2018 with the launch of 6-new models. Born for writing tunes, recording in the studio, or playing on stage, the new SE acoustics were researched and crafted to do it all. The cutaway Angelus shape of the A50E & full-body Tonare shape of the T50E were the top sellers, likely aided by their stunning  maple back and sides. Pick one up and give it a strum!', 4),
(27, 'Les Paul Standard \'60s', 'Gibson', 'The new Les Paul Standard returns to the classic design that made it relevant, played and loved -- shaping sound across generations and genres of music. It pays tribute to Gibson\'s Golden Era of innovation and brings authenticity back to life. The Les Paul Standard 60\'s has a solid mahogany body with an AA figured maple top, and a slim taper 60\'s-style mahogany neck with a rosewood fingerboard and trapezoid inlays. It\'s equipped with a classic-style Tune-O-Matic bridge, aluminum stop bar tailpiece, Grover Rotomatic \"Kidney\" tuners, and gold top hat knobs with silver reflectors. The Burstbucker 61R (neck) Burstbucker 61T (bridge) pickups are loaded with AlNiCo V magnets, audio taper potentiometers and orange drop capacitors.', 3),
(28, 'ES-335 Figured', 'Gibson', 'The Gibson ES-335 Figured is the perfect blend of form and function. Crafted with a maple centerblock and quarter-sawn Adirondack spruce bracing, players will be impressed by the lightweight feel and expanded range of tonal capabilities. Equipped with high-end appointments like our hand-wired control assembly with Orange Drop® capacitors, Gibson\'s new Calibrated T-Type humbucking pickups, Vintage Deluxe style tuners and light weight aluminum ABR-1 bridge and Stop Bar tailpiece anchored with steel thumb-wheels and studs. The AAA figured maple is set off by staggering gloss finishes including Sixties Cherry, Antique Natural, and Iced Tea.', 3),
(29, 'American Original \'50S Stratocaster', 'Fender', 'When we released the Stratocaster in 1954, we didn’t set out to create a classic—but we did. The Stratocaster’s sleek style, articulate sound and plethora of innovations redefined electric guitar and opened up a brave new world of musical possibilities. The American Original ‘50s Stratocaster maintains Fender’s legendary original-era style and ground-breaking tone, while adding modern feel and pickup switching.', 3),
(30, 'American Original \'50S Telecaster', 'Fender', 'The ultimate blue-collar guitar, the Telecaster launched a musical revolution when we released it. Quickly adopted by working guitarists who were enamored with its trend-setting sound, feel and unique style, the Telecaster laid the foundation for modern country, blues and even heavy metal (in Jimmy Page’s hands). The American Original ‘50s Telecaster has all of the authentic Fender touches that made the Telecaster a star of the studio and stage, adding modern feel and pickup switching to this classic guitar.', 3),
(31, 'American Original \'70S Jazz Bass', 'Fender', 'Over the course of the ‘70s, the Jazz Bass entered its “teenage years,” changing its visual style and inspiring new playing techniques—such as slapping—which led directly to new, creative forms of expression. Its smooth feel and growly midrange, tempered with a bit of treble bite, made it a hero in recording sessions around the globe. The American Original ‘70s Jazz Bass updates the smooth playing feel with a modern-radius fingerboard, while retaining the classic Fender tone and style that made the Jazz Bass the tool of choice for creative bassists.', 2),
(32, 'American Original \'60s Jazz Bass', 'Fender', 'Released in 1960, the upscale Jazz Bass quickly found favor among working bassists thanks to its premium appointments and versatile sound. The narrower neck seemed tailor-made for fast, dexterous playing, while the pair of single-coil pickups added a bold new dimension to Fender bass tone. The American Original ‘60s Jazz Bass has all the tone and style of its earliest incarnation, with modern playability.', 2),
(33, 'JCM 800', 'Marshall ', 'The art of the JCM800TM is its simplicity. Used by artists around the world, this amp continues to be one of our greatest. Oozing rock status, you can effortlessly detect its distinctive 100W roar. The first of our amps to feature a master volume for you to control your sound. We have added in a series FX loop, simple and effective.', 5),
(34, 'JCM 900', 'Marshall', 'This two channel dual reverb 100W powerhouse will make you stand out on stage. A stylish reissue, the JCM900 4100TM is the evolution of the JCM800 adding another channel, two reverb options and two gain features. An amp built to go on the road and be on the stage with a sound loud enough to fill stadiums. ', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `mail` text NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `mail`, `admin`, `password`) VALUES
(2, 'Jazmin Rodriguez', 'admin@demo.com', 1, '$2y$10$GTv/9REa4kOf2Z5TfceeBuekvJu51y5TZszn.KSss4g7cG3uBuuMa'),
(3, 'Nicolas Moran', 'user@demo.com', 0, '$2y$10$G6uRaAwULVMRXB3TL0pqUuTHy9173Sh9kD5OWeiMD2GQDZkqNZxqO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adminkey`
--
ALTER TABLE `adminkey`
  ADD UNIQUE KEY `value` (`value`) USING HASH;

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_category` (`id_category`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD UNIQUE KEY `id` (`id`,`nombre`,`mail`) USING HASH,
  ADD UNIQUE KEY `mail` (`mail`) USING HASH;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
