-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-01-2022 a las 00:52:28
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pipegrow`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `usuario` varchar(40) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `foto` varchar(40) DEFAULT NULL,
  `contra` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`usuario`, `nombre`, `foto`, `contra`) VALUES
('pipe', 'Andres Gonzalez', 'fotos.jpg', '1234'),
('root', 'root', 'root.png', 'root');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `cod_cate` int(11) NOT NULL,
  `cate_cate` varchar(100) DEFAULT NULL,
  `img_cate` varchar(100) DEFAULT NULL,
  `dir_cate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cod_cate`, `cate_cate`, `img_cate`, `dir_cate`) VALUES
(1, 'fertilizantes', '/images/fertilizantes/fertilizantes.jpg', '/tienda/baseCategorie.php?categorie=fertilizantes'),
(2, 'semillas', '/images/semillas/semillas.jpg', '/tienda/baseCategorie.php?categorie=semillas'),
(12, 'sustrato', '/images/sustrato/1642373207_pngegg.png', '/tienda/baseCategorie.php?categorie=sustrato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `nom_cli` varchar(40) DEFAULT NULL,
  `dira_cli` varchar(100) DEFAULT NULL,
  `dirb_cli` varchar(100) DEFAULT NULL,
  `ciud_cli` varchar(20) DEFAULT NULL,
  `codp_cli` varchar(20) DEFAULT NULL,
  `email_cli` varchar(50) DEFAULT NULL,
  `tel_cli` varchar(20) DEFAULT NULL,
  `ced_cli` varchar(12) NOT NULL,
  `adi_cli` text DEFAULT NULL,
  `contra_cli` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`nom_cli`, `dira_cli`, `dirb_cli`, `ciud_cli`, `codp_cli`, `email_cli`, `tel_cli`, `ced_cli`, `adi_cli`, `contra_cli`) VALUES
('andres felipe gonzales pino', 'diagonal 101a #2-08,', 'tienda los pinos, barrio e brillante, zona quinta de usme', 'bogota', '110511', 'andres.gonzalezp@cun.edu.co', '3124930278', '100000', 'chfghgfjhgj', 'Ylu/iSAqN3/iaRkmCt/94Q=='),
('andres felipe gonzales pino', 'diagonal 101a #2-08,', 'tienda los pinos, barrio e brillante, zona quinta de usme', 'bogota', '110511', 'andrespino2000@gmail.com', '3124930278', '1031183811', ' vbklbjnxcglcvnxñnpon', 'PJoY9oGVgHOO8A3Ysw5ETQ==');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventa`
--

