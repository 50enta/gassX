-- Função que retorna o saldo (ultimo registo e tal)
CREATE DEFINER=`root`@`localhost` FUNCTION `saldo`() RETURNS double 
NO SQL
return (SELECT valor FROM dinheiros WHERE id = (select max(`id`) from dinheiros));


-- Função que faz o aumento do valor passado por parâmetro na tabela dinheiros
DELIMITER //
CREATE FUNCTION `aumentarDinheiro`(`valor` DOUBLE) 
RETURNS INTEGER 
BEGIN
insert into dinheiros(`valor`, `created_at`,`updated_at`) values (`valor` + (select saldo()), CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
RETURN (select max(`id`) from dinheiros);
END //
DELIMITER ;


-- Função que faz o decremento do valor passado por parâmentro no saldo atual da associação
DELIMITER //
CREATE FUNCTION `diminuirDinheiro`(`valor` DOUBLE) 
RETURNS INTEGER 
BEGIN
insert into dinheiros(`valor`, `created_at`,`updated_at`) values ((select saldo()) - `valor` , CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
RETURN (select max(`id`) from dinheiros);
END //
DELIMITER ;


-- Procedimento para registo de entradas
DELIMITER //
CREATE procedure `registarEntrada`(`valor` DOUBLE)  
BEGIN
insert into entradas(`valor`, `created_at`,`updated_at`, `dinheiro_id`) values (`valor` , CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, (select aumentarDinheiro(`valor`)));
END //
DELIMITER ;


--  Procedimento para registo de saidas
DELIMITER //
CREATE procedure `registarSaida`(`valor` DOUBLE) 
BEGIN
insert into saidas(`valor`, `created_at`,`updated_at` , `dinheiro_id`) values (`valor` , CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, (select diminuirDinheiro (`valor`)));
END //
DELIMITER ;