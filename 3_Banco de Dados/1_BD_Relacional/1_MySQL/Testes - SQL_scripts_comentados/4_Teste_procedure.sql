DELIMITER $$ 
CREATE PROCEDURE sp_pessoa_save (pnome VARCHAR(100), psalario DECIMAL(10,2), dt_admissao DATETIME)
BEGIN
	
    /* Como criar uma variável */
	/*DECLARE ID_pessoa INT;*/
    
    START TRANSACTION;
    
    IF NOT EXISTS(select id_pessoa from tb_pessoas where nome = pnome) THEN
		
        INSERT INTO tb_pessoas VALUES (DEFAULT, pnome, DEFAULT);
        
        SET ID_pessoa = last_insert_id();
        
	ELSE
		
        SELECT 'Usuário já cadastrado!' AS resultado;
        ROLLBACK;
        
	END IF;
    
    COMMIT;
    
    SELECT 'Operação realizada com sucesso!' AS resultado;
    
END $$
DELIMITER ;

CALL sp_pessoa_save ('Fulano Beltrano', 50000, current_date());