CREATE TABLE `detalleventa` (
  `cod_det` int(11) NOT NULL,
  `ventas_det` int(11) DEFAULT NULL,
  `productos_det` int(11) DEFAULT NULL,
  `preuni_det` decimal(20,3) DEFAULT NULL,
  `canti_det` int(11) DEFAULT NULL,
  `descar_det` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalleventa`
--

INSERT INTO `detalleventa` (`cod_det`, `ventas_det`, `productos_det`, `preuni_det`, `canti_det`, `descar_det`) VALUES
(42, 39, 12, '170.000', 1, 0),
(43, 40, 5, '15.000', 1, 0),
(44, 40, 12, '170.000', 1, 0),
(45, 41, 8, '15.000', 1, 0),
(46, 42, 12, '170.000', 1, 0),
(47, 43, 7, '15.000', 1, 0),
(48, 44, 12, '170.000', 1, 0),
(49, 45, 12, '170.000', 1, 0),
(50, 46, 12, '170.000', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `cod_emp` int(11) NOT NULL,
  `empre_emp` varchar(80) DEFAULT NULL,
  `img_emp` varchar(80) DEFAULT NULL,
  `dir_emp` varchar(80) DEFAULT NULL,
  `cate_emp` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`cod_emp`, `empre_emp`, `img_emp`, `dir_emp`, `cate_emp`) VALUES
(1, 'gblak', '/images/fertilizantes/g-black/g-black.png', '/tienda/fertilizantes.php', 'fertilizantes'),
(2, 'geaseeds', '/images/semillas/geaseeds/geaseeds.png', '/tienda/semillas/geaseeds.php', 'semillas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `cod_pro` int(11) NOT NULL,
  `nom_pro` varchar(255) DEFAULT NULL,
  `desc_pro` text DEFAULT NULL,
  `val_pro` decimal(20,3) DEFAULT NULL,
  `img_pro` varchar(255) DEFAULT NULL,
  `dir_pro` varchar(255) DEFAULT NULL,
  `cati_pro` int(200) DEFAULT NULL,
  `cate_pro` varchar(100) DEFAULT NULL,
  `empre_pro` varchar(50) DEFAULT NULL,
  `tipo_pro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cod_pro`, `nom_pro`, `desc_pro`, `val_pro`, `img_pro`, `dir_pro`, `cati_pro`, `cate_pro`, `empre_pro`, `tipo_pro`) VALUES
(1, 'Tripack Top Crop', '<p>Con este tripack podrás conseguir un kit de fertilizantes completos para realizar un cultivo básico pero sin dejar al margen lo que es la producción y el sabor. La fórmula Top Crop es una fórmula de fertilizantes bio-minerales que aportan una densida</p>\n                         <p class=\"text-black\"><b>El kit Tripack de Top Crop se compone de:</b></p>\n				<b><p>-Top Veg de 250ml.</b></p>\n				<b><p>-Top Bloom de 250ml.</b></p>\n				<b><p>-Deeper Underground de 100ml.</b></p>', '100.000', '/images/fertilizantes/tripack-top-crop.jpg', '/tienda/fertilizantes/basefertilizantes.php?product=Tripack Top Crop', 5, 'fertilizantes', 'topcrop', 'todo'),
(2, 'Bud Bullk G-Black 250 ml', '<p>Es un nutriente orgánico mineral desarrollado para toda la etapa de floración, su formulación especial compuesta por extractos vegetales y precursores de vitaminas, garantizan un mayor tamaño, una mayor producción de la flor.</p>\r\n                                 <p class=\"text-black\"><b>Composición:</b></p>\r\n                                 <b><p>- Nitrógeno (N) 1%</b></p>\r\n                                 <b><p>- Fósforo soluble (P2O5) 5%</b></p>\r\n                                 <b><p>- Potasio (K2O) 6%</b></p>\r\n                                 <b><p>- Magnesio (MgO) 1%</b></p>\r\n                                 <p class=\"text-black\"><b>Aplicación:</b></p>\r\n                                 <p>Utilizar 2 ml por litro a partir de la tercera semana de floración en adelante.</p>', '38.000', '/images/fertilizantes/g-black.jpeg', '/tienda/fertilizantes/basefertilizantes.php?product=Bud Bullk G-Black 250 ml', 10, 'fertilizantes', 'gblak', 'flora'),
(3, 'Auto AK - Pack x 1', '<p>Auto Ak es considerada una de las mejores semillas autoflorecientes conocidas hasta el momento. Destaca por su gran vigor de crecimiento y desarrollo sativo compacto, llegando a alcanzar el metro de altura.</p>\r\n			   <p>Su efecto es fuerte e inmediato a nivel cerebral y seguidamente a nivel físico, ideal para su uso lúdico y para relajarse después de un largo día de trabajo.</p>\r\n			   <p class=\"text-black\"><b>TIPO:</b> Mostly Sativa 60%.</p>\r\n			   <p class=\"text-black\"><b>CBD:</b> 	Medio - Alto.</p>\r\n			   <p class=\"text-black\"><b>TIEMPO:</b> 70 - 88 Dias.</p>\r\n			   <p class=\"text-black\"><b>THC:</b> 14%.</p>\r\n			   <p class=\"text-black\"><b>PRODUCCIÓN:</b> 65-95 gr/m².</p>', '20.000', '/images/semillas/autoak.jpg', '/tienda/semillas/basesemillas.php?product=Auto AK - Pack x 1', 5, 'semillas', 'geaseeds', 'autoflorecientes'),
(4, 'Ak - Pack x 1', '<p>El potente efecto cerebral y estimulante de la AK es lo que la ha hecho merecedora de este nombre. Es ideal para consumir con amigos y realizar actividades cotidianas. Tiene un efecto cerebral muy potente y relaja el cuerpo manteniendo la cabeza despejada.</p>\r\n			   <p>Nuestra Ak es una planta de porte medio, de gran producción y escaso follaje con distancias internodales largas. Produce unos cogollos esponjosos y llenos de resina lo que hace de ella una variedad muy resistente a los hongos y podredumbres al permitir la circulación del aire entre sus flores.</p>\r\n			   <p class=\"text-black\"><b>TIPO:</b> Mostly Sativa 70%.</p>\r\n			   <p class=\"text-black\"><b>CBD:</b>   Medio - Alto.</p>\r\n			   <p class=\"text-black\"><b>TIEMPO:</b> 60 - 65 Dias.</p>\r\n			   <p class=\"text-black\"><b>THC:</b> 20%.</p>\r\n			   <p class=\"text-black\"><b>PRODUCCIÓN:</b> 500 - 550 gr/m².</p>', '15.000', '/images/semillas/akfemi.jpg', '/tienda/semillas/basesemillas.php?product=Ak - Pack x 1', 5, 'semillas', 'geaseeds', 'feminizadas'),
(5, 'Early Skunk - Pack x 1', '<p>Las semillas de Early Skunk darán lugar a una planta con un gran porte, extremadamente robusta, con gruesas ramificaciones repletas de cogollos sólidos y tan resinosos que parecen cristalizados. Early Skunk es una variedad muy productiva y versátil ya que se adapta fácilmente a cualquier medio.</p>\r\n			   <p>La variedad Early Skunk tiene un efecto limpio, potente y duradero. Te hará sentir una cálida sensación que hará que tu cuerpo y mente se transporte a otros lugares. Early Skunk es ideal para mitigar altos niveles de estrés y dolores corporales intensos.</p>\r\n			   <p class=\"text-black\"><b>TIPO:</b> Mostly Indica 55%.</p>\r\n			   <p class=\"text-black\"><b>CBD:</b>   Medio.</p>\r\n			   <p class=\"text-black\"><b>TIEMPO:</b> 50 - 55 Dias.</p>\r\n			   <p class=\"text-black\"><b>THC:</b> 18%.</p>\r\n			   <p class=\"text-black\"><b>PRODUCCIÓN:</b> 450 - 550 gr/m².</p>', '15.000', '/images/semillas/early.jpg', '/tienda/semillas/basesemillas.php?product=Early Skunk - Pack x 1', 5, 'semillas', 'geaseeds', 'feminizadas'),
(6, 'Cachalote - Pack x 1', '<p>Su efecto casi inmediato, físicamente estimulante y muy psicoactivo, provoca fácilmente hilaridad. Sus altos niveles de THC producen un efecto potente y duradero que estimula la mente a la vez que relaja el cuerpo por lo que posee un gran potencial terapéutico ya que ayuda a combatir los efectos secundarios de la quimioterapia y estimula el apetito.</p>\r\n			   <p>Sus flores, una vez curadas, desprenden un espeso aroma con el trasfondo fresco de la Widow algo perfumado, especiado y muy incensado, con notas cítricas a limón.</p>\r\n			   <p class=\"text-black\"><b>TIPO:</b> Mostly Sativa 70%.</p>\r\n			   <p class=\"text-black\"><b>CBD:</b>   Medio.</p>\r\n			   <p class=\"text-black\"><b>TIEMPO:</b> 65 - 70 Dias.</p>\r\n			   <p class=\"text-black\"><b>THC:</b> 23%.</p>\r\n			   <p class=\"text-black\"><b>PRODUCCIÓN:</b> 550 - 600 gr/m².</p>', '15.000', '/images/semillas/cachalote.jpg', '/tienda/semillas/basesemillas.php?product=Cachalote - Pack x 1', 5, 'semillas', 'geaseeds', 'feminizadas'),
(7, 'Amnesia - Pack x 1', '<p>Amnesia es una planta de porte alto, vigorosa, resistente y de rápida floración para ser una cepa sativa que produce unas preciosas flores compactas y resinosas. El humo, denso y cítrico, recuerda en paladar a sus antecesores Haze.</p>\r\n			   <p>Una de nuestras variedades más apreciadas, la Amnesia, tiene un alto nivel de THC que provoca un potente efecto cerebral, estimulante y alegre que luego da paso a un efecto más narcótico y relajante.</p>\r\n			   <p class=\"text-black\"><b>TIPO:</b> Mostly Sativa 80%.</p>\r\n			   <p class=\"text-black\"><b>CBD:</b>   Medio.</p>\r\n			   <p class=\"text-black\"><b>TIEMPO:</b> 65 - 70 Dias.</p>\r\n			   <p class=\"text-black\"><b>THC:</b> 22%.</p>\r\n			   <p class=\"text-black\"><b>PRODUCCIÓN:</b> 500 - 600 gr/m².</p>', '15.000', '/images/semillas/amnesia.jpg', '/tienda/semillas/basesemillas.php?product=Amnesia - Pack x 1', 5, 'semillas', 'geaseeds', 'feminizadas'),
(8, 'Bubble Fruit - Pack x 1', '<p>El efecto de la Bubble Fruit es cerebral y corporal, con un potente efecto psicoactivo, pasando del estado de euforia al de relajación corporal. Recomendable para actividades sociales y para estar en compañía y disfrutar de un buen ambiente.</p>\r\n			   <p>Desprende un aroma muy dulce aunque lo más característico es su sabor único, dulzón y afrutado, a chicle de fresa, una auténtica delicia que se convierte en imprescindible para los incondicionales de los sabores azucarados.</p>\r\n			   <p class=\"text-black\"><b>TIPO:</b> Mostly Indica 90%.</p>\r\n			   <p class=\"text-black\"><b>CBD:</b>   Medio.</p>\r\n			   <p class=\"text-black\"><b>TIEMPO:</b> 60 - 65 Dias.</p>\r\n			   <p class=\"text-black\"><b>THC:</b> 19%.</p>\r\n			   <p class=\"text-black\"><b>PRODUCCIÓN:</b> 450 - 500 gr/m².</p>', '15.000', '/images/semillas/bubble-fruit.jpg', '/tienda/semillas/basesemillas.php?product=Bubble Fruit - Pack x 1', 5, 'semillas', 'geaseeds', 'feminizadas'),
(9, 'Gealato Kush - Pack x 1', '<p>Gealato Kush es nuestro último lanzamiento, una genética de la que nos sentimos especialmente orgullosos. Esta nueva semilla de marihuana es un híbrido de ligera predominancia Indica (60%) cuyo origen se localiza en el área de la bahía de San Francisco. Esta mítica zona californiana ha dado muchas variedades campeonas a la industria cannábica. Como su propio nombre indica, el rasgo más característico de esta cepa es su marcado sabor dulzón que recuerda a un delicioso helado.</p>\r\n			   <p>Si se le aplica un poco de frío al final de la floración, nos sorprenderá con preciosos tonos morados oscuros que contrastarán con las tonalidades anaranjadas de los pistilos y el denso blanco de la resina que cubre los cogollos.</p>\r\n			   <p class=\"text-black\"><b>TIPO:</b> Mostly Indica 60%.</p>\r\n			   <p class=\"text-black\"><b>CBD:</b>   Medio.</p>\r\n			   <p class=\"text-black\"><b>TIEMPO:</b> 60 - 65 Dias.</p>\r\n			   <p class=\"text-black\"><b>THC:</b> 20%.</p>\r\n			   <p class=\"text-black\"><b>PRODUCCIÓN:</b> 500 - 550 gr/m².</p>', '15.000', '/images/semillas/gealato-kush.jpg', '/tienda/semillas/basesemillas.php?product=Gealato Kush - Pack x 1', 5, 'semillas', 'geaseeds', 'feminizadas'),
(12, 'Sustrato Topcrop Bulto 50L', '<p>Complete Mix de Top Crop es un sustrato preparado con una peque&ntilde;a dosis de fertilizantes para que tus plantas en crecimiento y esquejes reciban los nutrientes que necesitan. Tambi&eacute;n podremos utilizarlo si regamos habitualmente con fertilizantes, ya que las cantidades que contiene el sustrato son m&iacute;nimas.<br />\r\nLos componentes de primera calidad que lo componen permiten a tus plantas desarrollar un fuerte aparato radicular y asimilen grandes cantidades de nutrientes. Tiene una mezcla ideal de fibra de coco, turba de Sphagnum rubia, compost vegetal, perlita, mezcla s&oacute;lida de fertilizantes y leonardita.<br />\r\n<br />\r\n<strong>DESTACADOS:<br />\r\n<br />\r\nSustrato completo<br />\r\n50 Litros<br />\r\nApto para cualquier tipo de plantas<br />\r\n100% limpio<br />\r\n<br />\r\nMEDIDAS Y PESO:<br />\r\n<br />\r\nALTO: 78CM<br />\r\nANCHO: 40CM<br />\r\nPESO: 12.5KG<br />\r\nDISPONIBLE PARA ENVIO INMEDIATO</strong></p>\r\n', '170.000', '/images/sustrato/1642374192_sustrato top.jpg', '/tienda/sustrato/basesustrato.php?product=Sustrato Topcrop Bulto 50L', 1, 'sustrato', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `cod_tip` int(11) NOT NULL,
  `tipo_tip` varchar(80) DEFAULT NULL,
  `img_tip` varchar(80) DEFAULT NULL,
  `dir_tip` varchar(80) DEFAULT NULL,
  `cate_tip` varchar(80) DEFAULT NULL,
  `emp_tip` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`cod_tip`, `tipo_tip`, `img_tip`, `dir_tip`, `cate_tip`, `emp_tip`) VALUES
(1, 'autoflorecientes', '/images/semillas/geaseeds/autoflorecientes.jfif', '/tienda/semillas/geaseeds.php', 'semillas', 'geaseeds'),
(2, 'feminizadas', '/images/semillas/geaseeds/geaseeds.png', '/tienda/semillas/geaseeds.php', 'semillas', 'geaseeds');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `cod_ven` int(11) NOT NULL,
  `sid_ven` varchar(50) DEFAULT NULL,
  `fech_van` varchar(30) DEFAULT NULL,
  `nom_ven` varchar(40) DEFAULT NULL,
  `dira_ven` varchar(100) DEFAULT NULL,
  `dirb_ven` varchar(100) DEFAULT NULL,
  `ciud_ven` varchar(20) DEFAULT NULL,
  `codp_ven` varchar(20) DEFAULT NULL,
  `email_ven` varchar(50) DEFAULT NULL,
  `tel_ven` varchar(20) DEFAULT NULL,
  `ced_ven` varchar(10) DEFAULT NULL,
  `adi_ven` text DEFAULT NULL,
  `total_ven` decimal(20,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`cod_ven`, `sid_ven`, `fech_van`, `nom_ven`, `dira_ven`, `dirb_ven`, `ciud_ven`, `codp_ven`, `email_ven`, `tel_ven`, `ced_ven`, `adi_ven`, `total_ven`) VALUES
(39, 'u7jsl8nj0bi0vp7l7h8avbjtig', '16-01-2022 / 07:24:47 pm', 'andres felipe gonzales pino', 'diagonal 101a #2-08,', 'tienda los pinos, barrio e brillante, zona quinta de usme', 'bogota', '110511', 'andres.gonzalezp@cun.edu.co', '3124930278', '100000', 'chfghgfjhgj', '170.000'),
(40, 'u7jsl8nj0bi0vp7l7h8avbjtig', '16-01-2022 / 07:33:02 pm', 'andres felipe gonzales pino', 'diagonal 101a #2-08,', 'tienda los pinos, barrio e brillante, zona quinta de usme', 'bogota', '110511', 'andres.gonzalezp@cun.edu.co', '3124930278', '100000', 'chfghgfjhgj', '185.000'),
(41, 'u7jsl8nj0bi0vp7l7h8avbjtig', '16-01-2022 / 07:50:36 pm', 'andres felipe gonzales pino', 'diagonal 101a #2-08,', 'tienda los pinos, barrio e brillante, zona quinta de usme', 'bogota', '110511', 'andres.gonzalezp@cun.edu.co', '3124930278', '100000', 'chfghgfjhgj', '15.000'),
(42, 'u7jsl8nj0bi0vp7l7h8avbjtig', '16-01-2022 / 07:53:09 pm', 'andres felipe gonzales pino', 'diagonal 101a #2-08,', 'tienda los pinos, barrio e brillante, zona quinta de usme', 'bogota', '110511', 'andres.gonzalezp@cun.edu.co', '3124930278', '100000', 'chfghgfjhgj', '170.000'),
(43, 'mhaah8qp5m7m2v9e6ejjphbnoi', '17-01-2022 / 09:33:19 am', 'andres felipe gonzales pino', 'diagonal 101a #2-08,', 'tienda los pinos, barrio e brillante, zona quinta de usme', 'bogota', '110511', 'andres.gonzalezp@cun.edu.co', '3124930278', '100000', 'chfghgfjhgj', '15.000'),
(44, 'mhaah8qp5m7m2v9e6ejjphbnoi', '17-01-2022 / 09:50:17 am', 'andres felipe gonzales pino', 'diagonal 101a #2-08,', 'tienda los pinos, barrio e brillante, zona quinta de usme', 'bogota', '110511', 'andres.gonzalezp@cun.edu.co', '3124930278', '100000', 'chfghgfjhgj', '170.000'),
(45, 'mhaah8qp5m7m2v9e6ejjphbnoi', '17-01-2022 / 09:51:07 am', 'andres felipe gonzales pino', 'diagonal 101a #2-08,', 'tienda los pinos, barrio e brillante, zona quinta de usme', 'bogota', '110511', 'andres.gonzalezp@cun.edu.co', '3124930278', '100000', 'chfghgfjhgj', '170.000'),
(46, 'p92f43gks4401e40o1knln0quh', '23-01-2022 / 10:01:39 am', 'andres felipe gonzales pino', 'diagonal 101a #2-08,', 'tienda los pinos, barrio e brillante, zona quinta de usme', 'bogota', '110511', 'andres.gonzalezp@cun.edu.co', '3124930278', '100000', 'chfghgfjhgj', '170.000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cod_cate`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ced_cli`);

--
-- Indices de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD PRIMARY KEY (`cod_det`),
  ADD KEY `ventas_det` (`ventas_det`),
  ADD KEY `productos_det` (`productos_det`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`cod_emp`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`cod_pro`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`cod_tip`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`cod_ven`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cod_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  MODIFY `cod_det` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `cod_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `cod_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `cod_tip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `cod_ven` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD CONSTRAINT `detalleventa_ibfk_1` FOREIGN KEY (`ventas_det`) REFERENCES `ventas` (`cod_ven`),
  ADD CONSTRAINT `detalleventa_ibfk_2` FOREIGN KEY (`productos_det`) REFERENCES `productos` (`cod_pro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
