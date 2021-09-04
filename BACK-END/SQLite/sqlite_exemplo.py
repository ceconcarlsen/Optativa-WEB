import sqlite3
from sqlite3.dbapi2 import Cursor

conn = sqlite3.connect('teste.db') #conectar ao banco teste.db (senão existir cria um novo)
print("Banco de dados aberto com sucesso !")

"""
#tabela com id, name, age, address, salary
conn.execute(
    create table company
    (id int primary key not null,
     name text not null,
     age int not null,
     address char(50),
     salary real); 
)
print("Tabela criada com sucesso !")
"""

print("Dados inseridos com sucesso !")
conn.commit()

cursor = conn.execute("SELECT id, name, address, salary from COMPANY")

for row in cursor:
    print("ID: ", row[0])
    print("NAME: ", row[1])
    print("ADDRESS: ", row[2])
    print("SALARY: ", row[3])
    print("\n")

print("Dados recuperados com sucesso !")
conn.close()
