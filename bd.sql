-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-12-2013 a las 00:19:08
-- Versión del servidor: 5.5.25a
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bibvir`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bv_coleccion`
--

CREATE TABLE IF NOT EXISTS `bv_coleccion` (
  `id_col` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_col`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `bv_coleccion`
--

INSERT INTO `bv_coleccion` (`id_col`, `nombre`, `descripcion`) VALUES
(9, 'Alta FantasÃ­a', 'FantasÃ­a heroica o fantasÃ­a Ã©pica es un subgÃ©nero del gÃ©nero fantÃ¡stico, principalmente de la literatura, y tambiÃ©n presente en la historieta, el cine fantÃ¡stico y los juegos de rol, caracterizado por la presencia de seres mitolÃ³gicos o fantÃ¡sticos, la ambientaciÃ³n ficticia de carÃ¡cter medieval, antiguo, indefinido o, en cualquier caso, sobre la base de sociedades tecnolÃ³gicamente atrasadas, y un fuerte componente mÃ¡gico y Ã©pico.'),
(10, 'Suspenso', 'Es un recurso utilizado en obras narrativas en diferentes medios (cine, historieta, literatura, etc.) que tiene como objetivo principal mantener al lector a la expectativa, generalmente en un estado de tensiÃ³n, de lo que pueda ocurrirle a los personajes, y por lo tanto atento al desarrollo del conflicto o nudo de la narraciÃ³n.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bv_documento`
--

CREATE TABLE IF NOT EXISTS `bv_documento` (
  `id_doc` int(20) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) NOT NULL,
  `autor` varchar(500) NOT NULL,
  `materia` varchar(500) NOT NULL,
  `resumen` varchar(1000) NOT NULL,
  `id_coleccion` int(10) NOT NULL,
  PRIMARY KEY (`id_doc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `bv_documento`
--

INSERT INTO `bv_documento` (`id_doc`, `titulo`, `autor`, `materia`, `resumen`, `id_coleccion`) VALUES
(6, 'El hobbit', 'Tolkien, J. R. R.', 'PoesÃ­a, FantasÃ­a, Ã‰pico', 'Es una novela fantÃ¡stica del filÃ³logo y escritor britÃ¡nico John Ronald Reuel Tolkien. Fue escrita por partes desde finales de los aÃ±os 1920 hasta principios de los aÃ±os 1930 y, en un principio, tan sÃ³lo tenÃ­a el objetivo de divertir a los hijos pequeÃ±os de Tolkien. No obstante, el manuscrito de la obra aÃºn sin acabar fue prestado por el escritor a varias personas y finalmente acabÃ³ en manos de la editorial George Allen & Unwin. Dispuestos a publicarla, los editores pidieron a Tolkien que finalizara la obra y El hobbit fue publicada el 21 de septiembre de 1937 en el Reino Unido.', 9),
(7, 'El SeÃ±or de los Anillos', 'Tolkien, J. R. R.', 'PoesÃ­a, FantasÃ­a, Ã‰pico', 'Es una novela de fantasÃ­a Ã©pica escrita por el filÃ³logo y escritor britÃ¡nico J. R. R. Tolkien.\r\nSu historia se desarrolla en la Tercera Edad del Sol de la Tierra Media, un lugar ficticio poblado por hombres y otras razas antropomorfas como los hobbits, los elfos o los enanos, asÃ­ como por muchas otras criaturas reales y fantÃ¡sticas. La novela narra el viaje del protagonista principal, el hobbit Frodo BolsÃ³n, para destruir el Anillo Ãšnico y la consiguiente guerra que provocarÃ¡ el enemigo para recuperarlo, ya que es la principal fuente de poder de su creador, el SeÃ±or oscuro Sauron.', 9),
(8, 'Las CrÃ³nicas de Narnia: El leÃ³n, la bruja y el ropero', 'Lewis, C. S.', 'PoesÃ­a, FantasÃ­a, Ã‰pico', 'Cuatro niÃ±os descubren un armario que les sirve de puerta de acceso a Narnia, un paÃ­s congelado en un invierno eterno y sin Navidad. Entonces, cumpliendo con las viejas profecÃ­as, los niÃ±os (junto con el leÃ³n Aslan) serÃ¡n encargados de liberar al reino de la tiranÃ­a de la Bruja Blanca(Reina Jadis como se presenta mejor en el libro El Sobrino del Mago) y recuperar el verano, la luz y la alegrÃ­a para todos los habitantes de Narnia.', 9),
(9, 'Las CrÃ³nicas de Narnia: Prince Caspian', 'Lewis, C. S.', 'PoesÃ­a, FantasÃ­a, Ã‰pico', 'Un prÃ­ncipe, al que se le ha negado el trono (que es legÃ­timamente suyo), reÃºne un ejÃ©rcito en un intento desesperado de librar a su paÃ­s de un rey desleal. Pero al final, es un combate de honor entre dos hombres solos lo que decidirÃ¡ el destino de todo un mundo.', 9),
(10, 'El cÃ³digo Da Vinci', 'Brown, Dan', 'Suspenso, Esoterismo, ConspiraciÃ³n', 'El Opus Dei estarÃ­a presuntamente involucrado en una conspiraciÃ³n para encubrir la verdadera historia de Jesucristo, quien se habrÃ­a casado con MarÃ­a Magdalena y habrÃ­a tenido descendientes que llegaron a Francia, en concreto la dinastÃ­a merovingia. La teorÃ­a expuesta literariamente por Brown implica que el cristianismo habrÃ­a vivido conscientemente dentro de una mentira fraguada por la Iglesia catÃ³lica durante los Ãºltimos dos mil aÃ±os.', 10),
(11, 'Ãngeles y demonios', 'Brown, Dan', 'Suspenso, Esoterismo, ConspiraciÃ³n', 'El profesor de simbologÃ­a Robert Langdon, recibe una misteriosa llamada a las tantas de la madrugada y se ve envuelto en una persecuciÃ³n en la que tratarÃ¡ de evitar la destrucciÃ³n del Vaticano. AcompaÃ±ado de la cientÃ­fica Vittoria Vetra, ambos deberÃ¡n encontrar la guarida de los Illuminati para detener a un hombre cuyo propÃ³sito es hacer explotar la antimateria y destruir el altar principal de la Iglesia junto a todas las personas que estÃ©n a su alrededor.', 10),
(12, 'El cÃ­rculo octogonus', 'Harris, Peter', 'Suspenso, Esoterismo, ConspiraciÃ³n', 'Roma, invierno de 1939, el papa PÃ­o XI, que ha lanzado dÃ©biles ataques contra el rÃ©gimen de Hitler, se estÃ¡ muriendo.  El Vaticano se agita ante la elecciÃ³n de su sucesor y en el mundo, que ya puede seguir las incidencias del cÃ³nclave a travÃ©s de la radio, hay gran expectaciÃ³n por conocer el nombre del nuevo pontÃ­fice. El Sicherheitsdienst -el servicio secreto nazi- ha puesto en marcha una operaciÃ³n con un siniestro y secreto propÃ³sito. Para conseguir su objetivo, los agentes de Hitler dispondrÃ¡n de mÃ¡s de una tonelada de lingotes de oro. La Santa Alianza -nombre tras el que se esconden los servicios secretos vaticanos- se moviliza y, ante la emergencia, recurre a una fraternidad secreta, el CÃ­rculo Octogonus, cuya fundaciÃ³n se atribuye a una enigmÃ¡tica mujer, Olimpia Maidalchini, y que siempre ha aparecido en los momentos de dificultad para la Iglesia. El Vaticano niega su existencia, pero en los pasillos de los palacios pontificios se rumorea acerca del CÃ­rculo Octog', 10),
(13, 'La Esperada', 'McGowan, Kathleen', 'Suspenso, Esoterismo, ConspiraciÃ³n', 'Mientras recorre JerusalÃ©n en busca de documentaciÃ³n para su prÃ³ximo libro, Maureen tiene extraÃ±as visiones en las que aparece una enigmÃ¡tica mujer. Es sÃ³lo una de las seÃ±ales que la empujan a averiguar el misterio de Maria Magdalena y a comprender su verdadero papel en la historia. Maureen viaja hasta Occitania, la tierra donde sigue vivo el legado de los cataros, y allÃ­ descubre que MarÃ­a fue esposa de JesÃºs y fundadora de una dinastÃ­a sagrada que llega hasta nuestros dÃ­as. La verdad estÃ¡ escrita de su puÃ±o y letra en el Ãºnico evangelio autÃ©ntico... un documento oculto desde hace siglos y que sÃ³lo otra mujer, la esperada, puede sacar a la luz. Una autÃ©ntica bomba de relojerÃ­a contra los cimientos del Vaticano, un tesoro que puede cambiar la historia de la Cristiandad. Un texto que muchos han muerto por preservar... y que otros estÃ¡n dispuestos a seguir matando para destruir.Mientras recorre JerusalÃ©n en busca de documentaciÃ³n para su prÃ³ximo libro, Maureen tien', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
