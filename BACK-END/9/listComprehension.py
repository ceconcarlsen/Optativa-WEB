nomes = ["gabriel", "pedro", "david", "joão"]
lista = [nome.upper() for nome in nomes] #list comprehension: para upper todos os nome em nomes
print(lista)

numeros = [1,2,3,4,5,6,7,8,9,10]
lista_pares = [numero for numero in numeros if numero % 2 == 0] #apenas números pares
print(lista_pares)

"""
#DESAFIO: receber uma matriz e retornar sua transposta (coluna vira linha) usando list comprehension
matriz = [[1,0,33,0,2], [65,22,33,44,2], [1,2,3,8,96]]


 1  0   33   0   2                1  65  1
 65 22  33   44  2      ->        0  22  2  
 1  2   3    8   96               33 33  3
                                  0  44  8
                                  2  2   96

ordem 5x3                        ordem 3x5

def matriz_transposta(M):
    matriz_t = [[k[0] for k in M],[k[1] for k in M]]

 

for i in matriz_transposta:
    print(i)

"""

# Funções Lambda (anônimas)

x = 10 
multpordois = lambda x : x*2
print(multpordois)

pares = list(filter(lambda x : x%2==0, numeros)) #usando funções anônimas
print(pares)

# Dicionários

d = {1: "palmeiras", 2: "são paulo", 3: "flamengo"}
print(d[1])
print(d.get(1))

if d.get(4) == None: #get não lança exceção no terminal
    print("erro")
