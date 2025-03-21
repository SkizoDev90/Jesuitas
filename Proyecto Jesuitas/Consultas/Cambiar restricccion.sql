ALTER TABLE Ofertas
ADD CONSTRAINT FK_Empleados_Departamentos_Nueva
FOREIGN KEY (idempresa)
REFERENCES Empresas (idempresa)
ON DELETE CASCADE
ON UPDATE NO ACTION;