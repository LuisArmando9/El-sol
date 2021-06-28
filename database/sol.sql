-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2021 a las 21:20:29
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer`
--
CREATE DATABASE sol;
CREATE TABLE `customer` (
  `idCustomer` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `CreateAt` datetime NOT NULL,
  `UpdateAt` varchar(45) NOT NULL,
  `User_idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `customer`
--

INSERT INTO `customer` (`idCustomer`, `FullName`, `Phone`, `Email`, `CreateAt`, `UpdateAt`, `User_idUser`) VALUES
(1, 'El papucho', 2147483647, 'ah256337332@gmail.com', '2021-06-27 17:28:23', '2021-06-27 19:28:18', 1),
(2, 'Luis Armando riko wapo', 2147483647, 'ah256337332@gmail.com', '2021-06-27 17:41:41', '2021-06-27 20:10:17', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoice`
--

CREATE TABLE `invoice` (
  `idInvoice` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Kind_Company_Name` enum('PhysicalGuy','Moral') NOT NULL,
  `RFC` varchar(15) NOT NULL,
  `Invoicecol` varchar(45) NOT NULL,
  `Description` text NOT NULL,
  `Phone` int(12) NOT NULL,
  `IdSale` int(11) NOT NULL,
  `IdUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Code` varchar(10) NOT NULL,
  `State` enum('ACTIVE','NON-ACTIVE') NOT NULL,
  `Category` enum('PULSERAS','CARTERAS') NOT NULL,
  `Stock` int(11) NOT NULL,
  `Iva` double NOT NULL,
  `PricePerUnit` double NOT NULL,
  `Description` text NOT NULL,
  `Path` text NOT NULL,
  `CreateAt` datetime NOT NULL,
  `UpdateAt` datetime NOT NULL,
  `IdUser` int(11) NOT NULL,
  `Inventory` enum('INVENTORY-MANAGEMENT','NOT-INVENTORY-MANAGEMENT') NOT NULL,
  `IvaType` enum('ACTIVE','NON-ACTIVE') NOT NULL,
  `MinimumStock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`idProduct`, `Name`, `Code`, `State`, `Category`, `Stock`, `Iva`, `PricePerUnit`, `Description`, `Path`, `CreateAt`, `UpdateAt`, `IdUser`, `Inventory`, `IvaType`, `MinimumStock`) VALUES
(4, 'Pulsera', '1234567890', 'NON-ACTIVE', 'CARTERAS', 232, 9, 8003, '                    Es prueba de la actualización super mamalona                  ', '1624835811_8bc119f67e2355462f2a.jpg', '2021-06-17 13:42:15', '2021-06-27 18:16:51', 1, 'INVENTORY-MANAGEMENT', 'ACTIVE', 12),
(7, 'Pulsera', '12314143js', 'ACTIVE', 'PULSERAS', 232, 34, 90, '                    Es una prueba, no sabría decir.                  ', '1624847955_b2b6b5b88737012debca.jpg', '2021-06-27 21:24:32', '2021-06-27 21:39:15', 1, 'INVENTORY-MANAGEMENT', 'ACTIVE', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_to_provider`
--

CREATE TABLE `product_to_provider` (
  `idProduct` int(11) NOT NULL,
  `idProvider` int(11) NOT NULL,
  `CreateAt` datetime NOT NULL,
  `UpdateAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provider`
--

CREATE TABLE `provider` (
  `idProvider` int(11) NOT NULL,
  `BusinessName` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `WebPage` text DEFAULT NULL,
  `AgentNameOfBusiness` varchar(255) NOT NULL,
  `BusinessPhoneNumber` varchar(12) NOT NULL,
  `AgentEmail` varchar(255) NOT NULL,
  `RFC` varchar(15) NOT NULL,
  `BusinessEmail` varchar(255) NOT NULL,
  `CreateAt` datetime NOT NULL,
  `UpdateAt` datetime NOT NULL,
  `IdUser` int(11) NOT NULL,
  `Photo` text NOT NULL,
  `AgentPhone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provider`
--

INSERT INTO `provider` (`idProvider`, `BusinessName`, `Address`, `WebPage`, `AgentNameOfBusiness`, `BusinessPhoneNumber`, `AgentEmail`, `RFC`, `BusinessEmail`, `CreateAt`, `UpdateAt`, `IdUser`, `Photo`, `AgentPhone`) VALUES
(3, 'Anillos SmugeLord', 'Ciudad de Mex. #130', 'www.anillox.com', 'Smuge lord', '2464648206', 'macaco@gmail.com', 'PEGM9007151H0', 'anillox@anillos.com', '2021-06-28 12:11:22', '2021-06-28 13:12:45', 1, '1624901403_dda15d889104b445b4d1.jpg', '2464648207');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sale`
--

CREATE TABLE `sale` (
  `idSale` int(11) NOT NULL,
  `Products_Number` int(5) NOT NULL,
  `Total` double NOT NULL,
  `Observation` text NOT NULL,
  `Create_At` datetime NOT NULL,
  `IdUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sale_to_product`
--

CREATE TABLE `sale_to_product` (
  `Sale_idSale` int(11) NOT NULL,
  `Product_idProduct` int(11) NOT NULL,
  `Number_Products` int(11) NOT NULL,
  `Create_At` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `Type` enum('ADMIN','NON-ADMIN') NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(12) DEFAULT NULL,
  `Photo` text DEFAULT NULL,
  `Password` text NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `CreateAt` datetime DEFAULT NULL,
  `UpdateAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`idUser`, `Type`, `FullName`, `Email`, `Phone`, `Photo`, `Password`, `UserName`, `CreateAt`, `UpdateAt`) VALUES
(1, 'ADMIN', 'Luis Armando Hernandez Vazquez', 'ah25632@gmail.com', '24644747488', '1624842971_e421a91277dfb1a1b871.jpg', '$2y$10$RQ2ZLkQcQ/h5IohFKlrhhep1Q5Upb/5u4EFOviaehRULMbcNK8qX2', 'arman98', '2021-06-01 16:22:02', '2021-06-27 20:24:51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idCustomer`),
  ADD KEY `fk_Customer_User1_idx` (`User_idUser`);

--
-- Indices de la tabla `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`idInvoice`),
  ADD KEY `fk_Invoice_Sale1_idx` (`IdSale`),
  ADD KEY `fk_Invoice_User1_idx` (`IdUser`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`),
  ADD KEY `fk_Product_Client1_idx` (`IdUser`);

--
-- Indices de la tabla `product_to_provider`
--
ALTER TABLE `product_to_provider`
  ADD PRIMARY KEY (`idProduct`,`idProvider`),
  ADD KEY `fk_Product_has_Provider_Provider1_idx` (`idProvider`),
  ADD KEY `fk_Product_has_Provider_Product1_idx` (`idProduct`);

--
-- Indices de la tabla `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`idProvider`),
  ADD KEY `fk_Provider_Client1_idx` (`IdUser`);

--
-- Indices de la tabla `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`idSale`),
  ADD KEY `fk_Sale_Client1_idx` (`IdUser`);

--
-- Indices de la tabla `sale_to_product`
--
ALTER TABLE `sale_to_product`
  ADD PRIMARY KEY (`Sale_idSale`,`Product_idProduct`),
  ADD KEY `fk_Sale_has_Product_Product1_idx` (`Product_idProduct`),
  ADD KEY `fk_Sale_has_Product_Sale1_idx` (`Sale_idSale`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `customer`
--
ALTER TABLE `customer`
  MODIFY `idCustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `invoice`
--
ALTER TABLE `invoice`
  MODIFY `idInvoice` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `provider`
--
ALTER TABLE `provider`
  MODIFY `idProvider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sale`
--
ALTER TABLE `sale`
  MODIFY `idSale` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_Customer_User1` FOREIGN KEY (`User_idUser`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `fk_Invoice_Sale1` FOREIGN KEY (`IdSale`) REFERENCES `sale` (`idSale`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Invoice_User1` FOREIGN KEY (`IdUser`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_Product_Client1` FOREIGN KEY (`IdUser`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `product_to_provider`
--
ALTER TABLE `product_to_provider`
  ADD CONSTRAINT `fk_Product_has_Provider_Product1` FOREIGN KEY (`idProduct`) REFERENCES `product` (`idProduct`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Product_has_Provider_Provider1` FOREIGN KEY (`idProvider`) REFERENCES `provider` (`idProvider`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `provider`
--
ALTER TABLE `provider`
  ADD CONSTRAINT `fk_Provider_Client1` FOREIGN KEY (`IdUser`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `fk_Sale_Client1` FOREIGN KEY (`IdUser`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sale_to_product`
--
ALTER TABLE `sale_to_product`
  ADD CONSTRAINT `fk_Sale_has_Product_Product1` FOREIGN KEY (`Product_idProduct`) REFERENCES `product` (`idProduct`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Sale_has_Product_Sale1` FOREIGN KEY (`Sale_idSale`) REFERENCES `sale` (`idSale`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
