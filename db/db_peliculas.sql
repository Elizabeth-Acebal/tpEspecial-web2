-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2023 a las 20:45:23
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `géneros`
--

CREATE TABLE `géneros` (
  `Género` varchar(40) NOT NULL,
  `id_género` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `géneros`
--

INSERT INTO `géneros` (`Género`, `id_género`) VALUES
('Acción', 1),
('Animación', 2),
('Ciencia ficción', 3),
('Drama', 4),
('Comedia', 5),
('Terror', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `peliculas_id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descripcion` text NOT NULL,
  `director` varchar(45) NOT NULL,
  `calificacion` varchar(45) NOT NULL,
  `id_género` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`peliculas_id`, `titulo`, `descripcion`, `director`, `calificacion`, `id_género`) VALUES
(1, 'LOS INDESTRUCTIBLES 4', 'Cuarta entrega de la saga de \"Los mercenarios\". El veterano mercenario Barney “Esquizo” Ross (Sylvester Stallone) y su equipo de estrellas, formado por los hombres más duros (Jason Statham, Dolph Lundgren, 50 Cent, Megan Fox…), afrontan un nuevo desafío, en una trama cargada de acción. Para superarlo y salir airosos, deberán recurrir a su ingenio, experiencia y a la fuerza bruta que los caracteriza', 'Scott Waugh', 'Apta para mayores de 13 años', 1),
(2, 'NO ME ROMPAN', 'Angela (Carla Peterson) y Vera (Julieta Diaz), son dos mujeres a punto de explotar por las presiones diarias. Luego de conocerse en un grupo de manejo de ira, terminarán trabajando juntas para desenmascarar a un gurú que promete la belleza eterna, en un plan repleto de enredos y situaciones hilarantes.', 'Azul Lombardía', 'Apta para mayores de 13 años', 5),
(3, 'VAMPIRO AL RESCATE', 'El eternamente joven y siempre elegante Vladimir el vampiro inmortal, no ha podido encontrar una novia durante trescientos años. Ha intimidado, secuestrado y convertido a varias princesas en ranas, pero eso no ha facilitado el cortejo para el príncipe de las tinieblas. Mientras tanto, todo lo que la bella doncella Bárbara la Valiente hace es luchar contra los posibles pretendientes en la arena, pretendientes que solo codician su dote. Pero el Rey Lenteja descubrió cómo llegar a Bárbara y es también el punto débil de Vladimir. Aunque olvidó tener una cosa en cuenta: a pesar de que tiene la vida y el corazón de Vladimir en sus manos, todavía hay espacio en su corazón para que el amor cobre vida…', 'Roman Artemiev', 'Apta para todo publico', 2),
(4, 'LA MONJA 2', '1956, Francia. Un sacerdote es asesinado, un mal se extiende y la hermana Irene se enfrenta de nuevo a la fuerza malévola de Valak, la monja demonio', 'Michael Chaves', 'Apta para mayores de 13 años', 6),
(5, 'SONIDO DE LIBERTAD', 'Sonido De Libertad, basada en una increíble historia real, trae luz y esperanza al obscuro mundo del tráfico de menores. Después de rescatar a un niño de los traficantes, un agente federal descubre que la hermana del niño todavía está cautiva y decide embarcarse en una peligrosa misión para salvarla. Con el tiempo en su contra, renuncia a su trabajo y se adentra en lo profundo de la selva colombiana, poniendo su vida en riesgo para liberarla y traerla de vuelta a casa.', 'Alejandro Monteverde', 'Apta para mayores de 13 años', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(45) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `géneros`
--
ALTER TABLE `géneros`
  ADD PRIMARY KEY (`id_género`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`peliculas_id`),
  ADD KEY `fk_peliculas_género` (`id_género`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `géneros`
--
ALTER TABLE `géneros`
  MODIFY `id_género` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `peliculas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(45) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `fk_peliculas_género` FOREIGN KEY (`id_género`) REFERENCES `géneros` (`id_género`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
