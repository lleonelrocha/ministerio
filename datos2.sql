-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2015 a las 18:34:55
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `datos2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE IF NOT EXISTS `autores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `pais` varchar(255) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id`, `nombre`, `apellido`, `pais`, `fecha_nacimiento`, `created_at`, `updated_at`) VALUES
(1, 'Jorge', 'Jose', 'Colombiano', '2015-07-01', NULL, NULL),
(2, 'Roberto', 'Vargas', 'Paraguay', '2015-04-01', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre`, `apellido`, `texto`, `post_id`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'Rodrigo', 'Perez', 'Quisque placerat nec nunc non facilisis. Ut vel tortor purus. Vestibulum non arcu quis lacus auctor hendrerit. Duis eu odio sed dui aliquam volutpat id in tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ', 19, '2015-07-23 16:19:32', '2015-07-23 18:15:49', ''),
(2, 'Juan', 'Manuel', 'Quisque placerat nec nunc non facilisis. Ut vel tortor purus. Vestibulum non arcu quis lacus auctor hendrerit.', 20, '2015-07-23 16:18:30', '2015-07-23 18:16:55', ''),
(3, 'Leandro', 'Rocha', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec ex sed nulla euismod aliquet. Integer magna sem, sodales nec porta at, aliquet sed est.', 19, '2015-07-23 18:31:00', '2015-07-23 18:31:00', ''),
(4, 'Julian', 'Perez', 'Quisque placerat nec nunc non facilisis. Ut vel tortor purus. Vestibulum non arcu quis lacus auctor hendrerit. Duis eu odio sed dui aliquam volutpat id in tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ', 19, '2015-07-23 19:20:52', '2015-07-23 19:20:52', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE IF NOT EXISTS `libros` (
  `id` int(6) unsigned NOT NULL,
  `editorial` varchar(30) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `autor_id` int(11) NOT NULL,
  `fecha_edicion` varchar(50) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `editorial`, `nombre`, `autor_id`, `fecha_edicion`, `created_at`, `updated_at`) VALUES
(1, 'JP', 'El ceibo', 1, '20 de enero 1997', '', ''),
(2, 'La Pde', 'Maraica', 2, '01 de febrero 1843', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros_users`
--

CREATE TABLE IF NOT EXISTS `libros_users` (
  `user_id` int(11) NOT NULL,
  `libro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros_users`
--

INSERT INTO `libros_users` (`user_id`, `libro_id`) VALUES
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `descripcion`, `image`, `titulo`, `remember_token`, `updated_at`, `created_at`) VALUES
(1, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam imperdiet luctus feugiat. Etiam vitae diam sed tellus suscipit laoreet scelerisque aliquet lacus. Maecenas viverra feugiat mattis. Nullam varius tempor semper. Mauris placerat odio a porta laoreet. Mauris justo metus, hendrerit ac mi eget, vehicula ultrices urna. In nec massa justo. Vestibulum non imperdiet mauris. Quisque laoreet tortor non diam porttitor, eget semper quam porttitor. Phasellus vitae lacus tortor. Fusce augue nisl, rutrum sodales aliquam sit amet, vehicula id turpis. Fusce quis ex posuere, dictum mi sed, fringilla ex. Duis ex odio, eleifend non ornare eu, malesuada sit amet ex. Etiam volutpat lacus eget quam elementum vehicula. Cras ipsum lacus, finibus id leo id, efficitur rhoncus lectus. Aliquam nec interdum enim, sit amet convallis orci.', 'http://image.com/3482u9', 'Lorem ipsum dolor', '', '2015-07-16 20:25:32', '0000-00-00 00:00:00'),
(2, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam imperdiet luctus feugiat. Etiam vitae diam sed tellus suscipit laoreet scelerisque aliquet lacus. Maecenas viverra feugiat mattis. Nullam varius tempor semper. Mauris placerat odio a porta laoreet. Mauris justo metus, hendrerit ac mi eget, vehicula ultrices urna. In nec massa justo. Vestibulum non imperdiet mauris. Quisque laoreet tortor non diam porttitor, eget semper quam porttitor. Phasellus vitae lacus tortor. Fusce augue nisl, rutrum sodales aliquam sit amet, vehicula id turpis. Fusce quis ex posuere, dictum mi sed, fringilla ex. Duis ex odio, eleifend non ornare eu, malesuada sit amet ex. Etiam volutpat lacus eget quam elementum vehicula. Cras ipsum lacus, finibus id leo id, efficitur rhoncus lectus. Aliquam nec interdum enim, sit amet convallis orci.', 'http://image.com/093284', 'Lorem ipsum dolor', '', '2015-07-16 20:25:37', '0000-00-00 00:00:00'),
(3, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam imperdiet luctus feugiat. Etiam vitae diam sed tellus suscipit laoreet scelerisque aliquet lacus. Maecenas viverra feugiat mattis. Nullam varius tempor semper. Mauris placerat odio a porta laoreet. Mauris justo metus, hendrerit ac mi eget, vehicula ultrices urna. In nec massa justo. Vestibulum non imperdiet mauris. Quisque laoreet tortor non diam porttitor, eget semper quam porttitor. Phasellus vitae lacus tortor. Fusce augue nisl, rutrum sodales aliquam sit amet, vehicula id turpis. Fusce quis ex posuere, dictum mi sed, fringilla ex. Duis ex odio, eleifend non ornare eu, malesuada sit amet ex. Etiam volutpat lacus eget quam elementum vehicula. Cras ipsum lacus, finibus id leo id, efficitur rhoncus lectus. Aliquam nec interdum enim, sit amet convallis orci.', 'http://image.com/329084', 'Lorem ipsum dolor', '', '2015-07-16 20:25:42', '0000-00-00 00:00:00'),
(4, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam imperdiet luctus feugiat. Etiam vitae diam sed tellus suscipit laoreet scelerisque aliquet lacus. Maecenas viverra feugiat mattis. Nullam varius tempor semper. Mauris placerat odio a porta laoreet. Mauris justo metus, hendrerit ac mi eget, vehicula ultrices urna. In nec massa justo. Vestibulum non imperdiet mauris. Quisque laoreet tortor non diam porttitor, eget semper quam porttitor. Phasellus vitae lacus tortor. Fusce augue nisl, rutrum sodales aliquam sit amet, vehicula id turpis. Fusce quis ex posuere, dictum mi sed, fringilla ex. Duis ex odio, eleifend non ornare eu, malesuada sit amet ex. Etiam volutpat lacus eget quam elementum vehicula. Cras ipsum lacus, finibus id leo id, efficitur rhoncus lectus. Aliquam nec interdum enim, sit amet convallis orci.', 'http://image.com/234092', 'Lorem ipsum dolor', '', '2015-07-16 20:25:46', '0000-00-00 00:00:00'),
(5, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam imperdiet luctus feugiat. Etiam vitae diam sed tellus suscipit laoreet scelerisque aliquet lacus. Maecenas viverra feugiat mattis. Nullam varius tempor semper. Mauris placerat odio a porta laoreet. Mauris justo metus, hendrerit ac mi eget, vehicula ultrices urna. In nec massa justo. Vestibulum non imperdiet mauris. Quisque laoreet tortor non diam porttitor, eget semper quam porttitor. Phasellus vitae lacus tortor. Fusce augue nisl, rutrum sodales aliquam sit amet, vehicula id turpis. Fusce quis ex posuere, dictum mi sed, fringilla ex. Duis ex odio, eleifend non ornare eu, malesuada sit amet ex. Etiam volutpat lacus eget quam elementum vehicula. Cras ipsum lacus, finibus id leo id, efficitur rhoncus lectus. Aliquam nec interdum enim, sit amet convallis orci.', 'http://image.com/324908', 'Lorem ipsum dolor', '', '2015-07-16 20:25:51', '0000-00-00 00:00:00'),
(6, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam imperdiet luctus feugiat. Etiam vitae diam sed tellus suscipit laoreet scelerisque aliquet lacus. Maecenas viverra feugiat mattis. Nullam varius tempor semper. Mauris placerat odio a porta laoreet. Mauris justo metus, hendrerit ac mi eget, vehicula ultrices urna. In nec massa justo. Vestibulum non imperdiet mauris. Quisque laoreet tortor non diam porttitor, eget semper quam porttitor. Phasellus vitae lacus tortor. Fusce augue nisl, rutrum sodales aliquam sit amet, vehicula id turpis. Fusce quis ex posuere, dictum mi sed, fringilla ex. Duis ex odio, eleifend non ornare eu, malesuada sit amet ex. Etiam volutpat lacus eget quam elementum vehicula. Cras ipsum lacus, finibus id leo id, efficitur rhoncus lectus. Aliquam nec interdum enim, sit amet convallis orci.', 'http://image.com/2309482', 'Lorem ipsum dolor', '', '2015-07-16 20:25:55', '0000-00-00 00:00:00'),
(18, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis. Vivamus elementum, neque in convallis feugiat, leo leo imperdiet libero, vitae varius dui augue a urna. Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros. Phasellus dignissim fringilla mauris sed congue. Mauris cursus ante eu libero iaculis, a ultricies mi efficitur. Pellentesque vitae nulla feugiat, placerat nisl in, pulvinar nibh. Quisque at maximus nisl, eget imperdiet arcu. Mauris non justo id mauris cursus aliquet vitae eu justo.', 'http://image.com', 'Lorem ipsum dolor', '', '2015-07-17 17:07:42', '2015-07-17 17:07:42'),
(19, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis. Vivamus elementum, neque in convallis feugiat, leo leo imperdiet libero, vitae varius dui augue a urna. Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros. Phasellus dignissim fringilla mauris sed congue. Mauris cursus ante eu libero iaculis, a ultricies mi efficitur. Pellentesque vitae nulla feugiat, placerat nisl in, pulvinar nibh. Quisque at maximus nisl, eget imperdiet arcu. Mauris non justo id mauris cursus aliquet vitae eu justo.', 'http://image.com/3209480', 'Lorem ipsum dolor', '', '2015-07-17 17:08:37', '2015-07-17 17:08:37'),
(20, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis. Vivamus elementum, neque in convallis feugiat, leo leo imperdiet libero, vitae varius dui augue a urna. Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros. Phasellus dignissim fringilla mauris sed congue. Mauris cursus ante eu libero iaculis, a ultricies mi efficitur. Pellentesque vitae nulla feugiat, placerat nisl in, pulvinar nibh. Quisque at maximus nisl, eget imperdiet arcu. Mauris non justo id mauris cursus aliquet vitae eu justo.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis. Vivamus elementum, neque in convallis feugiat, leo leo imperdiet libero, vitae varius dui augue a urna. Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros. Phasellus dignissim fringilla mauris sed congue. Mauris cursus ante eu libero iaculis, a ultricies mi efficitur. Pellentesque vitae nulla feugiat, placerat nisl in, pulvinar nibh. Quisque at maximus nisl, eget imperdiet arcu. Mauris non justo id mauris cursus aliquet vitae eu justo.', 'http://image.com/3904585', 'Lorem ipsum dolor sit amet', '', '2015-07-17 17:09:04', '2015-07-17 17:09:04'),
(21, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a justo nulla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce interdum nunc est, in eleifend justo vulputate ut. Nunc ac consectetur neque. Ut porta malesuada hendrerit. Nam vitae eros purus. Maecenas pharetra aliquam turpis at rutrum. Nulla nec viverra tortor. Quisque feugiat pretium facilisis. Aenean egestas, felis ut interdum elementum, lectus tellus fermentum massa, eu pretium justo turpis tempor odio. In tincidunt, velit eu commodo convallis, lacus magna vulputate arcu, ut ultricies nunc nisl id velit. Quisque eu euismod arcu.', 'http://image.com/098456456', 'Lorem ipsum dolor', '', '2015-07-21 16:26:00', '2015-07-21 16:26:00'),
(22, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis. Vivamus elementum, neque in convallis feugiat, leo leo imperdiet libero, vitae varius dui augue a urna. Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros. Phasellus dignissim fringilla mauris sed congue. Mauris cursus ante eu libero iaculis, a ultricies mi efficitur. Pellentesque vitae nulla feugiat, placerat nisl in, pulvinar nibh. Quisque at maximus nisl, eget imperdiet arcu. Mauris non justo id mauris cursus aliquet vitae eu justo.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis. Vivamus elementum, neque in convallis feugiat, leo leo imperdiet libero, vitae varius dui augue a urna. Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros. Phasellus dignissim fringilla mauris sed congue. Mauris cursus ante eu libero iaculis, a ultricies mi efficitur. Pellentesque vitae nulla feugiat, placerat nisl in, pulvinar nibh. Quisque at maximus nisl, eget imperdiet arcu. Mauris non justo id mauris cursus aliquet vitae eu justo.', 'Chrysanthemum.jpg', 'Lorem ipsum dolor', '', '2015-07-22 19:17:56', '2015-07-22 19:17:56'),
(23, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a justo nulla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce interdum nunc est, in eleifend justo vulputate ut. Nunc ac consectetur neque. Ut porta malesuada hendrerit. Nam vitae eros purus. Maecenas pharetra aliquam turpis at rutrum. Nulla nec viverra tortor. Quisque feugiat pretium facilisis. Aenean egestas, felis ut interdum elementum, lectus tellus fermentum massa, eu pretium justo turpis tempor odio. In tincidunt, velit eu commodo convallis, lacus magna vulputate arcu, ut ultricies nunc nisl id velit. Quisque eu euismod arc', 'Chrysanthemum.jpg', 'Lorem ipsum ', '', '2015-07-22 19:18:33', '2015-07-22 19:18:33'),
(24, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a justo nulla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce interdum nunc est, in eleifend justo vulputate ut. Nunc ac consectetur neque. Ut porta malesuada hendrerit. Nam vitae eros purus. Maecenas pharetra aliquam turpis at rutrum. Nulla nec viverra tortor. Quisque feugiat pretium facilisis. Aenean egestas, felis ut interdum elementum, lectus tellus fermentum massa, eu pretium justo turpis tempor odio. In tincidunt, velit eu commodo convallis, lacus magna vulputate arcu, ut ultricies nunc nisl id velit. Quisque eu euismod arc', 'Chrysanthemum.jpg', 'Lorem ipsum ', '', '2015-07-22 19:18:33', '2015-07-22 19:18:33'),
(25, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a justo nulla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce interdum nunc est, in eleifend justo vulputate ut. Nunc ac consectetur neque. Ut porta malesuada hendrerit. Nam vitae eros purus. Maecenas pharetra aliquam turpis at rutrum. Nulla nec viverra tortor. Quisque feugiat pretium facilisis. Aenean egestas, felis ut interdum elementum, lectus tellus fermentum massa, eu pretium justo turpis tempor odio. In tincidunt, velit eu commodo convallis, lacus magna vulputate arcu, ut ultricies nunc nisl id velit. Quisque eu euismod arc', 'Chrysanthemum.jpg', 'Lorem ipsum dolor consectetur adipiscing', '', '2015-07-22 19:18:51', '2015-07-22 19:18:51'),
(26, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis. Vivamus elementum, neque in convallis feugiat, leo leo imperdiet libero, vitae varius dui augue a urna. Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros. Phasellus dignissim fringilla mauris sed congue. Mauris cursus ante eu libero iaculis, a ultricies mi efficitur. Pellentesque vitae nulla feugiat, placerat nisl in, pulvinar nibh. Quisque at maximus nisl, eget imperdiet arcu. Mauris non justo id mauris cursus aliquet vitae eu justo', 'Chrysanthemum.jpg', 'Mauris non justo id mauris cursus aliquet vitae eu justo', '', '2015-07-22 19:19:19', '2015-07-22 19:19:19'),
(27, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis. Vivamus elementum, neque in convallis feugiat, leo leo imperdiet libero, vitae varius dui augue a urna. Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros. Phasellus dignissim fringilla mauris sed congue. Mauris cursus ante eu libero iaculis, a ultricies mi efficitur. Pellentesque vitae nulla feugiat, placerat nisl in, pulvinar nibh. Quisque at maximus nisl, eget imperdiet arcu. Mauris non justo id mauris cursus aliquet vitae eu justo', 'Chrysanthemum.jpg', 'Pellentesque vitae nulla feugiat, placerat nisl in, pulvinar nibh', '', '2015-07-22 19:19:46', '2015-07-22 19:19:46'),
(28, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis.', 'Chrysanthemum.jpg', 'Cras consequat fringilla nisi id porta', '', '2015-07-22 19:21:23', '2015-07-22 19:21:23'),
(30, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a justo nulla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce interdum nunc est, in eleifend justo vulputate ut. Nunc ac consectetur neque. Ut porta malesuada hendrerit.', 'Chrysanthemum.jpg', 'Lorem ipsum dolor sit amet', '', '2015-07-22 20:02:45', '2015-07-22 20:02:45'),
(31, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a justo nulla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce interdum nunc est, in eleifend justo vulputate ut. Nunc ac consectetur neque. Ut porta malesuada hendrerit. Nam vitae eros purus. Maecenas pharetra aliquam turpis at rutrum. Nulla nec viverra tortor. Quisque feugiat pretium facilisis. Aenean egestas, felis ut interdum elementum, lectus tellus fermentum massa, eu pretium justo turpis tempor odio.', 'Chrysanthemum.jpg', 'Nulla nec viverra tortor. Quisque feugiat pretium facilisis. Aenean egestas', '', '2015-07-22 20:03:16', '2015-07-22 20:03:16'),
(32, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis. Vivamus elementum, neque in convallis feugiat, leo leo imperdiet libero, vitae varius dui augue a urna. Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros. Phasellus dignissim fringilla mauris sed congue. Mauris cursus ante eu libero iaculis, a ultricies mi efficitur', 'Chrysanthemum.jpg', 'Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros. Phasellus dignissim fringilla mauris sed congue', '', '2015-07-22 20:04:11', '2015-07-22 20:04:11'),
(33, 5, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis. Vivamus elementum, neque in convallis feugiat, leo leo imperdiet libero, vitae varius dui augue a urna. Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros. Phasellus dignissim fringilla mauris sed congue. Mauris cursus ante eu libero iaculis, a ultricies mi efficitur. Pellentesque vitae nulla feugiat, placerat nisl in, pulvinar nibh. Quisque at maximus nisl, eget imperdiet arcu. Mauris non justo id mauris cursus aliquet vitae eu justo.', 'Chrysanthemum.jpg', ' Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros', '', '2015-07-22 20:04:54', '2015-07-22 20:04:54'),
(34, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis. Vivamus elementum, neque in convallis feugiat, leo leo imperdiet libero, vitae varius dui augue a urna. Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros. Phasellus dignissim fringilla mauris sed congue. Mauris cursus ante eu libero iaculis, a ultricies mi efficitur. Pellentesque vitae nulla feugiat, placerat nisl in, pulvinar nibh. Quisque at maximus nisl, eget imperdiet arcu. Mauris non justo id mauris cursus aliquet vitae eu justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis. Vivamus elementum, neque in convallis feugiat, leo leo imperdiet libero, vitae varius dui augue a urna. Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros. Phasellus dignissim fringilla mauris sed congue. Mauris cursus ante eu libero iaculis, a ultricies mi efficitur. Pellentesque vitae nulla feugiat, placerat nisl in, pulvinar nibh. Quisque at maximus nisl, eget imperdiet arcu. Mauris non justo id mauris cursus aliquet vitae eu justo.', 'Chrysanthemum.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '', '2015-07-22 20:05:29', '2015-07-22 20:05:29'),
(35, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis. Vivamus elementum, neque in convallis feugiat, leo leo imperdiet libero, vitae varius dui augue a urna. Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros. Phasellus dignissim fringilla mauris sed congue. Mauris cursus ante eu libero iaculis, a ultricies mi efficitur', 'Chrysanthemum.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit', '', '2015-07-22 20:06:16', '2015-07-22 20:06:16'),
(36, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis. Vivamus elementum, neque in convallis feugiat, leo leo imperdiet libero, vitae varius dui augue a urna. Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros. Phasellus dignissim fringilla mauris sed congue. Mauris cursus ante eu libero iaculis, a ultricies mi efficitur. Pellentesque vitae nulla feugiat, placerat nisl in, pulvinar nibh. Quisque at maximus nisl, eget imperdiet arcu. Mauris non justo id mauris cursus aliquet vitae eu justo.', 'Chrysanthemum.jpg', 'Mauris non justo id mauris cursus aliquet vitae eu justo.', '', '2015-07-22 20:06:51', '2015-07-22 20:06:51'),
(37, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis.', 'Chrysanthemum.jpg', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis', '', '2015-07-22 20:07:15', '2015-07-22 20:07:15'),
(38, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a justo nulla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce interdum nunc est, in eleifend justo vulputate ut. Nunc ac consectetur neque. Ut porta malesuada hendrerit. Nam vitae eros purus. Maecenas pharetra aliquam turpis at rutrum. Nulla nec viverra tortor. Quisque feugiat pretium facilisis. Aenean egestas, felis ut interdum elementum, lectus tellus fermentum massa, eu pretium justo turpis tempor odio.', 'Chrysanthemum.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', '', '2015-07-22 20:11:22', '2015-07-22 20:11:22'),
(39, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis. Vivamus elementum, neque in convallis feugiat, leo leo imperdiet libero, vitae varius dui augue a urna. Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros. Phasellus dignissim fringilla mauris sed congue. Mauris cursus ante eu libero iaculis, a ultricies mi efficitur. Pellentesque vitae nulla feugiat, placerat nisl in, pulvinar nibh. Quisque at maximus nisl, eget imperdiet arcu. Mauris non justo id mauris cursus aliquet vitae eu justo ', 'Chrysanthemum.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '', '2015-07-22 20:11:47', '2015-07-22 20:11:47'),
(40, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris blandit varius facilisis. Vivamus elementum, neque in convallis feugiat, leo leo imperdiet libero, vitae varius dui augue a urna. Morbi mattis nisl rhoncus, pharetra diam eget, mollis eros. Phasellus dignissim fringilla mauris sed congue. Mauris cursus ante eu libero iaculis, a ultricies mi efficitur. Pellentesque vitae nulla feugiat, placerat nisl in, pulvinar nibh. Quisque at maximus nisl, eget imperdiet arcu. Mauris non justo id mauris cursus aliquet vitae eu justo', 'Chrysanthemum.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '', '2015-07-22 20:12:13', '2015-07-22 20:12:13'),
(41, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae mollis velit, sit amet tempus mi. Aliquam vel eros id libero convallis lacinia. Curabitur pretium nulla ac posuere iaculis. Suspendisse facilisis dolor sed ullamcorper suscipit. Vivamus nec risus at turpis varius fermentum quis quis leo. Aenean nec mi nec enim gravida feugiat. Cras consequat fringilla nisi id porta.', 'Chrysanthemum.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '', '2015-07-22 20:57:23', '2015-07-22 20:57:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2015-07-01 14:45:53', '0000-00-00 00:00:00'),
(2, 'user', '2015-07-01 17:10:55', '0000-00-00 00:00:00'),
(3, 'super_admin', '2015-07-01 17:11:31', '0000-00-00 00:00:00'),
(4, 'super_user', '2015-07-17 15:47:48', '2015-07-17 18:47:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles_roles`
--

CREATE TABLE IF NOT EXISTS `profiles_roles` (
  `profile_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profiles_roles`
--

INSERT INTO `profiles_roles` (`profile_id`, `role_id`) VALUES
(1, 1),
(3, 1),
(1, 2),
(3, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(1, 4),
(3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebas`
--

CREATE TABLE IF NOT EXISTS `pruebas` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `web` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pruebas`
--

INSERT INTO `pruebas` (`id`, `nombre`, `apellido`, `web`, `email`, `password`, `created_at`, `updated_at`) VALUES
(NULL, 'Leandro', 'Perez', 'asda', 'Luella.Hagenlkes@Hoppe.org', NULL, '2015-07-27 14:53:28', '2015-07-27 14:53:28'),
(NULL, 'Julian', 'as', 'asd', 'Luella.Hagenes@Hoppe.org', NULL, '2015-07-27 14:55:25', '2015-07-27 14:55:25'),
(NULL, '', '', '', 'Luella.Hagenes@Hoppe.org', NULL, '2015-07-27 15:21:22', '2015-07-27 15:21:22'),
(NULL, 'Julian', 'Rocha', 'asda', 'Luella.Hagenes@Hoppe.org', NULL, '2015-07-27 15:21:37', '2015-07-27 15:21:37'),
(NULL, 'asd', '', 'asd', 'Luella.Hagenes@Hoppe.org', NULL, '2015-07-27 15:26:16', '2015-07-27 15:26:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'create', '2015-07-01 17:30:25', '0000-00-00 00:00:00'),
(2, 'update', '2015-07-01 17:30:45', '0000-00-00 00:00:00'),
(3, 'view', '2015-07-08 15:19:44', '0000-00-00 00:00:00'),
(4, 'delete', '2015-07-08 15:19:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `estado` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `estado`, `profile_id`, `created_at`, `updated_at`, `remember_token`) VALUES
(2, 'leandro', 'rocha', 'leandro@hotmail.com', '$2y$10$DT.9u55Ipt6U2V2vB2lhBuY6okhuiYj17NHycN2kSSUhQ0xt8d30O', '(879) 238497293', 0, 3, '2015-07-28 16:27:30', '2015-07-28 19:27:30', 'PXlYQ6vq6PB9yZaa1o1RgltE1o1UHNUvdmFGrRIkvHSrnh2O573uUT2v6bUO'),
(3, 'Luella', 'Hagenes', 'Luella.Hagenes@Hoppe.org', '$2y$10$DT.9u55Ipt6U2V2vB2lhBuY6okhuiYj17NHycN2kSSUhQ0xt8d30O', '(324) 2390482', 0, 1, '2015-07-28 16:30:34', '2015-07-28 19:30:34', '33eKzGAOfMMg5hTJu3rDcoQB4kib5ThODoFIFZ8zwz6NSyIj89feTDv7oj9v'),
(4, 'usuario', 'usuario_324', 'usuario@hotmail.com', '$2y$10$DT.9u55Ipt6U2V2vB2lhBuY6okhuiYj17NHycN2kSSUhQ0xt8d30O', '(342)23894792', 0, 2, '2015-07-27 13:34:06', '2015-07-27 16:34:06', 'PjI8ryNqYcoxa2mhc3GBiFLuE4mRK98KVHkDxJ8CMnxuILTSuHHxEW7IYVhz'),
(5, 'rodrigo', 'rodri', 'rodrigo@hotmail.com', '$2y$10$DT.9u55Ipt6U2V2vB2lhBuY6okhuiYj17NHycN2kSSUhQ0xt8d30O', '(879) 238497323593', 0, 2, '2015-07-28 16:25:23', '2015-07-28 19:25:23', 'xW8tyKWyUKE8znA2cuPS4yx09bPcfajZglHNaeG6zcIBb3HTnUMAsMEKW6a1'),
(6, 'Luella', 'Luella21', 'Luella@Hoppe.org', '', '32424234', 0, 2, '2015-07-20 15:15:03', '2015-07-20 18:15:03', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`), ADD KEY `autor_id` (`autor_id`);

--
-- Indices de la tabla `libros_users`
--
ALTER TABLE `libros_users`
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profiles_roles`
--
ALTER TABLE `profiles_roles`
  ADD PRIMARY KEY (`profile_id`,`role_id`), ADD KEY `fk_profiles_has_roles_roles1` (`role_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`profile_id`), ADD UNIQUE KEY `email_UNIQUE` (`email`), ADD KEY `fk_users_profiles` (`profile_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`autor_id`) REFERENCES `autores` (`id`);

--
-- Filtros para la tabla `libros_users`
--
ALTER TABLE `libros_users`
ADD CONSTRAINT `libros_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
ADD CONSTRAINT `libros_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
ADD CONSTRAINT `libros_users_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
ADD CONSTRAINT `libros_users_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `profiles_roles`
--
ALTER TABLE `profiles_roles`
ADD CONSTRAINT `fk_profiles_has_roles_profiles` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_profiles_has_roles_roles1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `fk_users_profiles` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
