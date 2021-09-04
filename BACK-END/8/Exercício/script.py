"""
Desenvolvimento de aplicações para a internet (OPT)
Gabriel Cecon Carlsen 
Aula 8 - Python: estruturação e operadores

Problema: Média geométrica (pares) e média aritmética (impares)
Solução: Separar os pares e impares em outras lista para executar suas respectivas funções

"""

import numpy as np  #Para usar a função prod() -> produtos dos elementos de uma lista

lista = [1,2,3,4,5] #Lista original
listaPares = []     #Lista pares
listaImpares = []   #Lista impares

def imprime_lista(l): #Imprime lista
    for i in l:
       print(i)

def media_geo(l):   #Média geométrica
    l_aux = np.prod(l) 
    return l_aux**(1.0/len(l))

def media_art(l):
    return sum(l [0:len(l)]) / len(l) #Média aritmética


for i in range(len(lista)): #Criando as listas
     
    if (i % 2) == 0:
         listaPares.append(lista[i])
    else:
         listaImpares.append(lista[i])

#Resultados
print("Lista Índices Pares")
imprime_lista(listaPares)
print("Lista Índices Impares")
imprime_lista(listaImpares)

print("\nMédia Geométrica: %.5f" % media_geo(listaPares))
print("Média Aritmética:",media_art(listaImpares))